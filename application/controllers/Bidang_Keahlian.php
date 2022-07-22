<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bidang_Keahlian extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('Bidang_Keahlian_m');
    }

    public function index()
    {
        $data['row'] = $this->Bidang_Keahlian_m->get();
        $this->template->load('template', 'admin/bidang_keahlian/bidang_keahlian_data', $data);
    }

    public function add()
    {
        $bidang = new stdClass();
        $bidang->id_bidang = null;
        $bidang->bidang_keahlian = null;
        $bidang->program_keahlian = null;
        $bidang->kompetensi_keahlian = null;
        $data = array(
            'page' => 'add',
            'show' => 'tambah',
            'row' => $bidang
        );
        $this->template->load('template', 'admin/bidang_keahlian/bidang_form', $data);
    }

    public function edit($id)
    {
        $query = $this->Bidang_Keahlian_m->get($id);
        if ($query->num_rows() > 0) {
            $bidang = $query->row();
            $data = array(
                'page' => 'edit',
                'show' => 'edit',
                'row' => $bidang
            );
            $this->template->load('template', 'admin/bidang_keahlian/bidang_form', $data);
        } else {
            echo "<script>alert('data tidak ditemukan');";
            echo "window.location='" . site_url('Bidang_keahlian') . "';</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->Bidang_Keahlian_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->Bidang_Keahlian_m->edit($post);
        }

        // if ($this->db->affected_rows() > 0) {
        //     $this->session->set_flashdata('success', 'Data berhasil disimpan');
        // }
        redirect('Bidang_Keahlian');
    }
    public function del($id)
    {
        $this->Bidang_Keahlian_m->del($id);
        // if($this->db->affected_rows() > 0) {
        //     $this->session->set_flashdata('success', 'Data berhasil dihapus');
        // }
        redirect('Bidang_Keahlian');
    }
}
