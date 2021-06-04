<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyModel extends CI_Model {
	public function insert_data($nama_tabel, $data){
		$data = $this->db->insert($nama_tabel, $data);
		return $data;
	}

	public function get($nama_tabel, $where){
		$data = $this->db->query("select * from $nama_tabel ".$where);
		return $data->result_array();
	}

	public function get_nota() {
		$data = $this->db->query("select id_masuk from parkir_masuk order by id_masuk desc limit 1");
		return $data->result_array();
	}

	public function get_tgl_masuk($id_masuk) {
		$data = $this->db->query("select tgl_masuk from parkir_masuk where id_masuk = '$id_masuk'");
		return $data->result_array();
	}

	public function get_report() {
		$data = $this->db->query("select kendaraan.id_kendaraan, tarif, jenis, tgl_masuk, tgl_keluar, durasi, total from kendaraan join transaksi on kendaraan.id_kendaraan = transaksi.id_kendaraan join parkir_masuk on parkir_masuk.id_masuk = transaksi.id_masuk");
		return $data->result_array();
	}
}
