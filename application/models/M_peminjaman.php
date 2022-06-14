<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peminjaman extends CI_Model {

	public function get_peminjaman_join()
	{
			
				$query = $this->db->query('SELECT * FROM tbl_peminjaman');
				return $query;
	}

	public function tampil_alat($id_alat)
	{
			
				$query = $this->db->query("SELECT * FROM tbl_alkes where id_alat='$id_alat'");
				return $query;
	}

	public function tampil_lab($id_lab)
	{
			
				$query = $this->db->query("SELECT * FROM tbl_lab where id_lab='$id_lab'");
				return $query;
	}


	public function get_where($where, $table)
	{
		return $data['peminjaman'] = $this->db->get_where($table, $where);
	}
	public function simpandata()
	{
		$id_alat = $_POST['id_alat'];
		$data = array( 
			'id_alat'=>$this->input->post('id_alat'),
			'id_lab'=>get_data('tbl_alkes','id_alat',$id_alat,'id_lab'),
			'jumlah'=>$this->input->post('jumlah'),
			'tgl'=>$this->input->post('tgl'),
			'status'=>$this->input->post('status'),

		);
		$this->db->insert('tbl_peminjaman',$data);
	}
	public function edit($id_peminjaman)
	{
		$data = array( 
			'id_alat'=>$this->input->post('id_alat'),
			'id_lab'=>$this->input->post('id_lab'),
			'jumlah'=>$this->input->post('jumlah'),
			'tgl'=>$this->input->post('tgl'),
			'status'=>$this->input->post('status'),

		);
		$this->db->where('id_peminjaman', $id_peminjaman);
		$this->db->update('tbl_peminjaman', $data);

	}
	public function hapus($id_peminjaman)
    {
        // $this->db->where('id', $id);
        $this->db->delete('tbl_peminjaman', ['id_peminjaman' => $id_peminjaman]);
    }
}