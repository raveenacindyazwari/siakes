<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		check_not_login();

		$this->load->model('Siswa_m');
		$this->load->model('Guru_m');
		$this->load->model('Alumni_m');
	}

	public function index()
	{
		$jk_p = 'Perempuan';
		$jk_l = 'Laki-laki';

		$data['siswa_l'] = $this->Siswa_m->get_jk($jk_l);
		$data['siswa_p'] = $this->Siswa_m->get_jk($jk_p);
		$data['guru_l'] = $this->Guru_m->get_jk($jk_l);
		$data['guru_p'] = $this->Guru_m->get_jk($jk_p);
		$data['alumni_l'] = $this->Alumni_m->get_jk($jk_l);
		$data['alumni_p'] = $this->Alumni_m->get_jk($jk_p);
		$this->template->load('template', 'dashboard', $data);
	}
}
