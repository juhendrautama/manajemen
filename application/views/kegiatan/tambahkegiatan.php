              
					<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Input Pemakaian Bahan</strong> <a href="" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a></h3>
						</div>
						<div class="panel-body">
							<?= form_open('simpankegiatan'); ?>
							<form method="POST" action="">
							 <div class="form-group">
								<label>Nama Kegiatan</label>
								<input type="text" class="form-control" name="nama_kegiatan" required placeholder="Nama Kegiatan">
							  </div>

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
								<label>Tanggal Kegiatan</label>
								<input type="date" class="form-control" name="tgl" required placeholder="Tanggal Kegiatan">
							  </div>

							  <div class="form-group">
								<label>Keterangan</label>
								<input type="text" class="form-control" name="ket" required placeholder="Jumlah Pakai">
							  </div>
							  
							  <button type="submit" name="save" class="btn btn-success btn-sm"><i class="fa fa-save"></i> SIMPAN</button>
							</form>
								<?= form_close(); ?>
						</div>
					</div>
				