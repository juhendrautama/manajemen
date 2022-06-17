
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bahan extends CI_Model {

	//laporan
function get_bahan_join_laporan(){
	$tgl1=$this->db->escape_str($this->input->post('tgl1'));
	$tgl2=$this->db->escape_str($this->input->post('tgl2'));
	$sql=$this->db->query("SELECT * FROM tbl_bahan JOIN tbl_lab ON tbl_bahan.id_lab = tbl_lab.id_lab WHERE tgl BETWEEN '$tgl1' AND '$tgl2' and status='Sesuai' ORDER BY tbl_bahan.id_bahan DESC");
	return $sql;
}
function cetak_laporan($tgl1,$tgl2){
	$sql=$this->db->query("SELECT * FROM tbl_bahan JOIN tbl_lab ON tbl_bahan.id_lab = tbl_lab.id_lab WHERE tgl BETWEEN '$tgl1' AND '$tgl2' and status='Sesuai' ORDER BY tbl_bahan.id_bahan DESC");
	return $sql;
}
//laporan

	public function get_bahan_join()
	{
			
				$query = $this->db->query("SELECT * FROM tbl_bahan JOIN tbl_lab ON tbl_bahan.id_lab = tbl_lab.id_lab where status='Sesuai' ORDER BY tbl_bahan.id_bahan DESC");
				return $query;
	}

	public function get_where($where, $table)
	{
		return $data['bahan'] = $this->db->get_where($table, $where);
	}

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
	public function simpandata()
	{
		$data = array( 
			'id_lab'=>$this->input->post('id_lab'),
			'nama_bahan'=>$this->input->post('nama_bahan'),
			'merk'=>$this->input->post('merk'),
			'stok_awal'=>$this->input->post('stok_awal'),
			'satuan'=>$this->input->post('satuan'),
			'visible'=>'Y',
			'kode_pengadaan'=>$this->input->post('kode_pengadaan2'),
			'tgl'=>Date("Y-m-d"),
			'status'=>'Sesuai',

		);
		$this->db->insert('tbl_bahan',$data);
	}
}
