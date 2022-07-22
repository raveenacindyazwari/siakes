<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', md5($post['password']));
        $query = $this->db->get();
        return $query;
    }

    public function login_siswa($post)
    {
        $this->db->select('*');
        $this->db->from('data_siswa');
        $this->db->where('username', $post['username']);
        $this->db->where('password', md5($post['password']));
        $query = $this->db->get();
        return $query;
    }

    public function login_guru($post)
    {
        $this->db->select('*');
        $this->db->from('data_guru');
        $this->db->where('username', $post['username']);
        $this->db->where('password', md5($post['password']));
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null)
    {
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_siswa($id = null)
    {
        $this->db->select('data_siswa.*, bidang_keahlian.program_keahlian as program_keahlian');
        $this->db->from('data_siswa');
        $this->db->join('bidang_keahlian', 'bidang_keahlian.id_bidang = data_siswa.id_bidang');
        $this->db->join('kelas', 'kelas.id_kelas = data_siswa.id_kelas');
        if ($id != null) {
            $this->db->where('id_siswa', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_guru($id = null)
    {
        $this->db->from('data_guru');
        if ($id != null) {
            $this->db->where('id_guru', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function check_oldpass($id_user, $old_password)
    {
        $this->db->where('id_user', $id_user);
        $this->db->where('password', $old_password);
        $query = $this->db->get('user');
        if ($query->num_rows() > 0)
            return true;
        else
            return false;
    }

    public function update_password($id_user, $data)
    {
        $this->db->set($data);
        $this->db->where('id_user', $id_user);
        $this->db->update('user');
        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }


    public function add($post)
    {
        $params['nama'] = $post['nama'];
        $params['username'] = $post['username'];
        $params['password'] = md5($post['password']);
        $params['level'] = $post['level'];
        $this->db->insert('user', $params);
    }
    public function edit($post)
    {
        $params['nama'] = $post['nama'];
        $params['username'] = $post['username'];
        if (!empty($post['password'])) {
            $params['password'] = md5($post['password']);
        }
        $params['level'] = $post['level'];
        $this->db->where('id_user', $post['id_user']);
        $this->db->update('user', $params);
    }

    public function del($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }
}
