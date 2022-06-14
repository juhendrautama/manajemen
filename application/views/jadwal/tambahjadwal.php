      
					<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Input Data Jadwal</strong> <a href="" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a></h3>
						</div>
						<div class="panel-body">
							<?= form_open('simpanjadwal'); ?>
							<form method="POST" action="">

							   <div class="form-group">
								<label>Nama Jadwal</label>
								<input type="text" class="form-control" name="nama_jadwal" required placeholder="Nama Jadwal">
							  </div>


							  <div class="form-group">
								<label>Nama Laboratorium</label>
								<label>Nama Laboratorium</label>
								<select name="id_lab" class="form-control" required>
									<option value="" selected="selected">-- Pilih Laboratorium --</option>
									<?php foreach ($labor as $lab ): ?>
									<option value="<?= $lab->id_lab;?>"><?php echo $lab->nama_lab;?></option>
									<?php endforeach; ?>
								</select>
							  </div>

							  <div class="form-group">
								<label>Tanggal</label>
								<input type="date" class="form-control" name="tgl" required placeholder="Tanggal">
							  </div>
							  <div class="form-group">
								<label>Jam</label>
								<input type="time" class="form-control" name="jam" required placeholder="Jam">
							  </div>
							  
							   <div class="form-group">
								<label>Nama Pengawas</label>
								<label>Nama Pengawas</label>
								<select name="id_laboran" class="form-control" required>
									<option value="" selected="selected">-- Pilih Pengawas --</option>
									<?php foreach ($laboran as $lbr ): ?>
									<option value="<?= $lbr->id_laboran;?>"><?php echo $lbr->nama;?></option>
									<?php endforeach; ?>
								</select>
							  </div>

							  
							  
							 
							
							  <button type="submit" name="save" class="btn btn-success btn-sm"><i class="fa fa-save"></i> SIMPAN</button>
							</form>
								<?= form_close(); ?>
						</div>
					</div>
				