<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_pemakaian_bahan extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pbahan');
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
		$this->load->view('laporan/lap_pemkaan_bahan');
		$this->load->view('template/footer');

	}

	public function Cari()
	{
		if (isset($_POST['proses'])) {
			$data["pbahan_join"] = $this->M_pbahan->get_pbahan_join_lap()->result();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('laporan/lap_pemkaan_bahan', $data);
			$this->load->view('template/footer');
		} else {
			redirect('adminpanel/Laporan_alkes');
		}
	}
	public function Cetak_laporan($tgl1,$tgl2)
	{
		$data["pbahan_join"] = $this->M_pbahan->get_pbahan_join_lap_cetak($tgl1,$tgl2)->result();
		$this->load->view('laporan/lap_pemkaan_bahan_cetak', $data);
	}


}