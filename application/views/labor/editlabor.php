<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right,  #483D8B, #00FFFF);">
							<h3><strong>Edit Ruang Laboratoium</strong> <a href="" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a></h3>
						</div>
						<div class="panel-body">

							<?= form_open(base_url('proses_edit_labor/'.$labor->id_lab)); ?>

							<form method="POST" action="">
							  <div class="form-group">
								<label>Nama Laboratorium</label>
								<input type="text" class="form-control" value="<?= $labor->nama_lab; ?>" name="nama_lab" required placeholder="Nama Laboratorium">
							  </div>

							  <div class="form-group">
								<label>Kuota</label>
								<input type="number" class="form-control" value="<?= $labor->kuota; ?>" name="kuota" required placeholder="Kuota (Orang)">
							  </div>
							  
							  <div class="form-group">
								<label>Keterangan</label>
								<textarea class="form-control" required placeholder="Keterangan" value="<?= $labor->keterangan; ?>" name="keterangan" rows="4" cols="10"><?php echo $labor->keterangan ?></textarea>
							  </div>
							
							  <button type="submit" name="update" class="btn btn-success btn-sm"><i class="fa fa-save"></i> SIMPAN</button>
							</form>
							
							<?= form_close(); ?>
						</div>
					</div>