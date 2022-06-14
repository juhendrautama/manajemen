
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Labor extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
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

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function tampil()
	{
		
		$data["lab"] = $this->M_labor->get_lab()->result();

		$data["judul"] = "Halaman Data Ruang Laboratorium | SISTEM MANAJEMEN LABORATORIUM";

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('labor/tampil', $data);
		$this->load->view('template/footer', $data);

	}

	public function tambah()
	{

		$this->load->model('M_labor');
		$data['labor'] = $this->M_labor->get_lab()->result();
		$data["judul"] = "Halaman Tambah Data Laboratorium | SISTEM MANAJEMEN LABORATORIUM";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('labor/tambahlabor');
		$this->load->view('template/footer', $data);
	}

	public function simpan()
	{
		if(isset($_POST['save']))
		{
			$simpan= $this->M_labor->simpandata();
			$this->session->set_flashdata('pesan', 'Data Disimpan');
			
			redirect(base_url('labor'));
		}
	}
	public function ke_editlabor($id_lab)
	{
		$where = array (
				'id_lab' => $id_lab);

		$data['labor']	= $this->M_labor->get_where($where, 'tbl_lab' )->row();
		$data["judul"] = "Halaman Edit Data Laboratorium| SISTEM MANAJEMEN LABORATORIUM";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('labor/editlabor', $data);
		$this->load->view('template/footer', $data);

	}

	
	public function edit($id_lab)
	{

		$this->M_labor->edit($id_lab);
		redirect(base_url('labor'));

	}
	public function hapus($id_lab)
    {
        $this->M_labor->hapus($id_lab);
        redirect('labor');
    }
	
	
}

