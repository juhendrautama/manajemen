<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Laporan Data Laboratorium</title>
    <base href="<?php echo base_url(); ?>" />	
</head>
<body onload="window.print()">
	<div align="center">
		<img src="assets/image/logo.jpg" width="70" height="70" alt="logo" /><br /><br />
		<span style="font-size:20pt;"><strong>JURUSAN FARMASI POLITEKNIK KESEHATAN KEMENKES JAMBI</strong></span><br />
		Jl. H. Agus Salim No.23, Paal Lima, Kec. Kota Baru, Kota Jambi, Jambi 36128<br />
		Email : admin@poltekkes-jambi.com, Telephone : 0741) 40931 <hr />
		<h3><strong>Laporan Data Alat Kesehatan</strong></h3>
	</div>
	<table border="1" cellpadding="5" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>No</th>
				<th>Laboratorium</th>
				<th>Kuota</th>
				<th>Jumlah Alat</th>
				<th>Keterangan</th>
			</tr>
		</thead>
                
                <?php $no=1; foreach ($alkes_join_laporan as $al) : ?>
        
                                                
        <tbody>
          
              <tr class="odd gradeX">
                <td align="center"><?= $no++; ?>.</td>
                <td>
                  <label>Nama :</label> <?= $al->nama ?> <br />
                  <label>Jenis :</label> <?= $al->jenis_alat; ?> <br />
                  <label>Ukuran :</label> <?= $al->ukuran; ?> <br />
                  <label>Tipe/Merek :</label> <?= $al->tipe_merk; ?> <br />
                </td>
                <td><?php
        
                $dipinjam = 0;
                $tot_now = $al->jumlah;
                $this->db->where('id_alat', $al->id_alat);
                $this->db->where('id_lab', $al->id_lab);
                $this->db->where('status', 'Sesuai');
                $query = $this->db->get('tbl_peminjaman');
                if ($query->num_rows() > 0) {
                  $dipinjam = $query->row()->jumlah;
                }
                $sisa = $tot_now - $dipinjam;
                $id_alat=$al->id_alat;
                $data_alat=$this->M_pengadaan->tampil_alat_alkes($id_alat)->row();
                $jum_pengadaan='';
                if(empty($data_alat->total_alat)){
                  $jum_pengadaan='0';
        
                }else{
                  $jum_pengadaan=$data_alat->total_alat;
                }
                
                echo $sisa+$jum_pengadaan;
                ?></td>
                <td><?= $al->tgl_peroleh; ?></td>
                <td><?= $al->keterangan_alkes; ?></td>
               
              </tr>
        
        </tbody>
        <?php endforeach; ?>
      
	</table>
	<table style="margin-top:30px;">
		<tr>
			<td width="80%"></td>
			<td align="center">
				Jambi, <?php echo date('d-m-Y')?><br /><br /><br /><br /><br />
				(....................................)
		</td>
		</tr>
	</table>
</body>
</html>