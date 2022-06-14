
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karya extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_karya');
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
		
		$data["karya_join"] = $this->M_karya->get_karya_join()->result();

		$data["judul"] = "Halaman Data Hasil Karya Mahasiswa | SISTEM MANAJEMEN LABORATORIUM";

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('karya/tampil', $data);
		$this->load->view('template/footer', $data);

	}

	public function tambah()
	{

		$this->load->model('M_labor');
		$this->load->model('M_karya');
		$data['labor'] = $this->M_labor->get_lab()->result();
		$data["judul"] = "Halaman Tambah Data Hasil Karya| SISTEM MANAJEMEN LABORATORIUM";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('karya/tambahkarya');
		$this->load->view('template/footer', $data);
	}

	public function simpan()
	{
		if(isset($_POST['save']))
		{
			$simpan= $this->M_karya->simpandata();
			$this->session->set_flashdata('pesan', 'Data Disimpan');
			
			redirect(base_url('karya'));
		}
	}

	public function ke_editkarya($id_karya)
	{
		$where = array (
				'id_karya' => $id_karya);

		$data['karya']	= $this->M_karya->get_where($where, 'tbl_hasil_karya' )->row();
		$data["judul"] = "Halaman Edit Data Hasil Karya Mahasiswa | SISTEM MANAJEMEN LABORATORIUM";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('karya/editkarya', $data);
		$this->load->view('template/footer', $data);

	}
	public function edit($id_karya)
	{

		$this->M_karya->edit($id_karya);
		redirect(base_url('karya'));
	}
	public function hapus($id_karya)
    {
        $this->M_karya->hapus($id_karya);
        redirect('karya');
    }
	
}

