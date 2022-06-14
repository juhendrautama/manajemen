					<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Edit Kegiatan</strong> <a href=".php" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a></h3>
						</div>
						<div class="panel-body">

							<?= form_open(base_url('proses_edit_kegiatan/'.$kegiatan->id_kegiatan)); ?>

							<form method="POST" action="">
							<div class="form-group">
							<label>Nama Kegiatan</label>
								<input type="text" class="form-control" name="nama_kegiatan" value="<?= $kegiatan->nama_kegiatan; ?>" required placeholder="Nama Kegiatan">
							 </div>
							 
							  <div class="form-group">
								<label>Nama Laboratorium</label>
								<select type="text" class="form-control" name="id_lab" value="<?= $jadwal->id_lab; ?>" required placeholder="Nama Laboratorium">
									<?php foreach ($labor as $lab ): ?>
										<option value="<?= $kegiatan->id_lab; ?>" ><?php echo $lab->nama_lab; ?></option>
										
									<?php endforeach; ?>
								</select>
							  </div>
							  <div class="form-group">
								<label>Tanggal</label>
								<input type="text" class="form-control" name="tanggal" value="<?= $kegiatan->tgl; ?>" required placeholder="Tanggal">
							  </div>

							  <div class="form-group">
								<label>Keterangan</label>
								<input type="text" class="form-control" name="ket" value="<?= $kegiatan->ket; ?>" required placeholder="ket">
							  </div>
							  
							  <button type="submit" name="update" class="btn btn-success btn-sm"><i class="fa fa-save"></i> UPDATE</button>
							</form>
						</div>
					</div>