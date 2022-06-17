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
		<h3><strong>Laporan Data Pemakaian Bahan</strong></h3>
	</div>
	<table border="1" cellpadding="5" cellspacing="0" width="100%">
		<thead>
        <tr>
											<th>No</th>
											<th>Bahan</th>
											<th>Tanggal Pemakaian</th>
											<th>Stok Awal</th>
											<th>Jumlah Pakai</th>
										</tr>
		</thead>
                
        <?php $no=1; foreach ($pbahan_join as $pb) : ?>
									<tbody>
										
										
												<tr class="odd gradeX">
													<td align="center"><?php echo $no++; ?>.</td>
													<td><?php echo $pb->nama_bahan; ?></td>
													<td><?php echo $pb->tgl_pemakaian; ?></td>
													<td><?php echo $pb->stok_awal_bahan.' '.$pb->satuan ?></td>
													<td><?php echo $pb->jumlah_pakai.' '.$pb->satuan; ?></td>
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