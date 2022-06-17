              
					<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Input Data Alat Musnah</strong> <a href="musnah" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a></h3>
						</div>
						<div class="panel-body">
						<form method="POST" action="Musnah/simpan">
							   <div class="form-group">
								<label>Nama Alat</label>
								<select name="id_alat" class="form-control" required>
									<option value="" selected="selected">-- Pilih Alat Kesehatan --</option>
									<?php foreach ($alkes as $al ): ?>
									<option value="<?= $al->id_alat;?>"><?php echo $al->nama;?></option>
									<?php endforeach; ?>
								</select>
							  </div>
							  <div class="form-group">
								<label>Tanggal Musnah</label>
								<input type="date" class="form-control" name="tgl_musnah" required placeholder="Tanggal Musnah">
							  </div>

							  <div class="form-group">
								<label>Jumlah Musnah</label>
								<input type="number" class="form-control" name="jumlah_musnah" required placeholder="Jumlah Musnah">
							  </div>

							   <div class="form-group">
								<label>Sebab Musnah</label>
								<input type="text" class="form-control" name="sebab_musnah" required placeholder="Sebab Musnah">
							  </div>
							  
							  <button type="submit" name="save" class="btn btn-success btn-sm"><i class="fa fa-save"></i> SIMPAN</button>
							</form>
						</div>
					</div>
				