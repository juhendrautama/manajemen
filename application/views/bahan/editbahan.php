<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Edit Bahan Praktek</strong> <a href="data_bahan.php" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a></h3>
						</div>
						<div class="panel-body">
							<form method="POST" action="">
							  <div class="form-group">
								<label>Nama Laboratorium</label>
								<input  name="" name="id_lab" class="form-control" required>
								
							  </div>
							  <div class="form-group">
								<label>Nama Bahan Praktek</label>
								<input type="text" class="form-control" name="nama_bahan" value="" required placeholder="Nama Bahan Praktek">
							  </div>
							  <div class="form-group">
								<label>Merek</label>
								<input type="text" class="form-control" name="merk" value="" required placeholder="Merek">
							  </div>
							  
							  <div class="form-group">
								<label>Stok</label>
								<input type="number" class="form-control" name="stok_awal" value="<?php echo $data['stok_awal']?>" required placeholder="Stok Barang">
							  </div>
							  
							  <div class="form-group">
								<label>Satuan</label>
								<!-- <select class="form-control" name="satuan" required>
									<option <?php if ( $data['satuan']=="Pcs" ){ echo'Selected';}?> value="Pcs">Pcs</option>
									<option <?php if ( $data['satuan']=="Liter" ){ echo'Selected';}?> value="Liter">Liter</option>
									<option <?php if ( $data['satuan']=="Box" ){ echo'Selected';}?> value="Box">Box</option>
									<option <?php if ( $data['satuan']=="Gram" ){ echo'Selected';}?> value="Gram">Gram</option>
									<option <?php if ( $data['satuan']=="Butir" ){ echo'Selected';}?> value="Butir">Butir</option>
								</select> -->
							  </div>
						
							  <button type="submit" name="update" class="btn btn-success btn-sm"><i class="fa fa-save"></i> SIMPAN</button>
							</form>
						</div>
					</div>