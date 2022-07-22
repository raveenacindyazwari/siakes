<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal_Pelajaran extends CI_Controller
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
    }
    public function index()
    {

        $level_s = $this->session->userdata('level');
        $id = $this->session->userdata('kelas');
        $id_user = $this->session->userdata('iduser');
        $id_bidang = $this->input->get('pilih_bidang');

        $guru = $this->Guru_m->get()->result();
        $mata_pelajaran = $this->Mata_Pelajaran_m->get()->result();
        $bidang_keahlian = $this->Bidang_Keahlian_m->get()->result();
        $kelas = $this->Kelas_m->get()->result();
        $tahun_ajaran = $this->Tahun_Ajaran_m->get()->result();
        if ($level_s == 'Siswa') {
            $jadwal_pelajaran = $this->Jadwal_Pelajaran_m->get_mapel_siswa($id);
        } else if ($level_s == 'Admin') {
            $jadwal_pelajaran = $this->Jadwal_Pelajaran_m->get(NULL, $id_bidang);
        } else {
            $jadwal_pelajaran = $this->Jadwal_Pelajaran_m->get_mapel_guru($id_user);
        }

        $data = array(
            'guru' => $guru,
            'mata_pelajaran' => $mata_pelajaran,
            'bidang_keahlian' => $bidang_keahlian,
            'kelas' => $kelas,
            'tahun_ajaran' => $tahun_ajaran,
            'tampil' => $jadwal_pelajaran,


        );

        $this->template->load('template', 'admin/jadwal_pelajaran/jadwal_pelajaran_data', $data);
    }
    public function add()
    {
        check_admin();
        $jadwal_pelajaran = new stdClass();
        $jadwal_pelajaran->id_jadwal = null;
        $jadwal_pelajaran->id_mata_pelajaran = null;
        $jadwal_pelajaran->id_bidang = null;
        $jadwal_pelajaran->id_guru = null;
        $jadwal_pelajaran->id_kelas = null;
        $jadwal_pelajaran->id_tahun_ajaran = null;
        $jadwal_pelajaran->hari = null;
        $jadwal_pelajaran->jam_mulai = null;
        $jadwal_pelajaran->jam_selesai = null;
        $jadwal_pelajaran->keterangan = null;

        $query_bidang = $this->Bidang_Keahlian_m->get();
        $query_mata_pelajaran = $this->Mata_Pelajaran_m->get();
        $query_guru = $this->Guru_m->get();
        $query_kelas = $this->Kelas_m->get();
        $query_tahun_ajaran = $this->Tahun_Ajaran_m->get();


        $data = array(
            'page' => 'add',
            'show' => 'Tambah',
            'row' => $jadwal_pelajaran,
            'bidang' => $query_bidang,
            'mata_pelajaran' => $query_mata_pelajaran,
            'guru' => $query_guru,
            'kelas' => $query_kelas,
            'tahun_ajaran' => $query_tahun_ajaran,

        );
        $this->template->load('template', 'admin/jadwal_pelajaran/jadwal_pelajaran_data', $data);
    }

    public function edit($id)
    {
        check_admin();
        $query = $this->Jadwal_Pelajaran_m->get($id);
        if ($query->num_rows() > 0) {
            $jadwal_pelajaran = $query->row();
            $query_bidang = $this->Bidang_Keahlian_m->get()->result();
            $query_mata_pelajaran = $this->Mata_Pelajaran_m->get()->result();
            $query_guru = $this->Guru_m->get()->result();
            $query_kelas = $this->Kelas_m->get()->result();
            $query_tahun_ajaran = $this->Tahun_Ajaran_m->get()->result();
            $data = array(
                'page' => 'edit',
                'row' => $jadwal_pelajaran,
                'bidang_keahlian' => $query_bidang,
                'mata_pelajaran' => $query_mata_pelajaran,
                'guru' => $query_guru,
                'kelas' => $query_kelas,
                'tahun_ajaran' => $query_tahun_ajaran,
            );
            $this->template->load('template', 'admin/jadwal_pelajaran/jadwal_pelajaran_edit_form', $data);
        } else {
            echo "<script>alert('data tidak ditemukan');";
            echo "window.location='" . site_url('Jadwal_Pelajaran') . "';</script>";
        }
    }

    public function process()
    {
        check_admin();
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->Jadwal_Pelajaran_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->Jadwal_Pelajaran_m->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('Jadwal_Pelajaran');
    }
    public function del($id)
    {
        check_admin();
        $this->Jadwal_Pelajaran_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        redirect('Jadwal_Pelajaran');
    }
}
