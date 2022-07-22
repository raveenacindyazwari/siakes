<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang_Keahlian_m extends CI_Model {
    public function get($id = null)
    {
        $this->db->from('bidang_keahlian');
        if($id != null) {   
            $this->db->where('id_bidang', $id);
        }
        $query = $this->db->get();
        return $query;
    } 
   
    public function add($post)
    {
        $params = [
            'bidang_keahlian' => $post['bidang_keahlian'],
            'program_keahlian' => $post['program_keahlian'],
            'kompetensi_keahlian' => $post['kompetensi_keahlian'],
        ];
        $this->db->insert('bidang_keahlian', $params);
    }

    public function edit($post)
    {
        $params = [
            'bidang_keahlian' => $post['bidang_keahlian'],
            'program_keahlian' => $post['program_keahlian'],
            'kompetensi_keahlian' => $post['kompetensi_keahlian'],
        ];
        $this->db->where('id_bidang', $post['id']);
        $this->db->update('bidang_keahlian', $params);
    }

    public function del($id)
	{
        $this->db->where('id_bidang', $id);
        $this->db->delete('bidang_keahlian');
    } 
   
}