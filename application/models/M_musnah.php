<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_musnah extends CI_Model {

	//laporan
	public function get_musnah_join_lap()
	{
		$tgl1=$this->db->escape_str($this->input->post('tgl1'));
		$tgl2=$this->db->escape_str($this->input->post('tgl2'));
				$query = $this->db->query("SELECT * FROM tbl_musnah 
					JOIN tbl_lab ON tbl_musnah.id_lab = tbl_lab.id_lab 
					JOIN tbl_alkes ON tbl_musnah.id_alat = tbl_alkes.id_alat where tgl_musnah BETWEEN '$tgl1' AND '$tgl2'
					ORDER BY tbl_musnah.id_musnah DESC");
				return $query;

	}

	public function get_musnah_join_lap_cetak($tgl1,$tgl2)
	{
				$query = $this->db->query("SELECT * FROM tbl_musnah 
					JOIN tbl_lab ON tbl_musnah.id_lab = tbl_lab.id_lab 
					JOIN tbl_alkes ON tbl_musnah.id_alat = tbl_alkes.id_alat where tgl_musnah BETWEEN '$tgl1' AND '$tgl2'
					ORDER BY tbl_musnah.id_musnah DESC");
				return $query;

	}
	//laporan

	public function get_musnah_join()
	{
			
				$query = $this->db->query('SELECT * FROM tbl_musnah 
					JOIN tbl_lab ON tbl_musnah.id_lab = tbl_lab.id_lab 
					JOIN tbl_alkes ON tbl_musnah.id_alat = tbl_alkes.id_alat
					ORDER BY tbl_musnah.id_musnah DESC');
				return $query;

	}
	public function get_where($where, $table)
	{
		return $data['musnah'] = $this->db->get_where($table, $where);
	}

	public function simpandata()
	{
		$id_alat = $_POST['id_alat'];
		$data = array( 
			'id_lab'=>get_data('tbl_alkes','id_alat',$id_alat,'id_lab'),
			'id_alat'=>$this->input->post('id_alat'),
			'tgl_musnah'=>$this->input->post('tgl_musnah'),
			'jumlah_musnah'=>$this->input->post('jumlah_musnah'),
			'sebab_musnah'=>$this->input->post('sebab_musnah'),

		);
		$this->db->insert('tbl_musnah',$data);
	}

	public function edit($id_musnah)
	{
		$data = array(
			'id_lab'=>$this->input->post('id_lab'),
			'id_alat'=>$this->input->post('id_alat'),
			'tgl_musnah'=>$this->input->post('tgl_musnah'),
			'jumlah_musnah'=>$this->input->post('jumlah_musnah'),
			'sebab_musnah'=>$this->input->post('sebab_musnah'),
			
		);
		$this->db->where('id_musnah', $id_musnah);
		$this->db->update('tbl_musnah', $data);

	}
	public function hapus($id_musnah)
    {
       
        $this->db->delete('tbl_musnah', ['id_musnah' => $id_musnah]);
    }

}