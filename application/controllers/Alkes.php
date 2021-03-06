
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alkes extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_alkes');
		$this->load->model('M_pengadaan');
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
		
		$data["alkes_join"] = $this->M_alkes->get_alkes_join()->result();

		$data["judul"] = "Halaman Data Alat Kesehatan | SISTEM MANAJEMEN LABORATORIUM";

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('alkes/tampil', $data);
		$this->load->view('template/footer', $data);
	}



	public function tambah()
	{

		$this->load->model('M_labor');
		$this->load->model('M_alkes');
		$data['labor'] = $this->M_labor->get_lab()->result();
		$data["judul"] = "Halaman Tambah Data Alat Kesehatan | SISTEM MANAJEMEN LABORATORIUM";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('alkes/tambahalkes');
		$this->load->view('template/footer', $data);
	}

	public function simpan()
	{
		if(isset($_POST['save']))
		{
			$simpan= $this->M_alkes->simpandata();
			$this->session->set_flashdata('pesan', 'Data Disimpan');
			
			redirect(base_url('alkes'));
		}
	}

	public function ke_editalkes($id_alat)
	{
		$where = array (
				'id_alat' => $id_alat);
		$this->load->model('M_labor');
		$data['labor'] = $this->M_labor->get_lab()->result();
		$data['alkes']	= $this->M_alkes->get_where($where, 'tbl_alkes' )->row();
		$data["judul"] = "Halaman Edit Data Alat Kesehatan | SISTEM MANAJEMEN LABORATORIUM";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('alkes/editalkes', $data);
		$this->load->view('template/footer', $data);

	}
	public function edit($id_alat)
	{

		$this->M_alkes->edit($id_alat);
		redirect(base_url('alkes'));
	}
	public function hapus($id_alat)
    {
		$data_alat=$this->M_pengadaan->tampil_alat_id_alat($id_alat)->row();
		$id_alat=$data_alat->id_alat;
		if(empty($id_alat)){
			
			$data_alat=$this->M_pengadaan->tampil_alat_id_alat($id_alat)->row();
			$this->M_alkes->hapus($id_alat);
        	redirect('alkes');
		}else{
			
			$hasil=$this->M_pengadaan->Hapus_pengadaan_alat_baru($id_alat);
			if ($hasil==true){ 
				$this->M_alkes->hapus($id_alat);
        		redirect('alkes');
			 }
			
		}
        
    }
	
}

