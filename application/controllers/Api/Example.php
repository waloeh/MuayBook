<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/RestController.php';
require APPPATH . '/libraries/Format.php';

use chriskacerguis\RestServer\RestController;

class Example extends RestController {

	function __construct() {
		parent:: __construct();
	}

	public function users_get() {
		$id = $this->get('id');
		$user = $this->M_panitia->semuaData_panitia($id)->result_array();

		if ($id === null) {
			if ($user) {
				$this->response([
					'status' =>true,
					'pesan'  => 'success',
					'data'   => $user,
				], RestController::HTTP_OK );
			} else {
				$this->response([
					'status'  => false,
					'message' => 'data kosong'
				], RestController::HTTP_NOT_FOUND );
			}
		} else {
			if ($user) {
				$this->response([
					'status' => true,
					'pesan'  => 'success',
					'data'   => $user,
				], RestController::HTTP_OK );
			} else {
				$this->response([
					'status'  => false,
					'message' => 'data dengan id tersebut tidak ditemukan'
				], RestController::HTTP_NOT_FOUND );
			}
		}
	}
	public function users_delete() {
		$id = $this->delete('id');

		if ($id === NULL) {
			$this->response([
				'status' => false,
				'pesan'  => 'id tidak ditemukan',
			], RestController::HTTP_BAD_REQUEST);
		} else {
			$result = $this->M_panitia->hapus($id);
			if ($result > 0) {
				$this->response([
					'status' => true,
					'pesan'  => 'berhasil dihapus',
					'id'     => $id,
				], 200);
			} else {
				$this->response([
					'status' => false,
					'pesan'  => 'gagal dihapus',
					'id'     => $id,
				], 404);
			}
		}
	}

	public function users_post() {
		$data = [
			'username'    => $this->post('username'),
			'password'    => $this->post('password'),
			'level_admin' => $this->post('level_admin'),
			'nama'        => $this->post('nama')
		];

		$result = $this->M_panitia->input($data);
		if ($result > 0) {
			$this->response([
				'status' => true,
				'pesan'  => 'data berhasil di input',
			], 200);
		} else {
			$this->response([
				'status' => false,
				'pesan'  => 'data gagal diinput',
			], 404);
		}
	}

	public function users_put() {
		$id = $this->put('id');

		if ($id === null) {
			$this->response([
				'status' => false,
				'pesan'  => 'id tidak ditemukan',
			], 404);
		} else {
			$data = [
				'username'    => $this->put('username'),
				'password'    => $this->put('password'),
				'level_admin' => $this->put('level_admin'),
				'nama'        => $this->put('nama')
			];

			$result = $this->M_panitia->ubah($id, $data);
			if($result > 0) {
				$this->response([
					'status' => true,
					'pesan'  => 'data berhasil diubah',
				], 200);
			} else {
				$this->response([
					'status' => false,
					'pesan'  => 'data gagal diupdate',
				], 404);
			}
		}
	}
}

?>