<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rapor extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();

        $this->load->model('Jadwal_Pelajaran_m');
        $this->load->model('Mata_Pelajaran_m');
        $this->load->model('Bidang_Keahlian_m');
        $this->load->model('Guru_m');
        $this->load->model('Kelas_m');
        $this->load->model('Tahun_Ajaran_m');
        $this->load->model('Rapor_m');
        $this->load->model('Siswa_m');
    }
    public function index()
    {

        $level_s = $this->session->userdata('level');
        $id = $this->session->userdata('kelas');
        $idd_siswa = $this->session->userdata('iduser');


        $guru = $this->Guru_m->get()->result();
        $mata_pelajaran = $this->Mata_Pelajaran_m->get()->result();
        $bidang_keahlian = $this->Bidang_Keahlian_m->get()->result();
        $kelas = $this->Kelas_m->get()->result();
        $tahun_ajaran = $this->Tahun_Ajaran_m->get()->result();
        $rapor = $this->Rapor_m->get_rapor_siswa($idd_siswa)->result();
        if ($level_s == 'Siswa') {
            $jadwal_pelajaran = $this->Rapor_m->get_mapel_siswa($id);
        } else if ($level_s == 'Guru') {
            $jadwal_pelajaran = $this->Rapor_m->get_mapel_guru($idd_siswa);
        } else {
            $jadwal_pelajaran = $this->Rapor_m->get_mapel();
        }

        $data = array(
            'guru' => $guru,
            'mata_pelajaran' => $mata_pelajaran,
            'bidang_keahlian' => $bidang_keahlian,
            'kelas' => $kelas,
            'tahun_ajaran' => $tahun_ajaran,
            'tampil' => $jadwal_pelajaran,
            'rapor' => $rapor,


        );

        $this->template->load('template', 'admin/rapor/rapor_data', $data);
    }



    public function add($id = null, $id_kelas = null)
    {
        $query_jadwal_pelajaran = $this->Jadwal_Pelajaran_m->get($id);
        check_guru();
        $rapor = new stdClass();
        $rapor->id_rapor = null;
        $rapor->nisn = null;
        $rapor->nama_siswa = null;
        $rapor->id_jadwal_pelajaran = null;
        $rapor->id_siswa = null;
        $rapor->nilai_pengetahuan = null;
        $rapor->nilai_keterampilan = null;
        // $rapor->nilai_akhir = null;
        // $rapor->nilai_predikat = null;

        $query_siswa = $this->Rapor_m->tampil_data($id_kelas);

        $data = array(
            'page' => 'add',
            'show' => 'Tambah',
            'row' => $rapor,
            'record' => $query_siswa,
            'jadwal_pelajaran' => $query_jadwal_pelajaran,

        );
        $this->template->load('template', 'admin/rapor/rapor_form', $data);
    }

    public function detail($id)
    {

        $level_s = $this->session->userdata('level');
        $idd = $this->session->userdata('kelas');

        $guru = $this->Guru_m->get()->result();
        $mata_pelajaran = $this->Mata_Pelajaran_m->get()->result();
        $bidang_keahlian = $this->Bidang_Keahlian_m->get()->result();
        $kelas = $this->Kelas_m->get()->result();
        $tahun_ajaran = $this->Tahun_Ajaran_m->get()->result();
        $rapor = $this->Rapor_m->get_rapor($id)->result();
        if ($level_s == 'Siswa') {
            $jadwal_pelajaran = $this->Rapor_m->get_mapel_siswa($idd);
        } else {
            $jadwal_pelajaran = $this->Rapor_m->get($id);
        }

        $data = array(
            'guru' => $guru,
            'mata_pelajaran' => $mata_pelajaran,
            'bidang_keahlian' => $bidang_keahlian,
            'kelas' => $kelas,
            'tahun_ajaran' => $tahun_ajaran,
            'tampil' => $jadwal_pelajaran,
            'rapor' => $rapor


        );

        $this->template->load('template', 'admin/rapor/rapor_detail', $data);
    }

    public function edit($id)
    {
        // check_admin();
        $query = $this->Rapor_m->get_rapor_rapor($id);
        if ($query->num_rows() > 0) {
            $rapor = $query->row();

            $data = array(
                'page' => 'edit',
                'row' => $rapor,
            );
            $this->template->load('template', 'admin/rapor/rapor_edit_form', $data);
        } else {
            echo "<script>alert('data tidak ditemukan');";
            echo "window.location='" . site_url('Rapor') . "';</script>";
        }
    }

    public function cari()
    {
        $nisn = $_GET['nisn'];
        $cari = $this->Rapor_m->cari($nisn)->result();
        echo json_encode($cari);
    }

    public function process()
    {

        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->Rapor_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->Rapor_m->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('Rapor');
    }
    public function del($id)
    {
        // check_admin();
        $this->Rapor_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        redirect('Rapor');
    }
}
