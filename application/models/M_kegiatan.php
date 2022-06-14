
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kegiatan extends CI_Model {

	public function get_kegiatan_join()
	{
				$query = $this->db->query('SELECT * FROM tbl_kegiatan 
					INNER JOIN tbl_lab ON tbl_kegiatan.id_lab = tbl_lab.id_lab ORDER BY tbl_kegiatan.id_kegiatan DESC');
				return $query;
	}
	public function get_where($where, $table)
	{
		return $data['kegiatan'] = $this->db->get_where($table, $where);
	}
	public function simpandata()
	{
		$data = array( 
			'nama_kegiatan'=>$this->input->post('nama_kegiatan'),
			'id_lab'=>$this->input->post('id_lab'),
			'tgl'=>$this->input->post('tgl'),
			'ket'=>$this->input->post('ket'),


		);
		$this->db->insert('tbl_kegiatan',$data);
	
	}
	public function edit($id_kegiatan)
	{
		$data = array(
			'nama_kegiatan' => $this->input->post('nama_kegiatan'),
			'id_lab' => $this->input->post('id_lab'),
			'tgl' => $this->input->post('tgl'),
			'ket' => $this->input->post('ket'),
		);
		$this->db->where('id_kegiatan', $id_kegiatan);
		$this->db->update('tbl_kegiatan', $data);

	}
	public function hapus($id_kegiatan)
    {
        // $this->db->where('id', $id);
        $this->db->delete('tbl_kegiatan', ['id_kegiatan' => $id_kegiatan]);
    }
}
