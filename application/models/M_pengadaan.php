
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengadaan extends CI_Model {
//laporan
public function tampil_lap_all_pengadaan_alat()
	{
		$tgl1=$this->db->escape_str($this->input->post('tgl1'));
		$tgl2=$this->db->escape_str($this->input->post('tgl2'));
		$jenis_pengadaan=$this->db->escape_str($this->input->post('jenis_pengadaan'));
		$query = $this->db->query("SELECT * FROM  tbl_pengadaan where tgl_pengadaan BETWEEN '$tgl1' AND '$tgl2' and jenis_pengadaan='$jenis_pengadaan' ORDER BY id_pengadaan DESC");
		return $query;
	}
	public function tampil_lap_all_pengadaan_bahan()
	{
		$tgl1=$this->db->escape_str($this->input->post('tgl1'));
		$tgl2=$this->db->escape_str($this->input->post('tgl2'));
		$jenis_pengadaan=$this->db->escape_str($this->input->post('jenis_pengadaan'));
		$query = $this->db->query("SELECT * FROM  tbl_pengadaan where tgl_pengadaan BETWEEN '$tgl1' AND '$tgl2' and jenis_pengadaan='$jenis_pengadaan' ORDER BY id_pengadaan DESC");
		return $query;
	}
	
	

	public function all_pengadaan_alat_cetaka($tgl1,$tgl2,$jenis_pengadaan)
	{
		$query = $this->db->query("SELECT * FROM  tbl_pengadaan where tgl_pengadaan BETWEEN '$tgl1' AND '$tgl2' and jenis_pengadaan='$jenis_pengadaan' ORDER BY id_pengadaan DESC");
		return $query;
	}
	public function all_pengadaan_bahan_cetakb($tgl1,$tgl2,$jenis_pengadaan)
	{
		$query = $this->db->query("SELECT * FROM  tbl_pengadaan where tgl_pengadaan BETWEEN '$tgl1' AND '$tgl2' and jenis_pengadaan='$jenis_pengadaan' ORDER BY id_pengadaan DESC");
		return $query;
	}	
//laporan

//queri untuk cek data pengadaan berdasar kan id_alat
public function tampil_alat_id_alat($id_alat)
{
	$query = $this->db->query("SELECT * FROM  tbl_pengadaan where id_alat='$id_alat'");
	return $query;
}
//queri untuk cek data pengadaan berdasar kan id_alat

//queri untuk penambahan
public function tampil_alat_alkes($id_alat)
	{
		$query = $this->db->query("SELECT sum(jumlah_pengadaan) as total_alat FROM  tbl_pengadaan where id_alat='$id_alat' and kategori='lama' and status_pengadaan='Sesuai' ");
		return $query;
	}
	public function tampil_bahan_jum($id_bahan)
	{
		$query = $this->db->query("SELECT sum(jumlah_pengadaan) as total_bahan FROM  tbl_pengadaan where id_bahan='$id_bahan' and kategori='lama' and status_pengadaan='Sesuai' ");
		return $query;
	}	

//queri untuk penambahan

	function buat_kode(){    
		$query = $this->db->query("SELECT RIGHT(kode_pengadaan,3) AS kode FROM tbl_alkes  ORDER BY id_alat DESC LIMIT 1");
		  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){       
		  //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->kode) + 1;     
		  }else{   
		  //jika kode belum ada      
		  $kode = 1;     
		  }
		  $kodemax = str_pad($kode, STR_PAD_LEFT);    
		  $kodejadi = $kodemax;     
		  return $kodejadi;  
		}	

	public function Tampil_data_pengadaan_alat()
	{
		$query = $this->db->query("SELECT * FROM  tbl_pengadaan where jenis_pengadaan='Alat'");
		return $query;
	}

    public function tampil_alat($id_alat)
	{
		$query = $this->db->query("SELECT * FROM  tbl_alkes where id_alat='$id_alat'");
		return $query;
	}

    public function tampil_bahan($id_bahan)
	{
		$query = $this->db->query("SELECT * FROM  tbl_bahan where id_bahan='$id_bahan'");
		return $query;
	}
	
	//data alkes pengadaan baru
	function Simpan_data_alkes_baru(){
		$id_lab=$this->db->escape_str($this->input->post('id_lab'));
		$nama=$this->db->escape_str($this->input->post('nama'));
		$jumlah=$this->db->escape_str($this->input->post('jumlah'));
		$tgl_peroleh=$this->db->escape_str($this->input->post('tgl_peroleh'));
		$jenis_alat=$this->db->escape_str($this->input->post('jenis_alat'));
		$ukuran=$this->db->escape_str($this->input->post('ukuran'));
		$tipe_merk=$this->db->escape_str($this->input->post('tipe_merk'));
		$keterangan_alkes=$this->db->escape_str($this->input->post('keterangan_alkes'));
		$kode_pengadaan=$this->db->escape_str($this->input->post('kode_pengadaan'));
		$status_pengadaan=$this->db->escape_str($this->input->post('status_pengadaan'));
		$sql=$this->db->query("
		INSERT INTO `tbl_alkes` (
			`id_alat`,
			`id_lab`,
			`nama`,
			`jumlah`,
			`tgl_peroleh`,
			`jenis_alat`,
			`ukuran`,
			`tipe_merk`,
			`keterangan_alkes`,
			`visible`,
			`kode_pengadaan`,
			`status`
			
		  )
		  VALUES
			(
			  '',
			  '$id_lab',
			  '$nama',
			  '$jumlah',
			  '$tgl_peroleh',
			  '$jenis_alat',
			  '$ukuran',
			  '$tipe_merk',
			  '$keterangan_alkes',
			  '',
			  '$kode_pengadaan',
			  '$status_pengadaan'
			);
		");
	return $sql ;	
	}

function Ubah_alat_baru(){
		$id_alat=$this->db->escape_str($this->input->post('id_alat'));
		$nama=$this->db->escape_str($this->input->post('nama'));
		$jumlah=$this->db->escape_str($this->input->post('jumlah'));
		$keterangan_alkes=$this->db->escape_str($this->input->post('keterangan_pengadaan'));
		$status_pengadaan=$this->db->escape_str($this->input->post('status_pengadaan'));
		$sql=$this->db->query("
		UPDATE
		`tbl_alkes`
		SET
			`nama` = '$nama',
			`jumlah` = '$jumlah',
			`keterangan_alkes` = '$keterangan_alkes',
			`status` = '$status_pengadaan'

		WHERE `id_alat` = '$id_alat';
		");
	return $sql ;	
	}



function Ubah_pengadaan_alat_baru(){
		$id_alat=$this->db->escape_str($this->input->post('id_alat'));
		$id_pengadaan=$this->db->escape_str($this->input->post('id_pengadaan'));
		//$nama=$this->db->escape_str($this->input->post('nama'));
		$jumlah=$this->db->escape_str($this->input->post('jumlah'));
		$keterangan_alkes=$this->db->escape_str($this->input->post('keterangan_pengadaan'));
		$status_pengadaan=$this->db->escape_str($this->input->post('status_pengadaan'));
		$sql=$this->db->query("
		UPDATE
		`tbl_pengadaan`
	  	SET
		`jumlah_pengadaan` = '$jumlah',
		`keterangan_pengadaan` = '$keterangan_alkes',
		`status_pengadaan` = '$status_pengadaan'
	  	WHERE id_pengadaan='$id_pengadaan'  and `id_alat` = '$id_alat';
		");
	return $sql ;	
	}	

	function Ubah_pengadaan_alat_lama(){
		$id_pengadaan=$this->db->escape_str($this->input->post('id_pengadaan'));
		$id_alat=$this->db->escape_str($this->input->post('id_alat'));
		//$nama=$this->db->escape_str($this->input->post('nama'));
		$jumlah=$this->db->escape_str($this->input->post('jumlah'));
		$keterangan_alkes=$this->db->escape_str($this->input->post('keterangan_alkes'));
		$status_pengadaan=$this->db->escape_str($this->input->post('status_pengadaan'));
		$sql=$this->db->query("
		UPDATE
		`tbl_pengadaan`
	  	SET
		`jumlah_pengadaan` = '$jumlah',
		`keterangan_pengadaan` = '$keterangan_alkes',
		`status_pengadaan` = '$status_pengadaan'
	  	WHERE id_pengadaan='$id_pengadaan'  and `id_alat` = '$id_alat'  ;
		");
	return $sql ;	
	}
	
	

	function Ubah_bahan_baru(){
		$id_bahan=$this->db->escape_str($this->input->post('id_bahan'));
		$nama_bahan=$this->db->escape_str($this->input->post('nama_bahan'));
		$merk=$this->db->escape_str($this->input->post('merk'));
		$stok_awal=$this->db->escape_str($this->input->post('stok_awal'));
		//$keterangan_pengadaan=$this->db->escape_str($this->input->post('keterangan_pengadaan'));
		$status_pengadaan=$this->db->escape_str($this->input->post('status_pengadaan'));
		$sql=$this->db->query("
		UPDATE`tbl_bahan`
		SET
		`nama_bahan` = '$nama_bahan',
		`merk` = '$merk',
		`stok_awal` = '$stok_awal',
		`status` = '$status_pengadaan'
		WHERE `id_bahan` = '$id_bahan';
		");
	return $sql ;	
	}	


	function Ubah_pengadaan_bahan_baru(){
		$id_bahan=$this->db->escape_str($this->input->post('id_bahan'));
		//$nama=$this->db->escape_str($this->input->post('nama'));
		$jumlah=$this->db->escape_str($this->input->post('stok_awal'));
		$keterangan_pengadaan=$this->db->escape_str($this->input->post('keterangan_pengadaan'));
		$status_pengadaan=$this->db->escape_str($this->input->post('status_pengadaan'));
		$sql=$this->db->query("
		UPDATE
		`tbl_pengadaan`
	  	SET
		`jumlah_pengadaan` = '$jumlah',
		`keterangan_pengadaan` = '$keterangan_pengadaan',
		`status_pengadaan` = '$status_pengadaan'
	  	WHERE `id_bahan` = '$id_bahan';
		");
	return $sql ;	
	}	
	
	function Ubah_pengadaan_bahan_lama(){
		$id_bahan=$this->db->escape_str($this->input->post('id_bahan'));
		//$nama=$this->db->escape_str($this->input->post('nama'));
		$jumlah=$this->db->escape_str($this->input->post('stok_awal'));
		$keterangan_pengadaan=$this->db->escape_str($this->input->post('keterangan_pengadaan'));
		$status_pengadaan=$this->db->escape_str($this->input->post('status_pengadaan'));
		$sql=$this->db->query("
		UPDATE
		`tbl_pengadaan`
	  	SET
		`jumlah_pengadaan` = '$jumlah',
		`keterangan_pengadaan` = '$keterangan_pengadaan',
		`status_pengadaan` = '$status_pengadaan'
	  	WHERE `id_bahan` = '$id_bahan';
		");
	return $sql ;	
	}	
	



	
	public function ambil_alkes($kode_pengadaan)
	{
		$query = $this->db->query("SELECT * FROM  tbl_alkes where kode_pengadaan='$kode_pengadaan'");
		return $query;
	}

	public function Hapus_alat_baru($id_alat)
	{
		$query = $this->db->query("DELETE FROM `tbl_alkes` WHERE `id_alat` = '$id_alat'");
		return $query;
	}

	public function Hapus_pengadaan_alat_baru($id_alat)
	{
		$query = $this->db->query("DELETE FROM `tbl_pengadaan` WHERE `id_alat` = '$id_alat'");
		return $query;
	}

	public function Hapus_pengadaan_alat_lama($id_pengadaan,$id_alat)
	{
		$query = $this->db->query("DELETE FROM `tbl_pengadaan` WHERE id_pengadaan='$id_pengadaan' and `id_alat` = '$id_alat'");
		return $query;
	}

	//data alkes pengadaan baru




//hapus bahan
	public function Hapus_bahan_baru($id_bahan)
	{
		$query = $this->db->query("DELETE FROM `tbl_bahan` WHERE `id_bahan` = '$id_bahan'");
		return $query;
	}
	public function Hapus_pengadaan_bahan_baru($id_bahan)
	{
		$query = $this->db->query("DELETE FROM `tbl_pengadaan` WHERE `id_bahan` = '$id_bahan'");
		return $query;
	}
	public function Hapus_pengadaan_bahan_lama($id_bahan)
	{
		$query = $this->db->query("DELETE FROM `tbl_pengadaan` WHERE `id_bahan` = '$id_bahan'");
		return $query;
	}
//hapus bahan


	//data pengadaan
	function Simpan_pengadaan_baru($id_alat){
		$jumlah_pengadaan=$this->db->escape_str($this->input->post('jumlah'));
		$tgl_pengadaan=$this->db->escape_str($this->input->post('tgl_peroleh'));
		$keterangan_pengadaan=$this->db->escape_str($this->input->post('keterangan_alkes'));
		$status_pengadaan=$this->db->escape_str($this->input->post('status_pengadaan'));
		$sql=$this->db->query("
		INSERT INTO `tbl_pengadaan` (
			`id_pengadaan`,
			`id_alat`,
			`jenis_pengadaan`,
			`jumlah_pengadaan`,
			`tgl_pengadaan`,
			`keterangan_pengadaan`,
			`status_pengadaan`,
			`kategori`
		  )
		  VALUES
			(
			  '',
			  '$id_alat',
			  'Alat',
			  '$jumlah_pengadaan',
			  '$tgl_pengadaan',
			  '$keterangan_pengadaan',
			  '$status_pengadaan',
			  'baru'
			);
		");
	return $sql ;	
	}

	function Simpan_pengadaan_lama(){
		$id_alat=$this->db->escape_str($this->input->post('id_alat'));
		$jumlah_pengadaan=$this->db->escape_str($this->input->post('jumlah'));
		$tgl_pengadaan=$this->db->escape_str($this->input->post('tgl_peroleh'));
		$keterangan_pengadaan=$this->db->escape_str($this->input->post('keterangan_alkes'));
		$status_pengadaan=$this->db->escape_str($this->input->post('status_pengadaan'));
		$sql=$this->db->query("
		INSERT INTO `db_inventaris`.`tbl_pengadaan` (
			`id_pengadaan`,
			`id_alat`,
			`jenis_pengadaan`,
			`jumlah_pengadaan`,
			`tgl_pengadaan`,
			`keterangan_pengadaan`,
			`status_pengadaan`,
			`kategori`
		  )
		  VALUES
			(
			  '',
			  '$id_alat',
			  'Alat',
			  '$jumlah_pengadaan',
			  '$tgl_pengadaan',
			  '$keterangan_pengadaan',
			  '$status_pengadaan',
			  'lama'
			);
		");
	return $sql ;	
	}
	//data pengadaan

	//data bahan
	function buat_kode2(){    
		$query = $this->db->query("SELECT RIGHT(kode_pengadaan,3) AS kode FROM tbl_bahan  ORDER BY id_bahan DESC LIMIT 1");
		  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){       
		  //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->kode) + 1;     
		  }else{   
		  //jika kode belum ada      
		  $kode = 1;     
		  }
		  $kodemax = str_pad($kode, STR_PAD_LEFT);    
		  $kodejadi = $kodemax;     
		  return $kodejadi;  
		}

	public function Tampil_data_pengadaan_bahan()
	{
		$query = $this->db->query("SELECT * FROM  tbl_pengadaan where jenis_pengadaan='Bahan'");
		return $query;
	}

	function Simpan_bahan_baru(){
		$kode_pengadaan=$this->db->escape_str($this->input->post('kode_pengadaan2'));
		$id_lab=$this->db->escape_str($this->input->post('id_lab'));
		$nama_bahan=$this->db->escape_str($this->input->post('nama_bahan'));
		$merk=$this->db->escape_str($this->input->post('merk'));
		$stok_awal=$this->db->escape_str($this->input->post('stok_awal'));
		$satuan=$this->db->escape_str($this->input->post('satuan'));
		$status_pengadaan=$this->db->escape_str($this->input->post('status_pengadaan'));
		$tgl=Date("Y-m-d");
		$sql=$this->db->query("
		INSERT INTO `tbl_bahan` (
			`id_bahan`,
			`id_lab`,
			`nama_bahan`,
			`merk`,
			`stok_awal`,
			`satuan`,
			`visible`,
			`kode_pengadaan`,
			`tgl`,
			`status`
		  )
		  VALUES
			(
			  '',
			  '$id_lab',
			  '$nama_bahan',
			  '$merk',
			  '$stok_awal',
			  '$satuan',
			  'Y',
			  '$kode_pengadaan',
			  '$tgl',
			  '$status_pengadaan'
			);
		");
	return $sql ;	
	}
	public function ambil_bahan($kode_pengadaan)
	{
		$query = $this->db->query("SELECT * FROM  tbl_bahan where kode_pengadaan='$kode_pengadaan'");
		return $query;
	}	
	
	function Simpan_pengadaan_bahan_baru($id_bahan){
		$stok_awal=$this->db->escape_str($this->input->post('stok_awal'));
		$tgl_peroleh=$this->db->escape_str($this->input->post('tgl_peroleh'));
		$keterangan_pengadaan=$this->db->escape_str($this->input->post('keterangan_bahan'));
		$status_pengadaan=$this->db->escape_str($this->input->post('status_pengadaan'));
		$sql=$this->db->query("
		INSERT INTO `tbl_pengadaan` (
			`id_pengadaan`,
			`id_bahan`,
			`jenis_pengadaan`,
			`jumlah_pengadaan`,
			`tgl_pengadaan`,
			`keterangan_pengadaan`,
			`status_pengadaan`,
			`kategori`
		  )
		  VALUES
			(
			  '',
			  '$id_bahan',
			  'Bahan',
			  '$stok_awal',
			  '$tgl_peroleh',
			  '$keterangan_pengadaan',
			  '$status_pengadaan',
			  'baru'
			);
		");
	return $sql ;	
	}
	function Simpan_bahan_lama(){
		$id_bahan=$this->db->escape_str($this->input->post('id_bahan2'));
		$stok_awal=$this->db->escape_str($this->input->post('stok_awal'));
		$tgl_peroleh=$this->db->escape_str($this->input->post('tgl_peroleh'));
		$keterangan_bahan=$this->db->escape_str($this->input->post('keterangan_bahan'));
		$status_pengadaan=$this->db->escape_str($this->input->post('status_pengadaan'));
		$sql=$this->db->query("
		INSERT INTO `tbl_pengadaan` (
			`id_pengadaan`,
			`id_bahan`,
			`jenis_pengadaan`,
			`jumlah_pengadaan`,
			`tgl_pengadaan`,
			`keterangan_pengadaan`,
			`status_pengadaan`,
			`kategori`
		  )
		  VALUES
			(
			  '',
			  '$id_bahan',
			  'Bahan',
			  '$stok_awal',
			  '$tgl_peroleh',
			  '$keterangan_bahan',
			  '$status_pengadaan',
			  'lama'
			);
		");
	return $sql ;	
	}
}
