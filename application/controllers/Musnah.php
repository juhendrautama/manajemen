<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musnah extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_musnah');
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
		
		$data["musnah_join"] = $this->M_musnah->get_musnah_join()->result();

		$data["judul"] = "Halaman Data Alat Musnah | SISTEM MANAJEMEN LABORATORIUM";

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('musnah/tampil', $data);
		$this->load->view('template/footer', $data);

	}
	public function tambah()
	{
	
		$this->load->model('M_musnah');
		$this->load->model('M_labor');
		$data["labor"] = $this->M_labor->get_lab()->result();
		$this->load->model('M_alkes');
		$data["alkes"] = $this->M_alkes->get_alkes_join()->result();
		
		$data["judul"] = "Halaman Tambah Data Alat Kesehatan | SISTEM MANAJEMEN LABORATORIUM";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('musnah/tambahmusnah');
		$this->load->view('template/footer', $data);
	
	}
	public function simpan()
	{
		if(isset($_POST['save']))
		{
			$simpan= $this->M_musnah->simpandata();

			//kurangi stok data alkes
			$jumlah_musnah = $_POST['jumlah_musnah'];
			$id_lab = $_POST['id_lab'];
			$id_alat = $_POST['id_alat'];
			$this->db->query("UPDATE tbl_alkes SET jumlah=jumlah-'$jumlah_musnah' WHERE id_lab='$id_lab' and id_alat='$id_alat' ");

			$this->session->set_flashdata('pesan', 'Data Disimpan');
			
			redirect(base_url('musnah'));
		}
	}
	public function ke_editmusnah($id_musnah)
	{
		$where = array (
				'id_musnah' => $id_musnah);

		$this->load->model('M_labor');
		$data["labor"] = $this->M_labor->get_lab()->result();
		$this->load->model('M_alkes');
		$data["alkes"] = $this->M_alkes->get_alkes_join()->result();

		$data['musnah']	= $this->M_musnah->get_where($where, 'tbl_musnah' )->row();
		$data["judul"] = "Halaman Edit Data Laboratorium| SISTEM MANAJEMEN LABORATORIUM";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('musnah/editmusnah', $data);
		$this->load->view('template/footer', $data);

	}

	public function edit($id_musnah)
	{

		$this->M_musnah->edit($id_musnah);
		redirect(base_url('musnah'));

	}
	public function hapus($id_musnah)
    {
        $this->M_musnah->hapus($id_musnah);
        redirect('musnah');
    }


}