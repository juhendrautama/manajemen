<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_bahan_praktek extends CI_Controller {


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
		$this->load->view('laporan/lap_bahan');
		$this->load->view('template/footer');

	}

	public function Cari()
	{
		if (isset($_POST['proses'])) {
			$data["bahan_join_laporan"] = $this->M_bahan->get_bahan_join_laporan()->result();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('laporan/lap_bahan', $data);
			$this->load->view('template/footer');
		} else {
			redirect('adminpanel/Laporan_alkes');
		}
	}
	public function Cetak_laporan($tgl1,$tgl2)
	{
		$data['bahan_join_laporan'] = $this->M_bahan->cetak_laporan($tgl1,$tgl2)->result();
		$this->load->view('laporan/lap_bahan_cetak', $data);
	}




}