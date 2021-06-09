<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		// $this->form_validation->set_rules('comfirm_password', 'Conformasi Password', 'trim|required|matches[password]');
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Login Admin';
			$this->load->view('layouts/head_login');
			$this->load->view('login/v_login', $data);
			$this->load->view('layouts/foot_login');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$user  = $this->M_user->cek_user($username);
			if ($user != NULL) {
				if ($password == password_verify($password, $user['password'])) {
					$data = array(
						'id_petugas' 		=> $user['id_petugas'],
						'username' 		    => $user['username'],
						'nama_petugas'     	=> $user['nama_petugas'],
						'jabatan' 	        => $user['jabatan']
					);
					$this->session->set_userdata($data);
					if ($user['jabatan'] == 'Admin') {
						redirect('admin');
					} elseif ($user['jabatan'] == "Petugas") {
						redirect('admin');
					} else {
						redirect('access_denied');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">password salah</div>');
					redirect('Login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">user tidak ditemukan</div>');
				redirect('Login');
			}
		}
	}
}
