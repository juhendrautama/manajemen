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
		<h3><strong>Laporan Data Peminjaman</strong></h3>
	</div>
	<table border="1" cellpadding="5" cellspacing="0" width="100%">
		<thead>
		<tr>
											<th>No</th>
											<th>Nama Alat</th>
											<th>Jumlah</th>
											<th>Tanggal</th>
											<th>Status</th>
										</tr>
		</thead>
        <?php $no=1; foreach ($get_peminjaman_join_lap_cetak as $peminjaman) : ?>

<tbody>
  
      <tr class="odd gradeX">
        <td align="center"><?php echo $no++; ?>.</td>
        <td>
          <?php  $id_alat=$peminjaman->id_alat; ?>
          <?php $tampil_alat=$this->M_peminjaman->tampil_alat($id_alat)->row(); 
           echo	$tampil_alat->nama;
          ?>
        </td>
       
        <td><?php echo $peminjaman->jumlah; ?></td>
        <td><?php echo $peminjaman->tgl; ?></td>
        <td><?php echo $peminjaman->status; ?></td>
      
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