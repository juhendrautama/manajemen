<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Alat Kesehatan</title>
</head>
<body>
	<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Edit Alat Kesehatan</strong> <a href="../../../alkes" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a></h3>
						</div>
						<div class="panel-body">

							<?= form_open(base_url('proses_edit_alkes/'.$alkes->id_alat)); ?>

							<form method="POST" action="">
							<div class="form-group">
								<label>Nama Laboratorium</label>
								<select type="text" class="form-control" name="id_lab" value="<?= $alkes->id_lab; ?>" required placeholder="Nama Alat Kesehatan">
									<?php foreach ($labor as $lab ): ?>
										<option value="<?= $lab->id_lab; ?>" ><?php echo $lab->nama_lab; ?></option>
										
									<?php endforeach; ?>
								</select>
							   </div>

							  <div class="form-group">
								<label>Nama Alkes</label>
								<input type="text" class="form-control" name="nama" value="<?= $alkes->nama; ?>" required placeholder="Nama Alat Kesehatan">
							  </div>
							  <div class="form-group">
								<label>Jumlah</label>
								<input type="number" class="form-control" name="jumlah" value="<?= $alkes->jumlah; ?>" required placeholder="Jumlah">
							  </div>
							  
							  <div class="form-group">
								<label>Tgl. Peroleh</label>
								<input type="date" class="form-control" name="tgl_peroleh" value="<?= $alkes->tgl_peroleh; ?>" required placeholder="Tgl. Peroleh">
							  </div>
							  
							  <div class="form-group">
								<label>Jenis Alat</label>
								<input type="text" class="form-control" name="jenis_alat" value="<?= $alkes->jenis_alat; ?>" required placeholder="Jenis Alat">
							  </div>
							  
							  <div class="form-group">
								<label>Ukuran</label>
								<input type="text" class="form-control" name="ukuran" value="<?= $alkes->ukuran; ?>" required placeholder="Ukuran">
							  </div>
							  
							  <div class="form-group">
								<label>Tipe Merek</label>
								<input type="text" class="form-control" name="tipe_merk" value="<?= $alkes->tipe_merk; ?>" required placeholder="Ukuran">
							  </div>
							  
							  <div class="form-group">
								<label>Keterangan</label>
								<textarea class="form-control" required placeholder="Keterangan" name="keterangan_alkes" rows="4" cols="10" value="<?= $alkes->keterangan_alkes; ?>"><?php echo  $alkes->keterangan_alkes; ?></textarea>
							  </div>
							
							  <button type="submit" name="update" class="btn btn-success btn-sm"><i class="fa fa-save"></i> UPDATE</button>
							</form>
						</div>
					</div>
				</div>
</body>
</html>