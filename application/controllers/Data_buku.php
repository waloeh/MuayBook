<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_buku extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		if ($this->session->userdata('jabatan') != 'Admin' && $this->session->userdata('jabatan') != 'Petugas') {
			redirect('access_denied');
		}
		$data['title'] = "Data Buku";
		$data['dataUser']  = $this->M_user->userById($this->session->userdata('id_petugas'));
		$data['data_buku'] = $this->M_buku->data_buku();
		$this->load->view('layouts/head');
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar_menu', $data);
		$this->load->view('admin/data_buku/index', $data);
		$this->load->view('layouts/foot');
	}

	public function edit($id)
	{
		$data_buku = $this->M_buku->dataBukuById($id);
		$judul = $this->input->post('judul');
		$pengarang = $this->input->post('pengarang');
		$penerbit = $this->input->post('penerbit');
		$tahun = $this->input->post('tahun');
		$jumlah_buku = $this->input->post('jumlah_buku');
		$jumlah_eksemplar = $this->input->post('jumlah_eksemplar');
		$kategori = $this->input->post('kategori');
		$nomor_kelas = $this->input->post('nomor_kelas');
		$kelas_deposit = $this->input->post('kelas_deposit');
		$deskripsi = $this->input->post('deskripsi');
		$no_ISBN = $this->input->post('no_ISBN');
		$bahasa = $this->input->post('bahasa');
		$subjek = $this->input->post('subjek');
		$abstrak = $this->input->post('abstrak');
		$file_digital = $this->input->post('file_digital');
		$gambar_lama = $data_buku['gambar'];
		$gambar = $_FILES['gambar']['name'];
		if ($gambar) {
			$config['allowed_types'] = 'gif|png|jpg|jpeg|pdf'; //format yang valid
			// $config['max_size']     = '2048'; //2 mb
			$config['upload_path']  = './assets/uploads/buku/'; //lokasi penyimpanan
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('gambar')) {
				//hapus gambar lama
				unlink(FCPATH . 'assets/uploads/buku/' . $gambar_lama);
				$gambar_baru = $this->upload->data('file_name');
				$gambar = $gambar_baru;
			} else {
				echo "gambar gagal diupload";
				echo $this->upload->display_error();
			}
		} else {
			$gambar = $gambar_lama;
		}

		$data = array(
			'judul' => $judul,
			'pengarang' => $pengarang,
			'penerbit' => $penerbit,
			'tahun' => $tahun,
			'jumlah_buku' => $jumlah_buku,
			'jumlah_eksemplar' => $jumlah_eksemplar,
			'kategori' => $kategori,
			'nomor_kelas' => $nomor_kelas,
			'kelas_deposit' => $kelas_deposit,
			'deskripsi' => $deskripsi,
			'no_ISBN' => $no_ISBN,
			'bahasa' => $bahasa,
			'subjek' => $subjek,
			'abstrak' => $abstrak,
			'file_digital' => $file_digital,
			'gambar' => $gambar
		);
		$hasil = $this->M_buku->edit($id, $data);
		if ($hasil > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Berhasil diubah!</h4></div>');
			redirect('data_buku');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Gagal diubah!</h4></div>');
			redirect('data_buku');
		}
	}

	public function hapus($id)
	{
		$data_buku = $this->M_buku->dataBukuById($id);
		$result = $this->M_buku->hapus($id);
		if ($result > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Berhasil dihapus!</h4></div>');
			unlink(FCPATH . '/assets/uploads/buku/' . $data_buku['gambar']);
			redirect('data_buku');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Gagal dihapus!</h4></div>');
			redirect('data_buku');
		}
	}

	public function tambah()
	{
		$judul = $this->input->post('judul');
		$pengarang = $this->input->post('pengarang');
		$penerbit = $this->input->post('penerbit');
		$tahun = $this->input->post('tahun');
		$jumlah_buku = $this->input->post('jumlah_buku');
		$jumlah_eksemplar = $this->input->post('jumlah_eksemplar');
		$kategori = $this->input->post('kategori');
		$nomor_kelas = $this->input->post('nomor_kelas');
		$kelas_deposit = $this->input->post('kelas_deposit');
		$deskripsi = $this->input->post('deskripsi');
		$no_ISBN = $this->input->post('no_ISBN');
		$bahasa = $this->input->post('bahasa');
		$subjek = $this->input->post('subjek');
		$abstrak = $this->input->post('abstrak');
		$file_digital = $this->input->post('file_digital');
		$id_petugas = $this->session->userdata('id_petugas');
		$gambar = $_FILES['gambar']['name'];
		if ($gambar) {
			$config['max_size'] = 2048; //2mb
			$config['upload_path'] = "./assets/uploads/buku/"; //storage
			$config['allowed_types'] = 'png|jpg|jpeg|pdf'; //format
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('gambar')) {
				$gambar = $this->upload->data('file_name');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-ban"></i> Gambar gagal diupload!</h4>(pastikan ukuran dan format gambar sesuai)</div>');
				redirect('data_buku');
			}
		} else {
			$gambar = '';
		}

		$data = [
			'judul' => $judul,
			'pengarang' => $pengarang,
			'penerbit' => $penerbit,
			'tahun' => $tahun,
			'jumlah_buku' => $jumlah_buku,
			'jumlah_eksemplar' => $jumlah_eksemplar,
			'kategori' => $kategori,
			'nomor_kelas' => $nomor_kelas,
			'kelas_deposit' => $kelas_deposit,
			'deskripsi' => $deskripsi,
			'no_ISBN' => $no_ISBN,
			'bahasa' => $bahasa,
			'subjek' => $subjek,
			'abstrak' => $abstrak,
			'file_digital' => $file_digital,
			'gambar' => $gambar,
			'id_petugas' => $id_petugas
		];

		$result = $this->M_buku->tambahBuku($data);
		if ($result > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h4><i class="icon fa fa-check"></i> Data berhasil ditambahkan!</h4></div>');
			redirect('data_buku');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h4><i class="icon fa fa-ban"></i> Data Gagal Ditambahka!</h4></div>');
			redirect('data_buku');
		}
	}

	public function detail($id)
	{
		$data['title'] = "Data Buku";
		$data['dataUser']  = $this->M_user->userById($this->session->userdata('id_petugas'));
		$data['detail_buku'] = $this->M_buku->dataBukuById($id);
		$this->load->view('layouts/head');
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar_menu', $data);
		$this->load->view('admin/data_buku/detail', $data);
		$this->load->view('layouts/foot');
	}
}
