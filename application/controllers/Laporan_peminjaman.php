<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_peminjaman extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_peminjaman');
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
		$this->load->view('laporan/lap_peminjaman');
		$this->load->view('template/footer');

	}

	public function Cari()
	{
		if (isset($_POST['proses'])) {
			$data["peminjaman_join_lap"] = $this->M_peminjaman->get_peminjaman_join_lap()->result();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('laporan/lap_peminjaman', $data);
			$this->load->view('template/footer');
		} else {
			redirect('adminpanel/Laporan_alkes');
		}
	}
	public function Cetak_laporan($tgl1,$tgl2)
	{
		$data['get_peminjaman_join_lap_cetak'] = $this->M_peminjaman->get_peminjaman_join_lap_cetak($tgl1,$tgl2)->result();
		$this->load->view('laporan/lap_peminjaman_cetak', $data);
	}




}