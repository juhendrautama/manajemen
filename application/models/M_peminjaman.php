<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peminjaman extends CI_Model {
//laporan
public function get_peminjaman_join_lap()
{
	$tgl1=$this->db->escape_str($this->input->post('tgl1'));
	$tgl2=$this->db->escape_str($this->input->post('tgl2'));		
	$query = $this->db->query("SELECT * FROM tbl_peminjaman WHERE tgl BETWEEN '$tgl1' AND '$tgl2'");
	return $query;
}

public function get_peminjaman_join_lap_cetak($tgl1,$tgl2)
{		
	$query = $this->db->query("SELECT * FROM tbl_peminjaman WHERE tgl BETWEEN '$tgl1' AND '$tgl2'");
	return $query;
}
//laporan


//queri untuk cek data pengadaan berdasar kan id_alat
public function tampil_alat_id_alat($id_alat)
{
	$query = $this->db->query("SELECT * FROM  tbl_peminjaman where id_alat='$id_alat'");
	return $query;
}
//queri untuk cek data pengadaan berdasar kan id_alat

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

	public function edit2($id_peminjaman)
	{
		$data = array( 
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