<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $this->load->library('pagination');
        $jmlDataBuku = $this->M_buku->jml_data_buku();
        $config['base_url'] = 'http://localhost/Buku/index.php/home/index/';
        $config['total_rows'] = $jmlDataBuku;
        $config['per_page'] = 4;
        $data['mulai'] = $this->uri->segment(3);
        //styling
        // $config['full_tag_open'] = '<nav><ul class="pagination">';
        // $config['full_tag_close'] = '</ul></nav>';

        // $config['first_link'] = 'first';
        // $config['first_tag_open'] = '<li>';
        // $config['first_tag_close'] = '</li>';

        // $config['last_link'] = 'last';
        // $config['last_tag_open'] = '<li>';
        // $config['last_tag_close'] = '</li>';

        // $config['next_link'] = '&raquo';
        // $config['next_tag_open'] = '<li>';
        // $config['next_tag_close'] = '</li>';

        // $config['prev_link'] = '&laquo';
        // $config['prev_tag_open'] = '<li>';
        // $config['prev_tag_close'] = '</li>';

        // $config['cur_tag_open'] = '<li class="active>';
        // $config['cur_tag_close'] = '</a></li>';

        // $config['num_tag_open'] = '<li>';
        // $config['num_tag_close'] = '</li>';

        // $config['attributes'] = array('class' => 'page-link');

        //inisialisasi
        $this->pagination->initialize($config);
        $data['data_buku'] = $this->M_buku->data_buku_limit($config['per_page'], 1);

        $this->load->view('home/head');
        $this->load->view('home/index', $data);
        $this->load->view('home/foot');
    }

    public function detailBuku($id)
    {
        $data['bukuById'] = $this->M_buku->dataBukuById($id);
        $this->load->view('home/head');
        $this->load->view('home/detail', $data);
        $this->load->view('home/foot');
    }

    public function getDataBuku($url)
    {
        $this->load->library('pagination');
        $jmlDataBuku = $this->M_buku->jml_data_buku();
        $config['base_url'] = 'http://localhost/Buku/index.php/home/index/';
        $config['total_rows'] = $jmlDataBuku;
        $config['per_page'] = 4;
        $dimulaiDari = $url;
        $this->pagination->initialize($config);
        $data = $this->M_buku->data_buku_limit($config['per_page'], $dimulaiDari);

        echo json_encode($data);
        // echo json_encode($this->M_buku->data_buku());
    }

    public function getDataBukuByKategory($kategory, $dimulaiDari)
    {
        $this->load->library('pagination');
        $jmlDataBuku = $this->M_buku->jml_data_buku();
        $config['base_url'] = 'http://localhost/Buku/index.php/home/index/';
        $config['total_rows'] = $jmlDataBuku;
        $config['per_page'] = 3;
        $this->pagination->initialize($config);
        $data = $this->M_buku->dataBukuByKategory($kategory, $config['per_page'], $dimulaiDari);
        echo json_encode($data);
    }

    public function searchDataBuku($textCari, $kategori)
    {
        echo json_encode($this->M_buku->cariBuku($textCari, $kategori));
    }
}
