<?php defined('BASEPATH') or exit('No direct script access allowed');

class Alumni_m extends CI_Model
{

    public function get($id = null)
    {
        $this->db->select('alumni.*, bidang_keahlian.program_keahlian as program_keahlian');
        $this->db->from('alumni');
        $this->db->join('bidang_keahlian', 'bidang_keahlian.id_bidang = alumni.id_bidang', 'left');
        $this->db->order_by('id_alumni', 'desc');
        if ($id != null) {
            $this->db->where('id_alumni', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function tampil_data()
    {
        return $this->db->get('data_siswa');
    }

    public function get_jk($jk = null)
    {
        $this->db->select('count(id_alumni) as jumlah');
        $this->db->from('alumni');
        if ($jk != null) {
            $this->db->where('jenis_kelamin', $jk);
        }
        $query = $this->db->get();
        return $query;
    }

    function cari($id)
    {
        $query = $this->db->get_where('data_siswa', array('nisn' => $id));
        return $query;
    }

    public function add($post)
    {
        $params = [
            'nisn' => $post['nisn'],
            'nama_alumni' => $post['nama_siswa'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'id_bidang' => $post['keahlian'] == '' ? null : $post['keahlian'],
            'tahun_lulus' => $post['tahun_lulus'],
            'keterangan' => $post['keterangan'],
        ];
        $this->db->insert('alumni', $params);
    }

    public function edit($post)
    {
        $params = [
            'nisn' => $post['nisn'],
            'nama_alumni' => $post['nama_siswa'],
            'id_bidang' => $post['keahlian'] == '' ? null : $post['keahlian'],
            'tahun_lulus' => $post['tahun_lulus'],
            'keterangan' => $post['keterangan'],
        ];
        $this->db->where('id_alumni', $post['id']);
        $this->db->update('alumni', $params);
    }

    function check_nisn($code, $id = null)
    {
        $this->db->from('alumni');
        $this->db->where('nisn', $code);
        if ($id != null) {
            $this->db->where('id_alumni !=', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function del($id)
    {
        $this->db->where('id_alumni', $id);
        $this->db->delete('alumni');
    }
}
