<?php

use chriskacerguis\RestServer\RestController;

defined('BASEPATH') OR exit ('No direct script access allowed');

class Informasi extends RestController {
	function __construct() {
		parent:: __construct();
	}

	public function showData() {
		$response = array();
		$data = $this->M_informasi->semuaData_informasi();

		if ($data->num_rows() > 0) {
			$response['pesan'] = 'success';
			$response['data'] = $data->result_array();
			$response['status'] = true;
		} else {
			$response['pesan'] = 'gagal';
			$response['status'] = false;
		}
		echo json_encode($response);
	}
}
