<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudController extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->Library('session');
	}

	public function tambah_data(){
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$tempat_lahir = $_POST['tempat_lahir'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$asal_sekolah = $_POST['asal_sekolah'];
		$nama_ayah = $_POST['nama_ayah'];
		$nama_ibu = $_POST['nama_ibu'];
		$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
		$pekerjaan_ibu = $_POST['pekerjaan_ibu'];

		$tambah_data = array(
				'nis' => $nis,
				'nama' => $nama,
				'alamat' => $alamat,
				'jenis_kelamin' => $jenis_kelamin,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'asal_sekolah' => $asal_sekolah,
				'nama_ayah' => $nama_ayah,
				'nama_ibu' => $nama_ibu,
				'pekerjaan_ayah' => $pekerjaan_ayah,
				'pekerjaan_ibu' => $pekerjaan_ibu
			);
		$this->ApplicationModel->insert_data('data_siswa', $tambah_data);
		redirect('DashboardController/index');
	}

	public function lihat_detail($nis){
		$lihat_detail = $this->ApplicationModel->get("data_siswa", "where nis = '$nis'");
		$data = array(
				'nis' => $lihat_detail[0]['nis'],
				'nama' => $lihat_detail[0]['nama'],
				'alamat' => $lihat_detail[0]['alamat'],
				'jenis_kelamin' => $lihat_detail[0]['jenis_kelamin'],
				'tempat_lahir' => $lihat_detail[0]['tempat_lahir'],
				'tanggal_lahir' => $lihat_detail[0]['tanggal_lahir'],
				'asal_sekolah' => $lihat_detail[0]['asal_sekolah'],
				'nama_ayah' => $lihat_detail[0]['nama_ayah'],
				'nama_ibu' => $lihat_detail[0]['nama_ibu'],
				'pekerjaan_ayah' => $lihat_detail[0]['pekerjaan_ayah'],
				'pekerjaan_ibu' => $lihat_detail[0]['pekerjaan_ibu']
			);
		$this->load->view('lihat_detail', $data);
	}

	public function delete_data($nis){
		$data = array('nis' => $nis);
		$this->ApplicationModel->delete_data('data_siswa', $data);
		redirect('DashboardController/index');
	}

	public function edit_data($nis){
		$lihat_detail = $this->ApplicationModel->get("data_siswa", "where nis = '$nis'");
		$data = array(
				'nis' => $lihat_detail[0]['nis'],
				'nama' => $lihat_detail[0]['nama'],
				'alamat' => $lihat_detail[0]['alamat'],
				'jenis_kelamin' => $lihat_detail[0]['jenis_kelamin'],
				'tempat_lahir' => $lihat_detail[0]['tempat_lahir'],
				'tanggal_lahir' => $lihat_detail[0]['tanggal_lahir'],
				'asal_sekolah' => $lihat_detail[0]['asal_sekolah'],
				'nama_ayah' => $lihat_detail[0]['nama_ayah'],
				'nama_ibu' => $lihat_detail[0]['nama_ibu'],
				'pekerjaan_ayah' => $lihat_detail[0]['pekerjaan_ayah'],
				'pekerjaan_ibu' => $lihat_detail[0]['pekerjaan_ibu']
			);
		$this->load->view('edit_data', $data);
	}

	public function do_edit_data(){
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$tempat_lahir = $_POST['tempat_lahir'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$asal_sekolah = $_POST['asal_sekolah'];
		$nama_ayah = $_POST['nama_ayah'];
		$nama_ibu = $_POST['nama_ibu'];
		$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
		$pekerjaan_ibu = $_POST['pekerjaan_ibu'];

		$edit_data = array(
				'nama' => $nama,
				'alamat' => $alamat,
				'jenis_kelamin' => $jenis_kelamin,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'asal_sekolah' => $asal_sekolah,
				'nama_ayah' => $nama_ayah,
				'nama_ibu' => $nama_ibu,
				'pekerjaan_ayah' => $pekerjaan_ayah,
				'pekerjaan_ibu' => $pekerjaan_ibu
			);
		$where = array('nis' => $nis);
		$this->ApplicationModel->edit_data('data_siswa', $edit_data, $where);
		redirect('CrudController/lihat_detail/'.$nis);
	}
}
