<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');

		if ($this->session->userdata("jabatan") != "Admin" && $this->session->userdata('jabatan') != 'Petugas') {
			redirect('access_denied');
		}
	}

	public function index()
	{
		$data['title'] 			= "Dashboard Admin";
		$data['dataUser']       = $this->M_user->userById($this->session->userdata('id_petugas'));
		$data['jml_user'] 		= $this->M_user->jml_data_user();
		$data['jml_member']		= $this->M_member->jml_data_member();
		$data['jml_buku'] 	    = $this->M_buku->jml_data_buku();
		$this->load->view('layouts/head');
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar_menu', $data);
		$this->load->view('admin/v_dashboard', $data);
		$this->load->view('layouts/foot');
	}

	public function edit()
	{
		$data['title']    = "Admin Setting";
		$data['dataUser'] = $this->M_user->userById($this->session->userdata('id_petugas'));
		$this->load->view('layouts/head');
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar_menu', $data);
		$this->load->view('admin/v_edit', $data);
		$this->load->view('layouts/foot');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
