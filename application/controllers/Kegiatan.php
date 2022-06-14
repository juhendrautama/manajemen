
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kegiatan');
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
		
		$data["kegiatan_join"] = $this->M_kegiatan->get_kegiatan_join()->result();

		$data["judul"] = "Halaman Data Kegiatan | SISTEM MANAJEMEN LABORATORIUM";

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('kegiatan/tampil', $data);
		$this->load->view('template/footer', $data);


	}
	public function tambah()
	{

		$this->load->model('M_labor');
		$this->load->model('M_kegiatan');
		$data['labor'] = $this->M_labor->get_lab()->result();
		$data["judul"] = "Halaman Tambah Data Kegiatan | SISTEM MANAJEMEN LABORATORIUM";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('kegiatan/tambahkegiatan');
		$this->load->view('template/footer', $data);
	}
	public function simpan()
	{
		if(isset($_POST['save']))
		{
			$simpan= $this->M_kegiatan->simpandata();
			$this->session->set_flashdata('pesan', 'Data Disimpan');
			
			redirect(base_url('kegiatan'));
		}
	}

	public function ke_editkegiatan($id_kegiatan)
	{
		$where = array (
				'id_kegiatan' => $id_kegiatan);

		$this->load->model('M_labor');
		$data['labor'] = $this->M_labor->get_lab()->result();
		$data['kegiatan']	= $this->M_kegiatan->get_where($where, 'tbl_kegiatan' )->row();
		$data["judul"] = "Halaman Edit Data Kegiatan | SISTEM MANAJEMEN LABORATORIUM";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('kegiatan/editkegiatan', $data);
		$this->load->view('template/footer', $data);

	}
	
	public function edit($id_kegiatan)
	{

		$this->M_kegiatan->edit($id_kegiatan);
		redirect(base_url('kegiatan'));
	}
	public function hapus($id_kegiatan)
    {
        $this->M_kegiatan->hapus($id_kegiatan);
        redirect('kegiatan');
    }

	
}

