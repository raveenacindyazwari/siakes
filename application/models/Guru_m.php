<?php defined('BASEPATH') or exit('No direct script access allowed');

class Guru_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('data_guru');
        if ($id != null) {
            $this->db->where('id_guru', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_jk($jk = null)
    {
        $this->db->select('count(id_guru) as jumlah');
        $this->db->from('data_guru');
        if ($jk != null) {
            $this->db->where('jenis_kelamin', $jk);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'nip' => $post['nip'],
            'username' => $post['username'],
            'password' => md5($post['password']),
            'nama_guru' => $post['nama_guru'],
            'tempat_lahir' => $post['tempat_lahir'],
            'tanggal_lahir' => $post['tanggal_lahir'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'alamat' => $post['alamat'],
            'agama' => $post['agama'],
            'pendidikan_terakhir' => $post['pendidikan_terakhir'],
            'bidang_studi' => $post['bidang_studi'],
        ];
        $this->db->insert('data_guru', $params);
    }

    public function edit($post)
    {
        $params = [
            'nip' => $post['nip'],
            'nama_guru' => $post['nama_guru'],
            'tempat_lahir' => $post['tempat_lahir'],
            'tanggal_lahir' => $post['tanggal_lahir'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'alamat' => $post['alamat'],
            'agama' => $post['agama'],
            'pendidikan_terakhir' => $post['pendidikan_terakhir'],
            'bidang_studi' => $post['bidang_studi'],
        ];
        $this->db->where('id_guru', $post['id']);
        $this->db->update('data_guru', $params);
    }

    public function del($id)
    {
        $this->db->where('id_guru', $id);
        $this->db->delete('data_guru');
    }
}
