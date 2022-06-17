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
		<h3><strong>Laporan Data Pengadaan <?php echo $this->uri->segment('5'); ?></strong></h3>
	</div>
	<table border="1" cellpadding="5" cellspacing="0" width="100%">
		<thead>
		<tr>
											<th>No</th>
											<th>Nama Alat / Bahan</th>
											<th>Jenis pengadaan</th>
											<th>Jumlah Pengadaan</th>
											<th>Tanggal</th>
										</tr>
		</thead>
        <?php $no=1; foreach ($tampil_lap_all_pengadaan as $al) : ?>

										
<tbody>
  
      <tr class="odd gradeX">
        <td align="center"><?= $no++; ?>.</td>
        <td>
          <?php if($al->jenis_pengadaan=='Alat'){?>
              <?php $id_alat=$al->id_alat; ?>
              <?php $tampil_data_alat=$this->M_pengadaan->tampil_alat($id_alat)->row(); ?>
              <?php echo $tampil_data_alat->nama; ?>
          <?php }else if($al->jenis_pengadaan=='Bahan'){ ?>  
              <?php  $id_bahan=$al->id_bahan; ?>
              <?php $tampil_data_bahan=$this->M_pengadaan->tampil_bahan($id_bahan)->row(); ?>
              <?php echo $tampil_data_bahan->nama_bahan; ?>
          <?php } ?>  
        </td>
        <td>
        <?php echo $al->jenis_pengadaan; ?>
        </td>
        <td>
        <?php echo $al->jumlah_pengadaan; ?>
        </td>
        <td>
        <?php echo $al->tgl_pengadaan; ?>
        </td>
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