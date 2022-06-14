
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal extends CI_Model {

	public function get_jadwal_join()
	{
			
				$query = $this->db->query('SELECT * FROM tbl_jadwal
					JOIN tbl_lab ON tbl_jadwal.id_lab = tbl_lab.id_lab 
					JOIN tbl_laboran ON tbl_jadwal.id_laboran = tbl_laboran.id_laboran
					ORDER BY tbl_jadwal.id_jadwal DESC');
				return $query;
	}
	public function get_where($where, $table){
		return $data['jadwal'] = $this->db->get_where($table, $where);
	}
	public function simpandata()
	{
		$data = array( 
			'nama_jadwal'=>$this->input->post('nama_jadwal'),
			'id_lab'=>$this->input->post('id_lab'),
			'tgl'=>$this->input->post('tgl'),
			'jam'=>$this->input->post('jam'),
			'id_laboran'=>$this->input->post('id_laboran'),

		);
		$this->db->insert('tbl_jadwal',$data);
	}
	public function edit($id_jadwal)
	{
		$data = array(
			'nama_jadwal' => $this->input->post('nama_jadwal'),
			'id_lab' => $this->input->post('id_lab'),
			'tgl' => $this->input->post('tgl'),
			'jam' => $this->input->post('jam'),
			'id_laboran' => $this->input->post('id_laboran'),
		);
		$this->db->where('id_jadwal', $id_jadwal);
		$this->db->update('tbl_jadwal', $data);

	}
	public function hapus($id_jadwal)
    {
        // $this->db->where('id', $id);
        $this->db->delete('tbl_jadwal', ['id_jadwal' => $id_jadwal]);
    }
}
