
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_alkes extends CI_Model {
//laporan
function alkes_join_laporan(){
	$tgl1=$this->db->escape_str($this->input->post('tgl1'));
	$tgl2=$this->db->escape_str($this->input->post('tgl2'));
	$sql=$this->db->query("SELECT * FROM tbl_alkes JOIN tbl_lab ON tbl_alkes.id_lab = tbl_lab.id_lab WHERE tgl_peroleh BETWEEN '$tgl1' AND '$tgl2' and status='Sesuai' ORDER BY tbl_alkes.id_alat DESC");
	return $sql;
}
function cetak_laporan($tgl1,$tgl2){
	$sql=$this->db->query("SELECT * FROM tbl_alkes JOIN tbl_lab ON tbl_alkes.id_lab = tbl_lab.id_lab WHERE tgl_peroleh BETWEEN '$tgl1' AND '$tgl2' and status='Sesuai' ORDER BY tbl_alkes.id_alat DESC");
	return $sql;
}
//laporan


	public function get_alkes_join()
	{
			
				$query = $this->db->query("SELECT * FROM tbl_alkes JOIN tbl_lab ON tbl_alkes.id_lab = tbl_lab.id_lab where status='Sesuai' ORDER BY tbl_alkes.id_alat DESC");
				return $query;
	}

	public function get_where($where, $table)
	{
		return $data['alkes'] = $this->db->get_where($table, $where);
	}

	public function simpandata()
	{
		$data = array( 
			'id_lab'=>$this->input->post('id_lab'),
			'nama'=>$this->input->post('nama'),
			'jumlah'=>$this->input->post('jumlah'),
			'tgl_peroleh'=>$this->input->post('tgl_peroleh'),
			'jenis_alat'=>$this->input->post('jenis_alat'),
			'ukuran' => $this->input->post('ukuran'),
			'tipe_merk'=>$this->input->post('tipe_merk'),
			'keterangan_alkes'=>$this->input->post('keterangan_alkes'),
			'status'=>'Sesuai',
		);
		$this->db->insert('tbl_alkes',$data);
	}
	public function edit($id_alat)
	{
		$data = array(
			'id_lab' => $this->input->post('id_lab'),
			'nama' => $this->input->post('nama'),
			'jumlah' => $this->input->post('jumlah'),
			'tgl_peroleh' => $this->input->post('tgl_peroleh'),
			'jenis_alat' => $this->input->post('jenis_alat'),
			'ukuran' => $this->input->post('ukuran'),
			'tipe_merk' => $this->input->post('tipe_merk'),
			'keterangan_alkes' => $this->input->post('keterangan_alkes'),
		);
		$this->db->where('id_alat', $id_alat);
		$this->db->update('tbl_alkes', $data);

	}
	public function hapus($id_alat)
    {
        // $this->db->where('id', $id);
        $this->db->delete('tbl_alkes', ['id_alat' => $id_alat]);
    }
}
