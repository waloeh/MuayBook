<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_user extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');

		if ($this->session->userdata("jabatan") != 'Admin' && $this->session->userdata('jabatan') != 'Petugas') {
			redirect('access_denied');
		}
	}

	public function index()
	{
		$data['title'] = "Data User";
		$data['dataUser']  = $this->M_user->userById($this->session->userdata('id_petugas'));
		$data['data_user'] = $this->M_user->allDataUser();
		$this->load->view('layouts/head');
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar_menu', $data);
		$this->load->view('admin/data_user/index', $data);
		$this->load->view('layouts/foot');
	}

	public function detail($id)
	{
		$data['title'] = "Data User";
		$data['dataUser']  = $this->M_user->userById($this->session->userdata('id_petugas'));
		$data['data_user'] = $this->M_user->userById($id);
		$this->load->view('layouts/head');
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar_menu', $data);
		$this->load->view('admin/data_user/detail', $data);
		$this->load->view('layouts/foot');
	}

	public function hapus($id)
	{
		$data_user = $this->M_user->userById($id);
		$result = $this->M_user->hapus($id);
		if ($result > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h4><i class="icon fa fa-check"></i> User Berhasil dihapus!</h4></div>');
			unlink(FCPATH . '/assets/uploads/users/' . $data_user['gambar']);
			redirect('Data_user');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h4><i class="icon fa fa-ban"></i> Berhasil dihapus!</h4></div>');
			redirect('Data_user');
		}
	}

	public function tambah()
	{
		$nama_petugas = $this->input->post('nama_petugas');
		$alamat = $this->input->post('alamat');
		$jabatan = $this->input->post('jabatan');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$no_tlp = $this->input->post('no_tlp');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$gambar = $_FILES['gambar']['name'];
		if ($gambar) {
			$config['max_size'] = 2048; //2mb
			$config['upload_path'] = "./assets/uploads/users/"; //storage
			$config['allowed_types'] = "jpg|png|jpeg|pdf"; //format
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('gambar')) {
				$gambar = $this->upload->data('file_name');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-ban"></i> Poto gagal diupload!</h4>(pastikan ukuran dan format gambar sesuai)</div>');
				redirect('Data_user');
			}
		} else {
			$gambar = 'default.png';
		}
		$data = [
			'nama_petugas' => $nama_petugas,
			'alamat_petugas' => $alamat,
			'jabatan' => $jabatan,
			'jenis_kelamin' => $jenis_kelamin,
			'no_tlp' => $no_tlp,
			'email' => $email,
			'username' => $username,
			'password' => password_hash($password, PASSWORD_DEFAULT),
			'gambar' => $gambar
		];
		$result = $this->M_user->tambahUser($data);
		if ($result > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h4><i class="icon fa fa-check"></i> User Berhasil Ditambah!</h4></div>');
			redirect('Data_user');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h4><i class="icon fa fa-ban"></i> User Gagal Ditambah!</h4></div>');
			redirect('Data_user');
		}
	}
}
