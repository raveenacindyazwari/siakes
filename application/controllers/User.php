<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        
        $this->load->model('User_m');
        $this->load->library('form_validation');
    }
    public function index()
    {
        check_admin();
        $data['row'] = $this->User_m->get();
        $this->template->load('template', 'admin/user/user_data', $data);
    }
    public function add()
    {
        check_admin();
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules(
            'passconf',
            'Konfirmasi Password',
            'required|matches[password]',
            array('matches' => '%s tidak sesuai dengan password')
        );
        $this->form_validation->set_rules('level', 'Level', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        $this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti');

        $this->form_validation->set_error_delimiters('<span class="required">*', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'admin/user/user_form_add');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->User_m->add($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan');
            }
            redirect('User');
        }
    }

    public function edit($id)
    {
        check_admin();
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
        if ($this->input->post('password')) {
            $this->form_validation->set_rules('password', 'Password', 'min_length[5]');
            $this->form_validation->set_rules(
                'passconf',
                'Konfirmasi Password',
                '|matches[password]',
                array('matches' => '%s tidak sesuai dengan password')
            );
        }
        if ($this->input->post('passconf')) {
            $this->form_validation->set_rules(
                'passconf',
                'Konfirmasi Password',
                'matches[password]',
                array('matches' => '%s tidak sesuai dengan password')
            );
        }
        $this->form_validation->set_rules('level', 'Level', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        $this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti');

        $this->form_validation->set_error_delimiters('<span class="required">*', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->User_m->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'admin/user/user_form_edit', $data);
            } else {
                echo "<script>alert('data tidak ditemukan');";
                echo "window.location='" . site_url('User') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->User_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan');
            }
            redirect('User');
        }
    }
    function username_check()
    {
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM user WHERE username = '$post[username]' AND id_user != '$post[id_user]'");
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('username_check', '{field} ini sudah dipakai, silahkan ganti');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function changePassword()
    {
        $this->form_validation->set_rules(
            'passwordlama',
            'Password Lama',
            'required|trim',
            [
                'required' => 'Password lama harus diisi.',
            ]
        );
        $this->form_validation->set_rules(
            'passwordbaru',
            'Password Baru',
            'required|trim|min_length[5]',
            [
                'required' => 'Password baru harus diisi.',
                'min_lenght' => 'Password minimal 5 karakter'
            ]
        );
        $this->form_validation->set_rules(
            'passconf',
            'Konfirmasi Password Baru',
            'required|matches[passwordbaru]',
            array('matches' => '%s tidak sesuai dengan password baru')
        );

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'change_password');
        } else {
            $data = array(
                'password' => md5($this->input->post('passwordbaru'))
            );

            $result = $this->User_m->check_oldpass($this->session->userdata('iduser'),  md5($this->input->post('passwordlama')));

            if ($result > 0 and $result === true) {
                $result =  $this->User_m->update_password($this->session->userdata('iduser'), $data);
                if ($result > 0) {
                    $this->session->set_flashdata('success', 'Password berhasil diubah!');
                    redirect('User/changePassword');
                } else {
                    $this->session->set_flashdata('error', 'Password tidak berubah!');
                    redirect('User/changePassword');
                }
            } else {
                $this->session->set_flashdata('error', 'Password lama salah!');
                redirect('User/changePassword');
            }
        }
    }

    public function del()
    {
        check_admin();
        $id = $this->input->post('id_user');
        $this->User_m->del($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        redirect('User');
    }
}
