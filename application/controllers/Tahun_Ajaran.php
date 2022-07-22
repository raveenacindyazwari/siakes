<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tahun_Ajaran extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        // $this->load->model('Siswa_m');
        $this->load->model('Tahun_Ajaran_m');
    }
    public function index()
    {
        $data['row'] = $this->Tahun_Ajaran_m->get();
        $this->template->load('template', 'admin/tahun_ajaran/tahun_ajaran_data', $data);
    }
    public function add()
    {
        $tahun_ajaran = new stdClass();
        $tahun_ajaran->id_tahun_ajaran = null;
        $tahun_ajaran->tahun_ajaran = null;
        $tahun_ajaran->semester = null;

        $data = array(
            'page' => 'add',
            'show' => 'Tambah',
            'row' => $tahun_ajaran,

        );
        $this->template->load('template', 'admin/tahun_ajaran/tahun_ajaran_form', $data);
    }
    public function edit($id)
    {
        $query = $this->Tahun_Ajaran_m->get($id);
        if ($query->num_rows() > 0) {
            $tahun_ajaran = $query->row();
            $data = array(
                'page' => 'edit',
                'show' => 'Edit',
                'row' => $tahun_ajaran,
            );
            $this->template->load('template', 'admin/tahun_ajaran/tahun_ajaran_form', $data);
        } else {
            echo "<script>alert('data tidak ditemukan');";
            echo "window.location='" . site_url('Tahun_Ajaran') . "';</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->Tahun_Ajaran_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->Tahun_Ajaran_m->edit($post);
        }

        // if ($this->db->affected_rows() > 0) {
        //     $this->session->set_flashdata('success', 'Data berhasil disimpan');
        // }
        redirect('Tahun_Ajaran');
    }
    public function del($id)
    {
        $this->Tahun_Ajaran_m->del($id);
        // if($this->db->affected_rows() > 0) {
        //     $this->session->set_flashdata('success', 'Data berhasil dihapus');
        // }
        redirect('Tahun_Ajaran');
    }
}