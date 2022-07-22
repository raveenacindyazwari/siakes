<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function siakad()
	{
		check_already_login();
		$this->load->view('login_siakad');
	}

	public function login()
	{
		check_already_login();
		$this->load->view('login_form');
	}

	public function login_siswa()
	{
		check_already_login();
		$this->load->view('login_form_siswa');
	}

	public function login_guru()
	{
		check_already_login();
		$this->load->view('login_form_guru');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			$this->load->model('User_m');
			$query = $this->User_m->login($post);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'iduser' => $row->id_user,
					'level' => $row->level
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('selamat, login berhasil');
					window.location='" . site_url('dashboard') . "';
				</script>";
			} else {
				echo "<script>
					alert('login gagal, username / password salah');
					window.location='" . site_url('auth/login') . "';
				</script>";
			}
		}
	}

	public function process_siswa()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			$this->load->model('User_m');
			$query = $this->User_m->login_siswa($post);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'iduser' => $row->id_siswa,
					'level' => 'Siswa',
					'kelas' => $row->id_kelas
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('selamat, login berhasil');
					window.location='" . site_url('dashboard') . "';
				</script>";
			} else {
				echo "<script>
					alert('login gagal, username / password salah');
					window.location='" . site_url('auth/login_siswa') . "';
				</script>";
			}
		}
	}

	public function process_guru()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			$this->load->model('User_m');
			$query = $this->User_m->login_guru($post);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'iduser' => $row->id_guru,
					'level' => 'Guru'
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('selamat, login berhasil');
					window.location='" . site_url('dashboard') . "';
				</script>";
			} else {
				echo "<script>
					alert('login gagal, username / password salah');
					window.location='" . site_url('auth/login_guru') . "';
				</script>";
			}
		}
	}


	public function logout()
	{
		$params = array('iduser', 'level');
		$this->session->unset_userdata($params);
		redirect('auth/siakad');
	}
}
