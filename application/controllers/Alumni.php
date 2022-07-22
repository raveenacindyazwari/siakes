<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alumni extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('Alumni_m');
        // $this->load->model('Siswa_m');
        $this->load->model('Bidang_Keahlian_m');
    }
    public function index()
    {
        $data['row'] = $this->Alumni_m->get();
        $this->template->load('template', 'admin/alumni/alumni_data', $data);
    }
    // public function tampil()
    // {
    //     $data['row'] = $this->Alumni_m->get();
    //     $this->template->load('template', 'kepsek/alumni/alumni_data', $data);
    // }
    public function add()
    {
        check_admin();
        $alumni = new stdClass();
        $alumni->id_alumni = null;
        $alumni->nisn = null;
        $alumni->nama_alumni = null;
        $alumni->jenis_kelamin = null;
        $alumni->id_bidang = null;
        $alumni->tahun_lulus = null;
        $alumni->keterangan = null;
        $query_bidang = $this->Bidang_Keahlian_m->get();
        $query_siswa = $this->Alumni_m->tampil_data();

        $data = array(
            'record' => $query_siswa,
            'page' => 'add',
            'show' => 'Tambah',
            'bidang' => $query_bidang,
            'row' => $alumni,
        );
        $this->template->load('template', 'admin/alumni/alumni_form', $data);
    }

    public function cari()
    {
        $nisn = $_GET['nisn'];
        $cari = $this->Alumni_m->cari($nisn)->result();
        echo json_encode($cari);
    }
    public function edit($id)
    {
        check_admin();
        $query = $this->Alumni_m->get($id);
        if ($query->num_rows() > 0) {
            $alumni = $query->row();
            $query_bidang = $this->Bidang_Keahlian_m->get();
            // $query_siswa = $this->Alumni_m->tampil_data();
            $data = array(
                'page' => 'edit',
                'show' => 'Edit',
                'row' => $alumni,
                'bidang' => $query_bidang,
                // 'record' => $query_siswa,
            );
            $this->template->load('template', 'admin/alumni/alumni_edit_form', $data);
        } else {
            echo "<script>alert('data tidak ditemukan');";
            echo "window.location='" . site_url('Alumni') . "';</script>";
        }
    }

    public function process()
    {
        check_admin();
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            if ($this->Alumni_m->check_nisn($post['nisn'])->num_rows() > 0) {
                $this->session->set_flashdata('error', "NISN $post[nisn] sudah terdaftar sebagai alumni!");
                redirect('Alumni/add');
            } else {
                $this->Alumni_m->add($post);
            }
        } else if (isset($_POST['edit'])) {
            if ($this->Alumni_m->check_nisn($post['nisn'], $post['id'])->num_rows() > 0) {
                $this->session->set_flashdata('error', "NISN $post[nisn] sudah terdaftar sebagai alumni!");
                redirect('Alumni/edit/' . $post['id']);
            } else {
                $this->Alumni_m->edit($post);
            }
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('Alumni');
    }
    public function del($id)
    {
        check_admin();
        $this->Alumni_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        redirect('Alumni');
    }
}
