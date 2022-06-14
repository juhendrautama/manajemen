<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_jadwal');
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
		$data["jadwal_join"] = $this->M_jadwal->get_jadwal_join()->result();
		
		$data["judul"] = "Halaman Data Jadwal Laboratorium | SISTEM MANAJEMEN LABORATORIUM";

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('jadwal/tampil', $data);
		$this->load->view('template/footer', $data);

	}
	public function tambah()
	{
		$this->load->model('M_jadwal');
		$this->load->model('M_labor');
		$data['labor'] = $this->M_labor->get_lab()->result();
		$this->load->model('M_laboran');
		$data['laboran'] = $this->M_laboran->get_laboran()->result();

		$data["judul"] = "Halaman Tambah Data Jadwal | SISTEM MANAJEMEN LABORATORIUM";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('jadwal/tambahjadwal');
		$this->load->view('template/footer', $data);
	}
	public function simpan()
	{
		if(isset($_POST['save']))
		{
			$simpan= $this->M_jadwal->simpandata();
			$this->session->set_flashdata('pesan', 'Data Disimpan');
			
			redirect(base_url('jadwal'));
		}
	}
	public function ke_editjadwal($id_jadwal)
	{
		$where = array (
				'id_jadwal' => $id_jadwal);

		$this->load->model('M_jadwal');
		$this->load->model('M_labor');
		$data['labor'] = $this->M_labor->get_lab()->result();
		$this->load->model('M_laboran');
		$data['laboran'] = $this->M_laboran->get_laboran()->result();
		$data['jadwal']	= $this->M_jadwal->get_where($where, 'tbl_jadwal' )->row();
		$data["judul"] = "Halaman Edit Data Jadwal | SISTEM MANAJEMEN LABORATORIUM";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('jadwal/editjadwal', $data);
		$this->load->view('template/footer', $data);

	}
	public function edit($id_jadwal)
	{

		$this->M_jadwal->edit($id_jadwal);
		redirect(base_url('jadwal'));
	}
	public function hapus($id_jadwal)
    {
        $this->M_jadwal->hapus($id_jadwal);
        redirect('jadwal');
    }



}