<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tahun_Ajaran_m extends CI_Model {
    public function get($id = null)
    {
        $this->db->from('tahun_ajaran');
        if($id != null) {   
            $this->db->where('id_tahun_ajaran', $id);
        }
        $query = $this->db->get();
        return $query;
    } 
   
    public function add($post)
    {
        $params = [
            'tahun_ajaran' => $post['tahun_ajaran'],
            'semester' => $post['semester'],
        ];
        $this->db->insert('tahun_ajaran', $params);
    }

    public function edit($post)
    {
        $params = [
            'tahun_ajaran' => $post['tahun_ajaran'],
            'semester' => $post['semester'],
        ];
        $this->db->where('id_tahun_ajaran', $post['id']);
        $this->db->update('tahun_ajaran', $params);
    }

    public function del($id)
	{
        $this->db->where('id_tahun_ajaran', $id);
        $this->db->delete('tahun_ajaran');
    } 
   
}