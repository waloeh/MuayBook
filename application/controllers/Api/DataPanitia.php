<?php

use chriskacerguis\RestServer\RestController;

defined('BASEPATH') OR exit ('No direct script access allowed');

class DataPanitia extends RestController {
	function __construct() {
		parent:: __construct();
	}

	public function showData() {
		$response = array();
		$data = $this->M_panitia->semuaData_panitia();

		if ($data->num_rows() > 0) {
			$response['pesan'] = 'success';
			$response['data']  = $data->result_array();
			$response['status'] = true;
		} else {
			$response['pesan'] = 'gagal';
			$response['status'] = false;
		}
		echo json_encode($response);
	}
}
