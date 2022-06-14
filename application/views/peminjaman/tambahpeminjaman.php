      
					<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Input Data Peminjaman</strong> <a href="../peminjaman" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a></h3>
						</div>
						<div class="panel-body">
							<?= form_open('simpanpeminjaman'); ?>
							<form method="POST" action="">

							   <div class="form-group">
								<label>Nama Alat</label>
								<select name="id_alat" class="form-control" required>
									<option value="" selected="selected">-- Nama Alat Kesehatan--</option>
									<?php foreach ($alkes as $al): ?>
									<option value="<?= $al->id_alat;?>"><?php echo $al->nama;?></option>
									<?php endforeach; ?>
								</select>
							  </div>



							  <!-- <div class="form-group">
								<label>Nama Laboratorium</label>
								<select name="id_lab" class="form-control" required>
									<option value="" selected="selected">-- Pilih Laboratorium --</option>
									<?php foreach ($labor as $lab ): ?>
									<option value="<?= $lab->id_lab;?>"><?php echo $lab->nama_lab;?></option>
									<?php endforeach; ?>
								</select>
							  </div> -->

							  <div class="form-group">
								<label>Jumlah</label>
								<input type="text" class="form-control" name="jumlah" required placeholder="Jumlah">
							  </div>

							  <div class="form-group">
								<label>Tanggal</label>
								<input type="date" class="form-control" name="tgl" required placeholder="Tanggal">
							  </div>
							  	
							    <div class="form-group">
								<label>Status</label>
								<input type="text" class="form-control" name="status" required placeholder="Tanggal">
							  </div>						  
							 
							
							  <button type="submit" name="save" class="btn btn-success btn-sm"><i class="fa fa-save"></i> SIMPAN</button>
							</form>
								<?= form_close(); ?>
						</div>
					</div>
				