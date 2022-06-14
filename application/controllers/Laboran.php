<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laboran extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_laboran');
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
		$data["laboran"] = $this->M_laboran->get_laboran()->result();
		
		$data["judul"] = "Halaman Data Laboran | SISTEM MANAJEMEN LABORATORIUM";

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('laboran/tampil', $data);
		$this->load->view('template/footer', $data);

	}
	public function tambah()
	{
		$data["laboran"] = $this->M_laboran->get_laboran()->result();
		
		$data["judul"] = "Halaman Tambah Data Laboran | SISTEM MANAJEMEN LABORATORIUM";

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('laboran/tambahlaboran', $data);
		$this->load->view('template/footer', $data);

	}
	public function simpan()
	{
		if(isset($_POST['save']))
		{
			$simpan= $this->M_laboran->simpandata();
			$this->session->set_flashdata('pesan', 'Data Disimpan');
			
			redirect(base_url('laboran'));
		}
	}
    public function ke_editlaboran($id_laboran)
	{
		$where = array (
				'id_laboran' => $id_laboran);

		$data['laboran']	= $this->M_laboran->get_where($where, 'tbl_laboran' )->row();
		$data["judul"] = "Halaman Edit Data Laboratorium| SISTEM MANAJEMEN LABORATORIUM";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('laboran/editlaboran', $data);
		$this->load->view('template/footer', $data);

	}
	
	public function edit($id_laboran)
	{

		$this->M_laboran->edit($id_laboran);
		redirect(base_url('laboran'));

	}
	public function hapus($id_laboran)
    {
        $this->M_laboran->hapus($id_laboran);
        redirect('laboran');
    }




}