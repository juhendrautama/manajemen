
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bahan extends CI_Model {

	public function get_bahan_join()
	{
			
				$query = $this->db->query('SELECT * FROM tbl_bahan JOIN tbl_lab ON tbl_bahan.id_lab = tbl_lab.id_lab ORDER BY tbl_bahan.id_bahan DESC');
				return $query;
	}

	public function get_where($where, $table)
	{
		return $data['bahan'] = $this->db->get_where($table, $where);
	}


	public function simpandata()
	{
		$data = array( 
			'id_lab'=>$this->input->post('id_lab'),
			'nama_bahan'=>$this->input->post('nama_bahan'),
			'merk'=>$this->input->post('merk'),
			'stok_awal'=>$this->input->post('stok_awal'),
			'satuan'=>$this->input->post('satuan'),

		);
		$this->db->insert('tbl_bahan',$data);
	}
}
