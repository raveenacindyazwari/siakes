<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('Siswa_m');
        $this->load->model('Bidang_Keahlian_m');
        $this->load->model('Kelas_m');
    }
    public function index()
    {
        $id_bidang = $this->input->get('pilih_bidang');
        $data['row'] = $this->Siswa_m->get(NULL, $id_bidang);

        $data['bidang_keahlian'] = $this->Bidang_Keahlian_m->get()->result();
        $this->template->load('template', 'admin/siswa/siswa_data', $data);
    }
    public function detail($id)
    {
        $query = $this->Siswa_m->get($id);
        if ($query->num_rows() > 0) {
            $siswa = $query->row();
            $query_bidang = $this->Bidang_Keahlian_m->get();
            $query_kelas = $this->Kelas_m->get();
            $data = array(
                'page' => 'detail',
                'show' => 'Detail',
                'row' => $siswa,
                'bidang' => $query_bidang,
                'kelas' => $query_kelas,
            );
            $this->template->load('template', 'admin/siswa/siswa_detail', $data);
        } else {
            echo "<script>alert('data tidak ditemukan');";
            echo "window.location='" . site_url('Siswa') . "';</script>";
        }
    }

    public function add()

    {
        check_admin();
        $siswa = new stdClass();
        $siswa->id_siswa = null;
        $siswa->nisn = null;
        $siswa->nik = null;
        $siswa->username = null;
        $siswa->password = null;
        $siswa->asal_sekolah = null;
        $siswa->id_bidang = null;
        $siswa->id_kelas = null;
        $siswa->nama_siswa = null;
        $siswa->tahun_masuk = null;
        $siswa->tempat_lahir = null;
        $siswa->tanggal_lahir = null;
        $siswa->jenis_kelamin = null;
        $siswa->alamat = null;
        $siswa->agama = null;
        $siswa->nama_ayah = null;
        $siswa->nama_ibu = null;
        $siswa->pend_terakhir_ayah = null;
        $siswa->pend_terakhir_ibu = null;
        $siswa->pekerjaan_ayah = null;
        $siswa->pekerjaan_ibu = null;
        $siswa->alamat_orgtua = null;
        $siswa->nama_wali = null;
        $siswa->pekerjaan_wali = null;
        $siswa->alamat_wali = null;
        $siswa->no_telp_orgtua = null;

        $query_bidang = $this->Bidang_Keahlian_m->get();
        $query_kelas = $this->Kelas_m->get();

        $data = array(
            'page' => 'add',
            'show' => 'Tambah',
            'row' => $siswa,
            'bidang' => $query_bidang,
            'kelas' => $query_kelas,

        );
        $this->template->load('template', 'admin/siswa/siswa_form', $data);
    }

    public function edit($id)
    {
        check_admin();
        $query = $this->Siswa_m->get($id);
        if ($query->num_rows() > 0) {
            $siswa = $query->row();
            $query_bidang = $this->Bidang_Keahlian_m->get();
            $query_kelas = $this->Kelas_m->get();
            $data = array(
                'page' => 'edit',
                'show' => 'Edit',
                'row' => $siswa,
                'bidang' => $query_bidang,
                'kelas' => $query_kelas,
            );
            $this->template->load('template', 'admin/siswa/siswa_form', $data);
        } else {
            echo "<script>alert('data tidak ditemukan');";
            echo "window.location='" . site_url('Siswa') . "';</script>";
        }
    }

    public function process()
    {
        check_admin();
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->Siswa_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->Siswa_m->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('Siswa');
    }
    public function del($id)
    {
        check_admin();
        $this->Siswa_m->del($id);
        // if($this->db->affected_rows() > 0) {
        //     $this->session->set_flashdata('success', 'Data berhasil dihapus');
        // }
        redirect('Siswa');
    }
}
