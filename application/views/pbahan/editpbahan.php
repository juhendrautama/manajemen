<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Edit Pemakaian Bahan</strong> <a href="pbahan" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a></h3>
						</div>
						<div class="panel-body">

							<form method="POST" action="Pbahan/edit/<?php echo $pbahan->id_pemakaian ?>">
							  <div class="form-group">
							  <input type="text" hidden  name="id_lab" value="<?= $pbahan->id_lab; ?>" >

							  	<input type="hidden" class="form-control" name="id_pemakaian" value="<?= $pbahan->id_pemakaian; ?>" >
							  	<input type="hidden" class="form-control" name="stok_awal_bahan" value="<?= $pbahan->stok_awal_bahan; ?>" >
							  </div>
							  
							   <div class="form-group">
								<label>Nama Bahan Praktek</label>
								<input type="text" hidden  name="id_bahan" value="<?= $id_bahan=$pbahan->id_bahan; ?>" required placeholder="Nama Bahan Praktek">
								<?php $tampil_data_bahan=$this->M_pbahan->tampil_bahan_id($id_bahan)->row();?>	
								<input type="text" readonly class="form-control" name="nama" value="<?= $tampil_data_bahan->nama_bahan; ?>" required placeholder="Nama Bahan Praktek">
						
							  </div>
							  <div class="form-group">
								<label>Tanggal Pemakaian</label>
								<input type="date" class="form-control" name="tgl_pemakaian" value="<?= $pbahan->tgl_pemakaian; ?>" required placeholder="Tanggal Pemakaian">
							  </div>
							  <div class="form-group">
								<label>Jumlah Pakai Baru</label>
								<input type="number" class="form-control" name="jumlah_pakai_baru" placeholder="Jumlah Pakai">
							  </div>
							  <div class="form-group">
								<label>Jumlah Pakai Lama</label>
								<input type="text" class="form-control" name="jumlah_pakai_lama" value="<?= $pbahan->jumlah_pakai; ?>" required readonly placeholder="Jumlah Pakai">
							  </div>
							  
							  <button type="submit" name="submit" class="btn btn-success btn-sm"><i class="fa fa-save" onclick="return confirm('Apakah Anda Akan Mengedit Data Ini?')"></i> UPDATE</button>
							</form>


						</div>
					</div>