<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mata_Pelajaran_m extends CI_Model {
    public function get($id = null)
    {
        $this->db->from('mata_pelajaran');
        if($id != null) {   
            $this->db->where('id_mata_pelajaran', $id);
        }
        $query = $this->db->get();
        return $query;
    } 
   
    public function add($post)
    {
        $params = [
            'kode_matpel' => $post['kode_matpel'],
            'nama_pelajaran' => $post['nama_pelajaran'],
        ];
        $this->db->insert('mata_pelajaran', $params);
    }

    public function edit($post)
    {
        $params = [
            'kode_matpel' => $post['kode_matpel'],
            'nama_pelajaran' => $post['nama_pelajaran'],
        ];
        $this->db->where('id_mata_pelajaran', $post['id']);
        $this->db->update('mata_pelajaran', $params);
    }

    function check_kode_matpel($code, $id= null) {
        $this->db->from('mata_pelajaran');
        $this->db->where('kode_matpel', $code);
        if($id != null){
            $this->db->where('id_mata_pelajaran !=', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function del($id)
	{
        $this->db->where('id_mata_pelajaran', $id);
        $this->db->delete('mata_pelajaran');
    } 
   
}