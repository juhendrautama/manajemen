<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Input Ruang Laboratoium</strong> <a href="" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a></h3>
						</div>
						<div class="panel-body">
							<?= form_open('simpanlabor'); ?>
							<form method="POST" action="">
							  <div class="form-group">
								<label>Nama Laboratorium</label>
								<input type="text" class="form-control" name="nama_lab" required placeholder="Nama Laboratorium">
							  </div>
							  <div class="form-group">
								<label>Kuota</label>
								<input type="number" class="form-control" name="kuota" required placeholder="Kuota (Orang)">
							  </div>
							  
							  <div class="form-group">
								<label>Keterangan</label>
								<textarea class="form-control" required placeholder="Keterangan" name="keterangan" rows="4" cols="10"></textarea>
							  </div>
							
							  <button type="submit" name="save" class="btn btn-success btn-sm"><i class="fa fa-save"></i> SIMPAN</button>
							</form>
							<?= form_close(); ?>
						</div>
					</div>