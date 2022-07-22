<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        // $this->load->model('Alumni_m');
        // $this->load->model('Siswa_m');
        // $this->load->model('Bidang_Keahlian_m');
    }
    public function index()
    {
        // $data['row'] = $this->Alumni_m->get();
        $this->template->load('template', 'pembayaran/pembayaran_data');
    }
}