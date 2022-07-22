<?php

class Fungsi
{

    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('User_m');
        $id_user = $this->ci->session->userdata('iduser');
        $level_user = $this->ci->session->userdata('level');


        if ($level_user == 'Siswa') {
            $user_data = $this->ci->User_m->get_siswa($id_user)->row();
            return $user_data;
        } else if ($level_user == 'Guru') {
            $user_data = $this->ci->User_m->get_guru($id_user)->row();
            return $user_data;
        } else {
            $user_data = $this->ci->User_m->get($id_user)->row();
            return $user_data;
        }
    }
}
