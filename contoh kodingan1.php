
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karya extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_karya');
	}

	public function index()
	{
		
		$data["karya_join"] = $this->M_karya->get_karya_join()->result();
		print_r($this->db->last_query()); exit;

		$data["judul"] = "Halaman Data Hasil Karya Mahasiswa | SISTEM MANAJEMEN LABORATORIUM";

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('karya/tampil', $data);
		$this->load->view('template/footer', $data);

	}

	public function tambah()
	{

		// $this->load->model('M_labor');
		// $this->load->model('M_alkes');
		// $data['labor'] = $this->M_labor->get_lab()->result();
		// $data["judul"] = "Halaman Tambah Data Alat Kesehatan | SISTEM MANAJEMEN LABORATORIUM";
		// $this->load->view('template/header', $data);
		// $this->load->view('template/sidebar', $data);
		// $this->load->view('alkes/tambahalkes');
		// $this->load->view('template/footer', $data);
	}

	public function simpan()
	{
		// if(isset($_POST['save']))
		// {
		// 	$simpan= $this->M_alkes->simpandata();
		// 	$this->session->set_flashdata('pesan', 'Data Disimpan');
			
		// 	redirect(base_url('alkes'));
		// }
	}

	public function ke_editalkes()
	{
		// $where = array (
		// 		'id_alat' => $id_alat);

		// $data['alkes']	= $this->M_alkes->get_where($where, 'tbl_alkes' )->row();
		// $data["judul"] = "Halaman Edit Data Alat Kesehatan | SISTEM MANAJEMEN LABORATORIUM";
		// $this->load->view('template/header', $data);
		// $this->load->view('template/sidebar', $data);
		// $this->load->view('alkes/editalkes', $data);
		// $this->load->view('template/footer', $data);

	}
	public function edit()
	{

		// $this->M_alkes->edit($id_alat);
		// redirect(base_url('alkes'));
	}
	public function hapus()
    {
        // $this->M_alkes->hapus($id_alat);
        // redirect('alkes');
    }
	
}

