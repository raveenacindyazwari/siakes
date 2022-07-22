<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mata_Pelajaran extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('Mata_Pelajaran_m');
    }
    public function index()
    {
        $data['row'] = $this->Mata_Pelajaran_m->get();
        $this->template->load('template', 'admin/mata_pelajaran/mata_pelajaran_data', $data);
    }
    public function add()
    {
        $mata_pelajaran = new stdClass();
        $mata_pelajaran->id_mata_pelajaran = null;
        $mata_pelajaran->kode_matpel = null;
        $mata_pelajaran->nama_pelajaran = null;

        $data = array(
            'page' => 'add',
            'show' => 'Tambah',
            'row' => $mata_pelajaran,
        );
        $this->template->load('template', 'admin/mata_pelajaran/mata_pelajaran_form', $data);
    }
    public function edit($id)
    {
        $query = $this->Mata_Pelajaran_m->get($id);
        if ($query->num_rows() > 0) {
            $mata_pelajaran = $query->row();
            $data = array(
                'page' => 'edit',
                'show' => 'Edit',
                'row' => $mata_pelajaran,
            );
            $this->template->load('template', 'admin/mata_pelajaran/mata_pelajaran_form', $data);
        } else {
            echo "<script>alert('data tidak ditemukan');";
            echo "window.location='" . site_url('Mata_Pelajaran') . "';</script>";
        }
    }
    
    public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			if($this->Mata_Pelajaran_m->check_kode_matpel($post['kode_matpel'])->num_rows() > 0) {
				$this->session->set_flashdata('error' , "Kode mata pelajaran $post[kode_matpel] sudah digunakan mata pelajaran lain");
				redirect('Mata_Pelajaran/add');
			} else {
				$this->Mata_Pelajaran_m->add($post);
			}
		} else if(isset($_POST['edit'])) {
			if($this->Mata_Pelajaran_m->check_kode_matpel($post['kode_matpel'], $post['id'])->num_rows() > 0) {
				$this->session->set_flashdata('error' , "Kode mata pelajaran $post[kode_matpel] sudah digunakan mata pelajaran lain");
				redirect('Mata_Pelajaran/edit/' .$post['id']);
			} else {
				$this->Mata_Pelajaran_m->edit($post);
			}
		}

		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
		redirect('Mata_Pelajaran');   
	
    }
    public function del($id)
    {
        $this->Mata_Pelajaran_m->del($id);
        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        redirect('Mata_Pelajaran');
    }
}