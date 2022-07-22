<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('Guru_m');
    }
    public function index()
    {
        $data['row'] = $this->Guru_m->get();
        $this->template->load('template', 'admin/guru/guru_data', $data);
    }
    public function add()
    {
        $guru = new stdClass();
        $guru->id_guru = null;
        $guru->nip = null;
        $guru->username = null;
        $guru->password = null;
        $guru->nama_guru = null;
        $guru->tempat_lahir = null;
        $guru->tanggal_lahir = null;
        $guru->jenis_kelamin = null;
        $guru->alamat = null;
        $guru->agama = null;
        $guru->pendidikan_terakhir = null;
        $guru->bidang_studi = null;

        $data = array(
            'page' => 'add',
            'show' => 'Tambah',
            'row' => $guru,

        );
        $this->template->load('template', 'admin/guru/guru_form', $data);
    }
    public function edit($id)
    {
        $query = $this->Guru_m->get($id);
        if ($query->num_rows() > 0) {
            $guru = $query->row();
            $data = array(
                'page' => 'edit',
                'show' => 'Edit',
                'row' => $guru,
            );
            $this->template->load('template', 'admin/guru/guru_form', $data);
        } else {
            echo "<script>alert('data tidak ditemukan');";
            echo "window.location='" . site_url('Guru') . "';</script>";
        }
    }
    public function detail($id)
    {
        $query = $this->Guru_m->get($id);
        if ($query->num_rows() > 0) {
            $guru = $query->row();
            $data = array(
                'page' => 'detail',
                'show' => 'Detail',
                'row' => $guru,
            );
            $this->template->load('template', 'admin/guru/guru_detail', $data);
        } else {
            echo "<script>alert('data tidak ditemukan');";
            echo "window.location='" . site_url('Guru') . "';</script>";
        }
    }
    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->Guru_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->Guru_m->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('Guru');
    }
    public function del($id)
    {
        $this->Guru_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        redirect('Guru');
    }
}
