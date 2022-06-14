<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_musnah extends CI_Model {

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
		$data = array( 
			'id_lab'=>$this->input->post('id_lab'),
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