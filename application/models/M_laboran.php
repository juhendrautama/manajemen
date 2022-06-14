
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laboran extends CI_Model {


	public function get_laboran ()
	{
	return $this->db->get('tbl_laboran');
	}

	public function get_where($where, $table)
	{
		return $data['laboran'] = $this->db->get_where($table, $where);
	}
	public function simpandata()
	{
		$data = array( 
			'nama'=>$this->input->post('nama'),
			'jk'=>$this->input->post('jk'),
			'alamat'=>$this->input->post('alamat'),
			'no_telp'=>$this->input->post('no_telp'),
			'semester'=>$this->input->post('semester'),

		);
		$this->db->insert('tbl_laboran',$data);
	}
	public function edit($id_laboran)
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'jk' => $this->input->post('jk'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp'),
			'semester' => $this->input->post('semester'),
			
		);
		$this->db->where('id_laboran', $id_laboran);
		$this->db->update('tbl_laboran', $data);

	}
	public function hapus($id_laboran)
    {
        // $this->db->where('id', $id);
        $this->db->delete('tbl_laboran', ['id_laboran' => $id_laboran]);
    }
}
