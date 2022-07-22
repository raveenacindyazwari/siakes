<?php

function check_already_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('iduser');
    if ($user_session) {
        redirect('dashboard');
    }
}

function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('iduser');
    if (!$user_session) {
        redirect('auth/login');
    }
}

function check_admin()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->level != 'Admin') {
        redirect('dashboard');
    }
}

function check_guru()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->level != 'Guru') {
        redirect('dashboard');
    }
}

function check_kepala_sekolah()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->level != 'Kepala Sekolah') {
        redirect('dashboard');
    }
}
function check_bendahara()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->level != 'Bendahara') {
        redirect('dashboard');
    }
}
function check_siswa()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->level != 'Siswa') {
        redirect('dashboard');
    }
}