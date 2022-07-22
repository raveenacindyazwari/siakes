<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('kelas.*, bidang_keahlian.program_keahlian as program_keahlian, tahun_ajaran.tahun_ajaran as tahun_ajaran, 
        data_guru.nama_guru as nama_guru, kelas');
        $this->db->from('kelas');
        $this->db->join('bidang_keahlian', 'bidang_keahlian.id_bidang = kelas.id_bidang', 'left');
        $this->db->join('tahun_ajaran', 'tahun_ajaran.id_tahun_ajaran = kelas.id_tahun_ajaran', 'left');
        $this->db->join('data_guru', 'data_guru.id_guru = kelas.id_guru', 'left');
        if ($id != null) {
            $this->db->where('id_kelas', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_siswa($id = null)
    {
        $this->db->select('data_siswa.*, kelas.*, bidang_keahlian.program_keahlian as program_keahlian, tahun_ajaran.tahun_ajaran as tahun_ajaran, 
        data_guru.nama_guru as nama_guru, kelas');
        $this->db->from('data_siswa');
        $this->db->join('kelas', 'kelas.id_kelas = data_siswa.id_kelas', 'left');
        $this->db->join('bidang_keahlian', 'bidang_keahlian.id_bidang = kelas.id_bidang', 'left');
        $this->db->join('tahun_ajaran', 'tahun_ajaran.id_tahun_ajaran = kelas.id_tahun_ajaran', 'left');
        $this->db->join('data_guru', 'data_guru.id_guru = kelas.id_guru', 'left');
        if ($id != null) {
            $this->db->where('data_siswa.id_kelas', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'id_bidang' => $post['keahlian'] == '' ? null : $post['keahlian'],
            'id_tahun_ajaran' => $post['tahun_ajaran'] == '' ? null : $post['tahun_ajaran'],
            'id_guru' => $post['wali_kelas'] == '' ? null : $post['wali_kelas'],
            'kelas' => $post['kelas'],
        ];
        $this->db->insert('kelas', $params);
    }

    public function edit($post)
    {
        $params = [
            'id_bidang' => $post['keahlian'] == '' ? null : $post['keahlian'],
            'id_tahun_ajaran' => $post['tahun_ajaran'] == '' ? null : $post['tahun_ajaran'],
            'id_guru' => $post['wali_kelas'] == '' ? null : $post['wali_kelas'],
            'kelas' => $post['kelas'],
        ];
        $this->db->where('id_kelas', $post['id']);
        $this->db->update('kelas', $params);
    }

    public function del($id)
    {
        $this->db->where('id_kelas', $id);
        $this->db->delete('kelas');
    }
}
