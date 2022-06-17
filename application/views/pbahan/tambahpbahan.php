              
					<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Input Pemakaian Bahan</strong> <a href="pbahan" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a></h3>
						</div>
						<div class="panel-body">
							<?= form_open('simpanpbahan'); ?>
							<form method="POST" action="">
							 
							  
							   <div class="form-group">
								<label>Nama Bahan Praktek</label>
								<select name="id_bahan" class="form-control" required>
									<option value="" selected="selected">-- Pilih Bahan --</option>
									<?php foreach ($bahan as $bh ): ?>
									<option value="<?= $bh->id_bahan;?>"><?php echo $bh->nama_bahan;?></option>
									<?php endforeach; ?>
								</select>
							  </div>
							  <div class="form-group">
								<label>Tanggal Pemakaian</label>
								<input type="date" class="form-control" name="tgl_pemakaian" required placeholder="Tanggal Pemakaian">
							  </div>
							  <div class="form-group">
								<label>Jumlah Pakai</label>
								<input type="number" class="form-control" name="jumlah_pakai" required placeholder="Jumlah Pakai">
							  </div>
							  
							  <button type="submit" name="save" class="btn btn-success btn-sm"><i class="fa fa-save"></i> SIMPAN</button>
							</form>
								<?= form_close(); ?>
						</div>
					</div>
				