
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_karya extends CI_Model {

	public function get_karya_join()
	{
			
				$query = $this->db->query('SELECT * FROM tbl_hasil_karya INNER JOIN tbl_lab ON tbl_hasil_karya.id_lab = tbl_lab.id_lab ORDER BY tbl_hasil_karya.id_lab DESC');
				return $query;
	}

	public function get_where($where, $table)
	{
		return $data['karya'] = $this->db->get_where($table, $where);
	}

	public function simpandata()
	{
		$data = array( 
			'nama'=>$this->input->post('nama'),
			'pembuat'=>$this->input->post('pembuat'),
			'id_lab'=>$this->input->post('id_lab'),
			'tgl_input'=>$this->input->post('tgl_input'),

		);
		$this->db->insert('tbl_hasil_karya',$data);
	}

	public function edit($id_karya)
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'pembuat' => $this->input->post('pembuat'),
			'id_lab' => $this->input->post('id_lab'),
			'tgl_input' => $this->input->post('tgl_input'),
			
		);
		$this->db->where('id_karya', $id_karya);
		$this->db->update('tbl_hasil_karya', $data);

	}
	public function hapus($id_karya)
    {
        // $this->db->where('id', $id);
        $this->db->delete('tbl_hasil_karya', ['id_karya' => $id_karya]);
    }
}
