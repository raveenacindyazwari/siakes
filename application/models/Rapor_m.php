<?php defined('BASEPATH') or exit('No direct script access allowed');

class Rapor_m extends CI_Model
{

    public function get($id = null)
    {
        $this->db->select('jadwal_pelajaran.*, mata_pelajaran.nama_pelajaran as nama_pelajaran, bidang_keahlian.program_keahlian as program_keahlian,
        kelas.kelas as kelas, tahun_ajaran.tahun_ajaran as tahun_ajaran, data_guru.nama_guru as nama_guru, hari, jam_mulai, jam_selesai, kelas.id_guru as idWali');
        $this->db->from('jadwal_pelajaran');
        $this->db->join('bidang_keahlian', 'bidang_keahlian.id_bidang = jadwal_pelajaran.id_bidang', 'left');
        $this->db->join('mata_pelajaran', 'mata_pelajaran.id_mata_pelajaran= jadwal_pelajaran.id_mata_pelajaran', 'left');
        $this->db->join('tahun_ajaran', 'tahun_ajaran.id_tahun_ajaran = jadwal_pelajaran.id_tahun_ajaran', 'left');
        $this->db->join('kelas', 'kelas.id_kelas= jadwal_pelajaran.id_kelas', 'left');
        $this->db->join('data_guru', 'data_guru.id_guru = jadwal_pelajaran.id_guru', 'left');
        $this->db->order_by('hari');
        if ($id != null) {
            $this->db->where('id_jadwal', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function tampil_data($id_kelas)
    {
        return $this->db->get_where('data_siswa', array('id_kelas' => $id_kelas));
    }

    function cari($id)
    {
        $query = $this->db->get_where('data_siswa', array('nisn' => $id));
        return $query;
    }

    function check_siswa($code, $id = null)
    {
        $this->db->from('rapor');
        $this->db->where('id_siswa', $code);
        if ($id != null) {
            $this->db->where('id_siswa !=', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_mapel($id = null)
    {
        $this->db->select('jadwal_pelajaran.*, mata_pelajaran.nama_pelajaran as nama_pelajaran, bidang_keahlian.program_keahlian as program_keahlian,
        kelas.kelas as kelas,  tahun_ajaran.tahun_ajaran as tahun_ajaran, data_guru.nama_guru as nama_guru, hari, jam_mulai, jam_selesai');
        $this->db->from('jadwal_pelajaran');
        $this->db->join('bidang_keahlian', 'bidang_keahlian.id_bidang = jadwal_pelajaran.id_bidang', 'left');
        $this->db->join('mata_pelajaran', 'mata_pelajaran.id_mata_pelajaran= jadwal_pelajaran.id_mata_pelajaran', 'left');
        $this->db->join('tahun_ajaran', 'tahun_ajaran.id_tahun_ajaran = jadwal_pelajaran.id_tahun_ajaran', 'left');
        $this->db->join('kelas', 'kelas.id_kelas= jadwal_pelajaran.id_kelas', 'left');
        $this->db->join('data_guru', 'data_guru.id_guru = jadwal_pelajaran.id_guru', 'left');
        $this->db->order_by('kelas.kelas');
        if ($id != null) {
            $this->db->where('jadwal_pelajaran.id_jadwal', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_mapel_guru($id = null)
    {
        $this->db->select('jadwal_pelajaran.*, mata_pelajaran.nama_pelajaran as nama_pelajaran, bidang_keahlian.program_keahlian as program_keahlian,
        kelas.kelas as kelas,  tahun_ajaran.tahun_ajaran as tahun_ajaran, data_guru.nama_guru as nama_guru, hari, jam_mulai, jam_selesai');
        $this->db->from('jadwal_pelajaran');
        $this->db->join('bidang_keahlian', 'bidang_keahlian.id_bidang = jadwal_pelajaran.id_bidang', 'left');
        $this->db->join('mata_pelajaran', 'mata_pelajaran.id_mata_pelajaran= jadwal_pelajaran.id_mata_pelajaran', 'left');
        $this->db->join('tahun_ajaran', 'tahun_ajaran.id_tahun_ajaran = jadwal_pelajaran.id_tahun_ajaran', 'left');
        $this->db->join('kelas', 'kelas.id_kelas= jadwal_pelajaran.id_kelas', 'left');
        $this->db->join('data_guru', 'data_guru.id_guru = jadwal_pelajaran.id_guru', 'left');
        $this->db->order_by('kelas.kelas');
        if ($id != null) {
            $this->db->where('kelas.id_guru', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_mapel_siswa($id = null)
    {
        $this->db->select('jadwal_pelajaran.*, mata_pelajaran.nama_pelajaran as nama_pelajaran, bidang_keahlian.program_keahlian as program_keahlian,
        kelas.kelas as kelas, tahun_ajaran.tahun_ajaran as tahun_ajaran, data_guru.nama_guru as nama_guru, hari, jam_mulai, jam_selesai');
        $this->db->from('jadwal_pelajaran');
        $this->db->join('bidang_keahlian', 'bidang_keahlian.id_bidang = jadwal_pelajaran.id_bidang', 'left');
        $this->db->join('mata_pelajaran', 'mata_pelajaran.id_mata_pelajaran= jadwal_pelajaran.id_mata_pelajaran', 'left');
        $this->db->join('tahun_ajaran', 'tahun_ajaran.id_tahun_ajaran = jadwal_pelajaran.id_tahun_ajaran', 'left');
        $this->db->join('kelas', 'kelas.id_kelas= jadwal_pelajaran.id_kelas', 'left');
        $this->db->join('data_guru', 'data_guru.id_guru = jadwal_pelajaran.id_guru', 'left');
        $this->db->order_by('hari');
        if ($id != null) {
            $this->db->where('jadwal_pelajaran.id_kelas', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_siswa_kelas($id = null)
    {
        $this->db->select('kelas.*, data_siswa.nama_siswa as namaSiswa, data_siswa.id_siswa as idSiswa');
        $this->db->from('kelas');
        $this->db->join('data_siswa', 'data_siswa.id_kelas = kelas.id_kelas');
        $this->db->join('jadwal_pelajaran', 'jadwal_pelajaran.id_kelas = kelas.id_kelas');
        $this->db->order_by('data_siswa.nama_siswa');
        if ($id != null) {
            $this->db->where('jadwal_pelajaran.id_jadwal', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_rapor($id = null)
    {
        $this->db->select('rapor.*, data_siswa.nama_siswa as namaSiswa');
        $this->db->from('rapor');
        $this->db->join('data_siswa', 'data_siswa.id_siswa = rapor.id_siswa');
        $this->db->join('jadwal_pelajaran', 'jadwal_pelajaran.id_jadwal = rapor.id_jadwal_pelajaran');
        $this->db->order_by('data_siswa.nama_siswa');
        if ($id != null) {
            $this->db->where('jadwal_pelajaran.id_jadwal', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_rapor_rapor($id = null)
    {
        $this->db->select('rapor.*, data_siswa.nama_siswa as namaSiswa, mata_pelajaran.nama_pelajaran as namaPelajaran');
        $this->db->from('rapor');
        $this->db->join('data_siswa', 'data_siswa.id_siswa = rapor.id_siswa');
        $this->db->join('jadwal_pelajaran', 'jadwal_pelajaran.id_jadwal = rapor.id_jadwal_pelajaran');
        $this->db->join('mata_pelajaran', 'mata_pelajaran.id_mata_pelajaran= jadwal_pelajaran.id_mata_pelajaran');
        $this->db->order_by('data_siswa.nama_siswa');
        if ($id != null) {
            $this->db->where('rapor.id_rapor', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_rapor_siswa($id = null)
    {
        $this->db->select('rapor.*, data_siswa.nama_siswa as namaSiswa, mata_pelajaran.nama_pelajaran as namaPelajaran');
        $this->db->from('rapor');
        $this->db->join('data_siswa', 'data_siswa.id_siswa = rapor.id_siswa');
        $this->db->join('jadwal_pelajaran', 'jadwal_pelajaran.id_jadwal = rapor.id_jadwal_pelajaran');
        $this->db->join('mata_pelajaran', 'mata_pelajaran.id_mata_pelajaran= jadwal_pelajaran.id_mata_pelajaran');
        $this->db->order_by('mata_pelajaran.nama_pelajaran');
        if ($id != null) {
            $this->db->where('rapor.id_siswa', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'id_jadwal_pelajaran' => $post['id_jadwal_pelajaran'],
            'id_siswa' => $post['id_siswa'],
            'nilai_pengetahuan' => $post['nilai_pengetahuan'],
            'nilai_keterampilan' => $post['nilai_keterampilan'],
            // 'nilai_akhir' => $post['nilai_akhir'],
            // 'nilai_predikat' => $post['nilai_predikat'],
        ];
        $this->db->insert('rapor', $params);
    }

    public function edit($post)
    {
        $params = [
            'nilai_pengetahuan' => $post['nilai_pengetahuan'],
            'nilai_keterampilan' => $post['nilai_keterampilan'],
            // 'nilai_akhir' => $post['nilai_akhir'],
            // 'nilai_predikat' => $post['nilai_predikat'],
        ];
        $this->db->where('id_rapor', $post['id_rapor']);
        $this->db->update('rapor', $params);
    }

    public function del($id)
    {
        $this->db->where('id_rapor', $id);
        $this->db->delete('rapor');
    }
}
