<?php
class Access_denied extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Access Denied";
		$this->load->view('layouts/head_login');
		$this->load->view('errors/access_denied', $data);
		$this->load->view('layouts/foot_login');
	}
}
