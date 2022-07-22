<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contoh extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        // $this->load->model('Bidang_Keahlian_m');
    }

    public function index()
    {
        // $data['row'] = $this->Bidang_Keahlian_m->get();
        $this->template->load('template', 'contoh');
    }
}