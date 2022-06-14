              
					<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Input Data Hasil Karya Mahasiswa</strong> <a href="" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a></h3>
						</div>
						<div class="panel-body">
						<?= form_open('simpankarya'); ?>  

							<div class="form-group">
								<label>Nama</label>
								<input type="text" class="form-control" name="nama" required placeholder="Nama">
							  </div>

							 <div class="form-group">
								<label>Pembuat</label>
								<input type="text" class="form-control" name="pembuat" required placeholder="Pembuat">
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
								<label>Tanggal Input</label>
								<input type="date" class="form-control" name="tgl_input" required placeholder="Tanggal Input">
							  </div>
							  
							  <button type="submit" name="save" class="btn btn-success btn-sm"><i class="fa fa-save"></i> SIMPAN</button>
							</form>
								<?= form_close(); ?>
						</div>
					</div>
				