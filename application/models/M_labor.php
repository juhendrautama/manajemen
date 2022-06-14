
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_labor extends CI_Model {

	public function get_lab ()
	{
	$query=$this->db->query("select	* FROM tbl_lab ");
	
	return $query;
	}
	public function get_where($where, $table)
	{
		return $data['labor'] = $this->db->get_where($table, $where);
	}
	public function simpandata()
	{

		$data = array( 
			'nama_lab'=>$this->input->post('nama_lab'),
			'kuota'=>$this->input->post('kuota'),
			'keterangan'=>$this->input->post('keterangan'),
		);
		$this->db->insert('tbl_lab',$data);
	}
	public function edit($id_lab)
	{
		$data = array(
			'nama_lab' => $this->input->post('nama_lab'),
			'kuota' => $this->input->post('kuota'),
			'keterangan' => $this->input->post('keterangan'),
			
		);
		$this->db->where('id_lab', $id_lab);
		$this->db->update('tbl_lab', $data);

	}
	public function hapus($id_lab)
    {
        // $this->db->where('id', $id);
        $this->db->delete('tbl_lab', ['id_lab' => $id_lab]);
    }


}