<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller 
{


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

	public function tampil()
	{
		
		$data["peminjaman_join"] = $this->M_peminjaman->get_peminjaman_join()->result();

		$data["judul"] = "Halaman Data Alat Peminjaman | SISTEM MANAJEMEN LABORATORIUM";

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('peminjaman/tampil', $data);
		$this->load->view('template/footer', $data);

	}
	public function tambah()
	{
		$this->load->model('M_peminjaman');
		$this->load->model('M_labor');
		$data['labor'] = $this->M_labor->get_lab()->result();
		$this->load->model('M_alkes');
		$data['alkes'] = $this->M_alkes->get_alkes_join()->result();

		$data["judul"] = "Halaman Tambah Data Peminjaman | SISTEM MANAJEMEN LABORATORIUM";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('peminjaman/tambahpeminjaman');
		$this->load->view('template/footer', $data);
	}
	public function simpan()
	{
		if(isset($_POST['save']))
		{
			$simpan= $this->M_peminjaman->simpandata();
			$this->session->set_flashdata('pesan', 'Data Disimpan');
			
			redirect(base_url('peminjaman'));
		}
	}
	public function ke_editpeminjaman($id_peminjaman)
	{
		$where = array (
				'id_peminjaman' => $id_peminjaman);

		$this->load->model('M_peminjaman');
		$this->load->model('M_labor');
		$data['labor'] = $this->M_labor->get_lab()->result();
		$this->load->model('M_alkes');
		$data['alkes'] = $this->M_alkes->get_alkes_join()->result();
		$data['peminjaman']	= $this->M_peminjaman->get_where($where, 'tbl_peminjaman' )->row();
		$data["judul"] = "Halaman Edit Data Peminjaman | SISTEM MANAJEMEN LABORATORIUM";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('peminjaman/editpeminjaman', $data);
		$this->load->view('template/footer', $data);

	}
	public function edit($id_peminjaman)
	{

		$this->M_peminjaman->edit($id_peminjaman);
		redirect(base_url('peminjaman'));
	}

	public function edit2($id_peminjaman)
	{

		$this->M_peminjaman->edit2($id_peminjaman);
		redirect(base_url('peminjaman'));
	}

	public function hapus($id_peminjaman)
    {
        $this->M_peminjaman->hapus($id_peminjaman);
        redirect('../peminjaman');
    }
}