      
					<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Input Data Laboran</strong> <a href="" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a></h3>
						</div>
						<div class="panel-body">
							<?= form_open('simpanlaboran'); ?>
							<form method="POST" action="">

							   <div class="form-group">
								<label>Nama</label>
								<input type="text" class="form-control" name="nama" required placeholder="Nama">
							  </div>


							  <div class="form-group">
								<label>Jenis Kelamin</label>
								<select name="jk" class="form-control" required>
									<option value="" selected="selected">-- Pilih Jenis Kelamin --</option>
									<?php foreach ($laboran as $labor ): ?>
									<option value="<?= $labor->jk;?>"><?php echo $labor->jk;?></option>
									<?php endforeach; ?>
								</select>
							  </div>

							  <div class="form-group">
								<label>Alamat</label>
								<input type="text" class="form-control" name="alamat" required placeholder="alamat">
							  </div>

							  <div class="form-group">
								<label>No Telepon</label>
								<input type="number" class="form-control" name="no_telp" required placeholder="no telpon">
							  </div>
							  
							   <div class="form-group">
								<label>Semester</label>
								<input name="semester" type="text" class="form-control" placeholder="semester" required>
								</select>
							  </div>
							  
							
							  <button type="submit" name="save" class="btn btn-success btn-sm"><i class="fa fa-save"></i> SIMPAN</button>
							</form>
								<?= form_close(); ?>
						</div>
					</div>
				