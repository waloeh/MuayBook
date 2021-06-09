<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
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
        $data['title'] = "Laporan";
        $kategori = $this->input->post('kategori');
        $data['dataUser']  = $this->M_user->userById($this->session->userdata('id_petugas'));
        $data['data_buku'] = $this->M_buku->dataBukuByKategory($kategori);
        $this->load->view('layouts/head');
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar_menu', $data);
        $this->load->view('admin/data_buku/laporan', $data);
        $this->load->view('layouts/foot');
    }

    public function cetakPdf($kategori = "")
    {
        $data['data_buku'] = $this->M_buku->dataBukuByKategory($kategori);

        //load library dompdf
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-buku.pdf";
        $this->pdf->load_view('admin/data_buku/laporan_pdf', $data);
        // $this->load->view('admin/data_buku/laporan_pdf', $data);
    }
}
