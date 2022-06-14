      
					<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Edit Data Jadwal</strong> <a href="" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a></h3>
						</div>

						
						<div class="panel-body">

								<?= form_open(base_url('proses_edit_jadwal/'.$jadwal->id_jadwal)); ?>

							<form method="POST" action="">

							  <div class="form-group">
								<label>Nama Jadwal</label>
								<input type="text" class="form-control" name="nama_jadwal" required placeholder="Nama Jadwal" value="<?= $jadwal->nama_jadwal; ?>">
							  </div>

							  <div class="form-group">
								<label>Nama Laboratorium</label>
								<select type="text" class="form-control" name="id_lab" required placeholder="Nama Alat Kesehatan">
									<?php foreach ($labor as $lab ): ?>
										<option value="<?= $jadwal->id_lab; ?>" ><?php echo $lab->nama_lab; ?></option>
										
									<?php endforeach; ?>
								</select>
							   </div>
							  

							  <div class="form-group">
								<label>Tanggal</label>
								<input type="date" class="form-control" name="tgl" required placeholder="Tanggal" value="<?= $jadwal->tgl; ?>">
							  </div>

							  <div class="form-group">
								<label>Jam</label>
								<input type="time" class="form-control" name="jam" required placeholder="Jam" value="<?= $jadwal->jam; ?>">
							  </div>
							  
							   <div class="form-group">
								<label>Jadwal</label>
								<select type="text" class="form-control" name="id_laboran" value="<?= $jadwal->id_laboran; ?>" required placeholder="Laboran">
									<?php foreach ($laboran as $labor ): ?>
										<option value="<?= $jadwal->id_laboran; ?>">
											<?php echo $labor->nama; ?>
										</option>
										
										<?php endforeach; ?>
								</select>
							  </div>
							  

							  <button type="submit" name="save" class="btn btn-success btn-sm"><i class="fa fa-save"></i> UPDATE</button>
							</form>
								<?= form_close(); ?>
						</div>
					</div>
				