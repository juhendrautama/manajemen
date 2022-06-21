
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pbahan extends CI_Model {
	//laporan
	public function get_pbahan_join_lap()
	{
		$tgl1=$this->db->escape_str($this->input->post('tgl1'));
		$tgl2=$this->db->escape_str($this->input->post('tgl2'));	
				$query = $this->db->query("SELECT * FROM tbl_pemakaian_bahan 
					JOIN tbl_lab ON tbl_pemakaian_bahan.id_lab = tbl_lab.id_lab 
					JOIN tbl_bahan ON tbl_pemakaian_bahan.id_bahan = tbl_bahan.id_bahan WHERE tgl_pemakaian BETWEEN '$tgl1' AND '$tgl2'
					ORDER BY tbl_pemakaian_bahan.id_pemakaian DESC");
				return $query;
	}

	public function get_pbahan_join_lap_cetak($tgl1,$tgl2)
	{
				$query = $this->db->query("SELECT * FROM tbl_pemakaian_bahan 
					JOIN tbl_lab ON tbl_pemakaian_bahan.id_lab = tbl_lab.id_lab 
					JOIN tbl_bahan ON tbl_pemakaian_bahan.id_bahan = tbl_bahan.id_bahan WHERE tgl_pemakaian BETWEEN '$tgl1' AND '$tgl2'
					ORDER BY tbl_pemakaian_bahan.id_pemakaian DESC");
				return $query;
	}
	//laporan

	public function tampil_bahan_id($id_bahan){
		$query = $this->db->query("SELECT * FROM tbl_bahan where id_bahan='$id_bahan'");
		return $query;
}



	public function get_pbahan_join()
	{
			
				$query = $this->db->query('SELECT * FROM tbl_pemakaian_bahan 
					JOIN tbl_lab ON tbl_pemakaian_bahan.id_lab = tbl_lab.id_lab 
					JOIN tbl_bahan ON tbl_pemakaian_bahan.id_bahan = tbl_bahan.id_bahan
					ORDER BY tbl_pemakaian_bahan.id_pemakaian DESC');
				return $query;
	}
	public function get_where($where, $table)
	{
		return $data['pbahan'] = $this->db->get_where($table, $where);
	}

	public function edit($id_pemakaian)
	{

		$jumlah_pakai_baru = $this->input->post('jumlah_pakai_baru');
		if ($jumlah_pakai_baru != NULL ){
			$stok_awal_bahan = $this->input->post('stok_awal_bahan');
			$stok_baru = $stok_awal_bahan - $jumlah_pakai_baru;
			$jumlah_pakai_sekarang = $this->input->post('jumlah_pakai_lama');
			$jumlah_pakai_total = $jumlah_pakai_baru + $jumlah_pakai_sekarang;
			$data = array(
		'id_lab' => $this->input->post('id_lab'),
		'id_bahan' => $this->input->post('id_bahan'),
		'tgl_pemakaian' => $this->input->post('tgl_pemakaian'),
		'jumlah_pakai' => $jumlah_pakai_total,
		'stok_awal_bahan' => $stok_baru,
	);
		$this->db->where('id_pemakaian', $id_pemakaian);
		$this->db->update('tbl_pemakaian_bahan', $data);
		}

		if ($jumlah_pakai_baru == NULL){
		$data = array(
		'id_lab' => $this->input->post('id_lab'),
		'id_bahan' => $this->input->post('id_bahan'),
		'tgl_pemakaian' => $this->input->post('tgl_pemakaian'),
		);
		$this->db->where('id_pemakaian', $id_pemakaian);
		$this->db->update('tbl_pemakaian_bahan', $data);
		}	
	}	

	public function simpandata()
	{
		$id_bahan = $_POST['id_bahan'];
		$data = array( 
			'id_lab'=>get_data('tbl_bahan','id_bahan',$id_bahan,'id_lab'),
			'id_bahan'=>$this->input->post('id_bahan'),
			'tgl_pemakaian'=>$this->input->post('tgl_pemakaian'),
			'stok_awal_bahan'=>get_data('tbl_bahan','id_bahan',$id_bahan,'stok_awal'),
			'jumlah_pakai'=>$this->input->post('jumlah_pakai'),


				);
		$this->db->insert('tbl_pemakaian_bahan',$data);
	
	}

	public function hapus($id_pemakaian)
    {
       
        $this->db->delete('tbl_pemakaian_bahan', ['id_pemakaian' => $id_pemakaian]);
    }



}