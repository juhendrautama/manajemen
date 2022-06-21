
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pbahan extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pbahan');
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
		
		$data["pbahan_join"] = $this->M_pbahan->get_pbahan_join()->result();

		$data["judul"] = "Halaman Data Transaksi Pemakaian Bahan Praktek | SISTEM MANAJEMEN LABORATORIUM";

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('pbahan/tampil', $data);
		$this->load->view('template/footer', $data);

	}
	public function tambah()
	{
		$this->load->model('M_labor');
		$this->load->model('M_bahan');
		$data['labor'] = $this->M_labor->get_lab()->result();
		$data['bahan'] = $this->M_bahan->get_bahan_join()->result();
		$data["judul"] = "Halaman Tambah Data Transaksi Pemakaian Bahan Praktek | SISTEM MANAJEMEN LABORATORIUM";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('pbahan/tambahpbahan');
		$this->load->view('template/footer', $data);
		
	}
	public function simpan()
	{
		if(isset($_POST['save']))
		{
			$simpan= $this->M_pbahan->simpandata();
			//kurangi stok data bahan
			$pemakaian = $_POST['jumlah_pakai'];
			$id_lab = $_POST['id_lab'];
			$id_bahan = $_POST['id_bahan'];
			$this->db->query("UPDATE tbl_bahan SET stok_awal=stok_awal-'$pemakaian' WHERE id_lab='$id_lab' and id_bahan='$id_bahan' ");
			
			$this->session->set_flashdata('pesan', 'Data Disimpan');
			
			redirect(base_url('pbahan'));
		}
	}
	public function edit($id_pemakaian)
	{
		$data["judul"] = "Halaman Edit Data Transaksi Pemakaian Bahan Praktek | SISTEM MANAJEMEN LABORATORIUM";

		$this->M_pbahan->edit($id_pemakaian);
		redirect(base_url('pbahan'));

	}
	public function ke_editpbahan($id_pemakaian)
	{
		$data["judul"] = "Halaman Edit Data Transaksi Pemakaian Bahan Praktek | SISTEM MANAJEMEN LABORATORIUM";
		$where = array (
				'id_pemakaian' => $id_pemakaian);

		$data['pbahan']	= $this->M_pbahan->get_where($where, 'tbl_pemakaian_bahan' )->row();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('pbahan/editpbahan', $data);
		$this->load->view('template/footer', $data);

	}
	
	public function hapus($id_pemakaian)
	{
		$this->M_pbahan->hapus($id_pemakaian);
        redirect('pbahan');
	}

	
	
}

