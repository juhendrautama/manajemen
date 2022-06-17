      
					<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Input Alat Kesehatan</strong> <a href="alkes" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a></h3>
						</div>
						<div class="panel-body">
							<?= form_open('simpanalkes'); ?>
							<form method="POST" action="">
							  <div class="form-group">
								<label>Nama Laboratorium</label>
								<select name="id_lab" class="form-control" required>
									<option value="" selected="selected">-- Pilih Laboratorium --</option>
									<?php foreach ($labor as $lab ): ?>
									<option value="<?= $lab->id_lab;?>"><?php echo $lab->nama_lab;?></option>
									<?php endforeach; ?>
								</select>
							  </div>

							  <div class="form-group">
								<label>Nama Alkes</label>
								<input type="text" class="form-control" name="nama" required placeholder="Nama Alat Kesehatan">
							  </div>

							  <div class="form-group">
								<label>Jumlah</label>
								<input type="number" class="form-control" name="jumlah" required placeholder="Jumlah">
							  </div>
							  
							  <div class="form-group">
								<label>Tgl. Peroleh</label>
								<input type="date" class="form-control" name="tgl_peroleh" required placeholder="Tgl. Peroleh">
							  </div>
							  
							  <div class="form-group">
								<label>Jenis Alat</label>
								<input type="text" class="form-control" name="jenis_alat" required placeholder="Jenis Alat">
							  </div>
							  
							  <div class="form-group">
								<label>Ukuran</label>
								<input type="text" class="form-control" name="ukuran" required placeholder="Ukuran">
							  </div>
							  
							  <div class="form-group">
								<label>Tipe Merek</label>
								<input type="text" class="form-control" name="tipe_merk" required placeholder="Ukuran">
							  </div>
							  
							  <div class="form-group">
								<label>Keterangan</label>
								<textarea class="form-control" required placeholder="Keterangan" name="keterangan_alkes" rows="4" cols="10"></textarea>
							  </div>
							
							  <button type="submit" name="save" class="btn btn-success btn-sm"><i class="fa fa-save"></i> SIMPAN</button>
							</form>
								<?= form_close(); ?>
						</div>
					</div>
				