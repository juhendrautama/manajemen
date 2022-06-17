<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Edit Pemakaian Bahan</strong> <a href="pbahan" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a></h3>
						</div>
						<div class="panel-body">

							<?= form_open(base_url('proses_edit_pbahan/'.$pbahan->id_pemakaian)); ?>

							<form method="POST" action="">
							  <div class="form-group">
							  	<input type="hidden" class="form-control" name="id_pemakaian" value="<?= $pbahan->id_pemakaian; ?>" >
							  	<input type="hidden" class="form-control" name="stok_awal_bahan" value="<?= $pbahan->stok_awal_bahan; ?>" >

								<label>Nama Laboratorium</label>
								<input type="text" class="form-control" name="id_lab" value="<?= $pbahan->id_lab; ?>" required placeholder="Nama Laboratorium">
								<!-- <select name="id_lab" class="form-control" required>
									<option value="" selected="selected">-- Pilih Laboratorium --</option>
									<?php
										include"koneksi.php";
										$query = mysqli_query($koneksi,"SELECT * FROM tbl_lab WHERE visible='Y' ORDER BY id_lab DESC");
										while($row=mysqli_fetch_assoc($query)){
									?>
									<option <?php if ( $data['id_lab']==$row['id_lab'] ) {echo'Selected'; }?> value="<?php echo $row['id_lab']?>"><?php echo $row['nama_lab']?></option>
									<?php } ?>
								</select> -->
							  </div>
							  
							   <div class="form-group">
								<label>Nama Bahan Praktek</label>
								<input type="text" class="form-control" name="id_bahan" value="<?= $pbahan->id_lab; ?>" required placeholder="Nama Bahan Praktek">
								<!-- <select name="id_bahan" class="form-control" required>
									<option value="" selected="selected">-- Pilih Bahan --</option>
									<?php
										$query = mysqli_query($koneksi,"SELECT * FROM tbl_bahan WHERE visible='Y' ORDER BY id_bahan DESC");
										while($row=mysqli_fetch_assoc($query)){
									?>
									<option <?php if ( $data['id_bahan']==$row['id_bahan'] ) {echo'Selected'; }?> value="<?php echo $row['id_bahan']?>"><?php echo $row['nama_bahan'].' ~ Stok Awal : '.$row['stok_awal'].' '.$row['satuan']?></option>
									<?php } ?>
								</select> -->
							  </div>
							  <div class="form-group">
								<label>Tanggal Pemakaian</label>
								<input type="date" class="form-control" name="tgl_pemakaian" value="<?= $pbahan->tgl_pemakaian; ?>" required placeholder="Tanggal Pemakaian">
							  </div>
							  <div class="form-group">
								<label>Jumlah Pakai</label>
								<input type="number" class="form-control" name="jumlah_pakai_baru" placeholder="Jumlah Pakai">
							  </div>
							  <div class="form-group">
								<label>Jumlah Pakai</label>
								<input type="text" class="form-control" name="jumlah_pakai_lama" value="<?= $pbahan->jumlah_pakai; ?>" required readonly placeholder="Jumlah Pakai">
							  </div>
							  
							  <button type="submit" name="submit" class="btn btn-success btn-sm"><i class="fa fa-save" onclick="return confirm('Apakah Anda Akan Mengedit Data Ini?')"></i> UPDATE</button>
							</form>

							<?= form_close(); ?>

						</div>
					</div>