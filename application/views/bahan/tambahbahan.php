					<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Input Bahan Praktek</strong> <a class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a></h3>
						</div>
						<div class="panel-body">
							<form method="POST">
								<?= form_open('simpanbahan'); ?>
							  <div class="form-group">
								<select name="id_lab" class="form-control" required>
									<option value="" selected="selected">-- Pilih Laboratorium --</option>
									<?php foreach ($labor as $lab ): ?>
									<option value="<?= $lab->id_lab;?>"><?php echo $lab->nama_lab;?></option>
									<?php endforeach; ?>
								</select>
								
							  </div>
							  <div class="form-group">
								<label>Nama Bahan Praktek</label>
								<input type="text" class="form-control" name="nama_bahan" required placeholder="Nama Bahan Praktek">
							  </div>
							  <div class="form-group">
								<label>Merek</label>
								<input type="text" class="form-control" name="merk" required placeholder="Merek">
							  </div>
							  
							  <div class="form-group">
								<label>Stok</label>
								<input type="number" class="form-control" name="stok_awal" required placeholder="Stok Barang">
							  </div>
							  
							  <div class="form-group">
								<label>Satuan</label>
								<select class="form-control" name="satuan" required>
									<option value="Pcs">Pcs</option>
									<option value="Liter">Liter</option>
									<option value="Box">Box</option>
									<option value="Gram">Gram</option>
									<option value="Butir">Butir</option>
								</select>
							  </div>
						
							  <button type="submit" name="save" class="btn btn-success btn-sm"><i class="fa fa-save"></i> SIMPAN</button>
							</form>
							<?= form_close(); ?>
						</div>
					</div>
			