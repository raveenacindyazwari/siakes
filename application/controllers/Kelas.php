<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('Kelas_m');
        $this->load->model('Bidang_Keahlian_m');
        $this->load->model('Guru_m');
        $this->load->model('Tahun_Ajaran_m');
        $this->load->model('Siswa_m');
    }
    public function index()
    {
        $data['row'] = $this->Kelas_m->get();
        $data['siswa'] = $this->Siswa_m->get();
        $this->template->load('template', 'admin/kelas/kelas_data', $data);
    }

    public function add()
    {
        $kelas = new stdClass();
        $kelas->id_kelas = null;
        $kelas->id_bidang = null;
        $kelas->id_tahun_ajaran = null;
        $kelas->id_guru = null;
        $kelas->kelas = null;
        $query_bidang = $this->Bidang_Keahlian_m->get();
        $query_tahun_ajaran = $this->Tahun_Ajaran_m->get();
        $query_guru = $this->Guru_m->get();

        $data = array(
            'page' => 'add',
            'show' => 'Tambah',
            'row' => $kelas,
            'bidang' => $query_bidang,
            'tahun_ajaran' => $query_tahun_ajaran,
            'guru' => $query_guru,
        );
        $this->template->load('template', 'admin/kelas/kelas_form', $data);
    }


    public function detail($id)
    {
        $query = $this->Kelas_m->get($id);
        if ($query->num_rows() > 0) {
            $kelas = $query->row();
            $siswa =  $this->Kelas_m->get_siswa($id);
            $query_bidang = $this->Bidang_Keahlian_m->get();
            $query_tahun_ajaran = $this->Tahun_Ajaran_m->get();
            $query_guru = $this->Guru_m->get();
            $data = array(
                'page' => 'detail',
                'show' => 'Detail',
                'row' => $kelas,
                'bidang' => $query_bidang,
                'tahun_ajaran' => $query_tahun_ajaran,
                'guru' => $query_guru,
                'siswa' => $siswa,
            );
            $this->template->load('template', 'admin/kelas/kelas_form_add', $data);
        }
    }
    public function edit($id)
    {
        $query = $this->Kelas_m->get($id);
        if ($query->num_rows() > 0) {
            $kelas = $query->row();
            $query_bidang = $this->Bidang_Keahlian_m->get();
            $query_tahun_ajaran = $this->Tahun_Ajaran_m->get();
            $query_guru = $this->Guru_m->get();
            $data = array(
                'page' => 'edit',
                'show' => 'Edit',
                'row' => $kelas,
                'bidang' => $query_bidang,
                'tahun_ajaran' => $query_tahun_ajaran,
                'guru' => $query_guru,
            );
            $this->template->load('template', 'admin/kelas/kelas_form', $data);
        } else {
            echo "<script>alert('data tidak ditemukan');";
            echo "window.location='" . site_url('Kelas') . "';</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->Kelas_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->Kelas_m->edit($post);
        }

        // if ($this->db->affected_rows() > 0) {
        //     $this->session->set_flashdata('success', 'Data berhasil disimpan');
        // }
        redirect('Kelas');
    }
    public function del($id)
    {
        $this->Kelas_m->del($id);
        // if($this->db->affected_rows() > 0) {
        //     $this->session->set_flashdata('success', 'Data berhasil dihapus');
        // }
        redirect('Kelas');
    }

    public function del_siswa($id)
    {
        $this->Kelas_Siswa_m->del($id);
        // if($this->db->affected_rows() > 0) {
        //     $this->session->set_flashdata('success', 'Data berhasil dihapus');
        // }
        redirect($_SERVER['HTTP_REFERER']);
    }
}
