<?php defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal_Pelajaran_m extends CI_Model
{

    public function get($id = null, $id_bidang = null)
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
            $this->db->where('id_jadwal', $id);
        }
        if ($id_bidang != null) {
            $this->db->where('jadwal_pelajaran.id_bidang', $id_bidang);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_mapel_guru($id = null)
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
            $this->db->where('jadwal_pelajaran.id_guru', $id);
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

    public function add($post)
    {
        $params = [
            'id_bidang' => $post['keahlian'] == '' ? null : $post['keahlian'],
            'id_tahun_ajaran' => $post['tahun_ajaran'] == '' ? null : $post['tahun_ajaran'],
            'id_guru' => $post['guru'] == '' ? null : $post['guru'],
            'id_kelas' => $post['kelas'] == '' ? null : $post['kelas'],
            'id_mata_pelajaran' => $post['mata_pelajaran'] == '' ? null : $post['mata_pelajaran'],
            'hari' => $post['hari'],
            'jam_mulai' => $post['jam_mulai'],
            'jam_selesai' => $post['jam_selesai'],
            'keterangan' => $post['keterangan'],
        ];
        $this->db->insert('jadwal_pelajaran', $params);
    }

    public function edit($post)
    {
        $params = [
            'id_bidang' => $post['keahlian'] == '' ? null : $post['keahlian'],
            'id_tahun_ajaran' => $post['tahun_ajaran'] == '' ? null : $post['tahun_ajaran'],
            'id_guru' => $post['guru'] == '' ? null : $post['guru'],
            'id_kelas' => $post['kelas'] == '' ? null : $post['kelas'],
            'id_mata_pelajaran' => $post['mata_pelajaran'] == '' ? null : $post['mata_pelajaran'],
            'hari' => $post['hari'],
            'jam_mulai' => $post['jam_mulai'],
            'jam_selesai' => $post['jam_selesai'],
            'keterangan' => $post['keterangan'],
        ];
        $this->db->where('id_jadwal', $post['id']);
        $this->db->update('jadwal_pelajaran', $params);
    }

    public function del($id)
    {
        $this->db->where('id_jadwal', $id);
        $this->db->delete('jadwal_pelajaran');
    }
}
