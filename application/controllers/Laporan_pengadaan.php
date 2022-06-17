<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_pengadaan extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pengadaan');
		$this->load->model('M_alkes');
		$this->load->model('M_bahan');
		$this->load->model('M_labor');
		$this->load->library("session");
		$this->sessionku();
	}
	function sessionku ()

	{
		$berhasil=$this->session->userdata('login');
		if (!isset($berhasil) || $berhasil !=true )
		{

			redirect('../Login');

		}
	}

	public function index(){
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('laporan/lap_Pengadaan');
		$this->load->view('template/footer');

	}

	public function Cari()
	{
		if (isset($_POST['proses'])) {
			$jenis_pengadaan=$this->input->post('jenis_pengadaan');
			if($jenis_pengadaan=='Alat'){
			$data["tampil_lap_all_pengadaan"] = $this->M_pengadaan->tampil_lap_all_pengadaan_alat()->result();
			}else if($jenis_pengadaan=='Bahan'){
			$data["tampil_lap_all_pengadaan"] = $this->M_pengadaan->tampil_lap_all_pengadaan_bahan()->result();
			}

			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('laporan/lap_Pengadaan', $data);
			$this->load->view('template/footer');
		} else {
			redirect('adminpanel/Laporan_alkes');
		}
	}
	public function Cetak_laporan($tgl1,$tgl2,$jenis_pengadaan)
	{
		if($jenis_pengadaan=='Alat'){
			$data["tampil_lap_all_pengadaan"] = $this->M_pengadaan->all_pengadaan_alat_cetaka($tgl1,$tgl2,$jenis_pengadaan)->result();
		}else if($jenis_pengadaan=='Bahan'){
			$data["tampil_lap_all_pengadaan"] = $this->M_pengadaan->all_pengadaan_bahan_cetakb($tgl1,$tgl2,$jenis_pengadaan)->result();
		}
		$this->load->view('laporan/lap_Pengadaan_cetak', $data);
	}




}