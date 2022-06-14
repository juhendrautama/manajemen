
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bahan extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_bahan');
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
	public function tampil()
	{
		
		$data["bahan_join"] = $this->M_bahan->get_bahan_join()->result();

		$data["judul"] = "Halaman Data Bahan Praktek | SISTEM MANAJEMEN LABORATORIUM";

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('bahan/tampil', $data);
		$this->load->view('template/footer', $data);

	}
	public function tambah()
	{

		$this->load->model('M_bahan');
		$this->load->model('M_labor');
		$data['labor'] = $this->M_labor->get_lab()->result();
		$data["judul"] = "Halaman Tambah Data Bahan Praktek | SISTEM MANAJEMEN LABORATORIUM";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('bahan/tambahbahan');
		$this->load->view('template/footer', $data);
	}
	public function simpan()
	{
		if(isset($_POST['save']))
		{
			$simpan= $this->M_bahan->simpandata();
			$this->session->set_flashdata('pesan', 'Data Disimpan');
			
			redirect(base_url('bahan'));
		}
	}
	
	public function edit()
	{

		echo "ini halaman tambah";
	}
	public function hapus()
	{

		echo "ini halaman tambah";
	}
	
}

