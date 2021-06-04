<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyController extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->Library('session');
	}

	public function index(){
		$transaksi = $this->MyModel->get_report();
		$data = array(
			'data' => $transaksi
		);
		$this->load->view('dashboard', $data);
	}

	public function parkir_masuk() {
		$tgl_masuk = $_POST['tgl_masuk'];

		$insert_masuk = array(
			'tgl_masuk' => $tgl_masuk
		);

		$this->MyModel->insert_data('parkir_masuk', $insert_masuk);

		$nota = $this->MyModel->get_nota();
		$data = array(
			'id_masuk' => $nota[0]['id_masuk']
		);
		$this->load->view('nota', $data);
	}

	public function parkir_keluar() {
		$id_masuk = $_POST['id_masuk'];
		$kendaraan = $this->MyModel->get('kendaraan', '');

		$data = array(
			'id_masuk' => $id_masuk,
			'kendaraan' => $kendaraan
		);

		$this->load->view('transaksi', $data);
	}

	public function transaksi() {
		$id_kendaraan = $_POST['id_kendaraan'];
		$id_masuk = $_POST['id_masuk'];
		$tgl_keluar = $_POST['tgl_keluar'];
		// $durasi = $_POST['durasi'];
		// $total = $_POST['total'];

		$tgl_masuk = $this->MyModel->get_tgl_masuk($id_masuk);

		foreach($tgl_masuk as $row) {
			$tgl_masuk = $row['tgl_masuk'];
		}

		$durasi = ((abs(strtotime($tgl_keluar) - strtotime($tgl_masuk)))/(60*60*24));

		if($id_kendaraan <= 6) {
			$total = 3000 * $durasi;
		} else {
			$total = 1000 * $durasi;
		}

		// if($id_kendaraan == 1) {
		// 	$total = 3000*$durasi*(90/100);
		// } else if($id_kendaraan == 2) {
		// 	$total = 3000*$durasi*(90/100);
		// }  else if($id_kendaraan == 3) {
		// 	$total = 3000*$durasi*(80/100);
		// }  else if($id_kendaraan == 4) {
		// 	$total = 3000*$durasi*(85/100);
		// }  else if($id_kendaraan == 5) {
		// 	$total = 3000*$durasi*(75/100);
		// }  else if($id_kendaraan == 6) {
		// 	$total = 3000*$durasi*(70/100);
		// }  else if($id_kendaraan == 7) {
		// 	$total = 1000*$durasi*(90/100);
		// }  else if($id_kendaraan == 8) {
		// 	$total = 1000*$durasi*(80/100);
		// } else {
		// 	$total = 0;
		// }

		$transaksi = array(
			'id_kendaraan' => $id_kendaraan,
			'id_masuk' => $id_masuk,
			'tgl_keluar' => $tgl_keluar,
			'durasi' => $durasi,
			'total' => $total
		);

		$this->MyModel->insert_data('transaksi', $transaksi);

		$data = array(
			'total' => $total
		);

		$this->load->view('total', $data);
	}
}
