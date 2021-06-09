<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_member extends CI_Controller
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
		$data['title'] = "Data Member";
		$data['dataUser']  = $this->M_user->userById($this->session->userdata('id_petugas'));
		$data['data_member'] = $this->M_member->dataMember();
		$this->load->view('layouts/head');
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar_menu', $data);
		$this->load->view('admin/data_member/index', $data);
		$this->load->view('layouts/foot');
	}

	public function detail($id)
	{
		$data['title'] = "Data Member";
		$data['dataUser']  = $this->M_user->userById($this->session->userdata('id_petugas'));
		$data['data_member'] = $this->M_member->memberById($id);
		$this->load->view('layouts/head', $data);
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar_menu', $data);
		$this->load->view('admin/data_member/detail', $data);
		$this->load->view('layouts/foot');
	}

	public function hapus($id)
	{
		$data_member = $this->M_member->memberById($id);
		$result = $this->M_member->delete($id);
		if ($result > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h4><i class="icon fa fa-check"></i> Data berhasil dihapus!</h4></div>');
			unlink(FCPATH . '/assets/uploads/member/' . $data_member['gambar']);
			redirect('Data_member');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h4><i class="icon fa fa-ban"></i> Data berhasil dihapus!</h4></div>');
			redirect('Data_member');
		}
	}
}
