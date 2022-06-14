<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengadaan extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pengadaan');
		$this->load->model('M_alkes');
		$this->load->model('M_bahan');
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
		$data['alkes'] = $this->M_alkes->get_alkes_join()->result();
		$data['bahan'] = $this->M_bahan->get_bahan_join()->result();
		$data['labor'] = $this->M_labor->get_lab()->result();
		$data['kode_pengadaan']=$this->M_pengadaan->buat_kode();
		$data['kode_pengadaan2']=$this->M_pengadaan->buat_kode2();
		$data["pengadaan_join"] = $this->M_pengadaan->Tampil_data_pengadaan_alat()->result();
		$data["pengadaan_join2"] = $this->M_pengadaan->Tampil_data_pengadaan_bahan()->result();
		$data["judul"] = "Halaman Data Pengadaan| SISTEM MANAJEMEN LABORATORIUM";

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('pengadaan/tampil', $data);
		$this->load->view('template/footer', $data);

	}
	public function Simpan_pengadaan_baru(){
		if(isset($_POST['proses'])){
			$hasil1=$this->M_pengadaan->Simpan_data_alkes_baru();
			if ($hasil1==true) {
				$kode_pengadaan=$this->input->post('kode_pengadaan');
				$ambil_data=$this->M_pengadaan->ambil_alkes($kode_pengadaan)->row();
				 $id_alat=$ambil_data->id_alat;
				 $hasil=$this->M_pengadaan->Simpan_pengadaan_baru($id_alat);
				if ($hasil){ ?>
				<script type="text/javascript">
						alert('Data Simpan');window.location="<?php echo base_url() ?>Pengadaan";
					</script>
				<?php }
				
				
			}else{
				echo "DATA GAGAL DI SIMPAN 2";
			}
		}else{
				echo "DATA GAGAL DI SIMPAN 1";
			}
		
	}

	public function Simpan_pengadaan_lama(){
		if(isset($_POST['proses'])){
		
				 $hasil=$this->M_pengadaan->Simpan_pengadaan_lama();
				if ($hasil){ ?>
				<script type="text/javascript">
						alert('Data Simpan');window.location="<?php echo base_url() ?>Pengadaan";
					</script>
				<?php }
				
				
			}else{
				echo "DATA GAGAL DI SIMPAN 2";
			}
		
	}




	public function Simpan_pengadaan_bahan_baru(){
		if(isset($_POST['proses'])){
			$hasil1=$this->M_pengadaan->Simpan_bahan_baru();
			if ($hasil1==true) {
				$kode_pengadaan=$this->input->post('kode_pengadaan');
				$ambil_data=$this->M_pengadaan->ambil_bahan($kode_pengadaan)->row();
				 $id_bahan=$ambil_data->id_bahan;
				 $hasil=$this->M_pengadaan->Simpan_pengadaan_bahan_baru($id_bahan);
				if ($hasil){ ?>
				<script type="text/javascript">
						alert('Data Simpan');window.location="<?php echo base_url() ?>Pengadaan";
					</script>
				<?php }
				
				
			}else{
				echo "DATA GAGAL DI SIMPAN 2";
			}
		}else{
				echo "DATA GAGAL DI SIMPAN 1";
			}
		
	}

	public function Simpan_bahan_lama(){
		if(isset($_POST['proses'])){
		
				 $hasil=$this->M_pengadaan->Simpan_bahan_lama();
				if ($hasil){ ?>
				<script type="text/javascript">
						alert('Data Simpan');window.location="<?php echo base_url() ?>Pengadaan";
					</script>
				<?php }
				
				
			}else{
				echo "DATA GAGAL DI SIMPAN 2";
			}
		
	}




}