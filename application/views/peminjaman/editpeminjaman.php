      
					<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Edit Data Peminjaman</strong> <a href="../../../peminjaman" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a></h3>
						</div>
						<div class="panel-body">
						
							<?= form_open(base_url('proses_edit_peminjaman/'.$peminjaman->id_peminjaman)); ?>

							<form method="POST" action="">

							   <div class="form-group">
								<label>Nama Alat</label>
								<?php $id_alat=$peminjaman->id_alat;?>
								<?php $tampil_alat=$this->M_peminjaman->tampil_alat($id_alat)->row();?>
								<input type="text" hidden name="id_alat" value="<?php echo $id_alat; ?>">
								<input type="text" readonly class="form-control" name="id_at" required placeholder="Jumlah" value="<?php echo	$tampil_alat->nama; ?>">
							
							  </div>



							  <div class="form-group">
								<label>Nama Laboratorium</label>
								<?php $id_lab=$peminjaman->id_lab;?>
								<?php $tampil_lab=$this->M_peminjaman->tampil_lab($id_lab)->row(); ?>
								<input type="text" hidden name="id_lab" value="<?php echo $id_lab; ?>">
								<input type="text" readonly class="form-control" name="idab" required  value="<?php echo	$tampil_lab->nama_lab; ?>">
							  </div>

							  <div class="form-group">
								<label>Jumlah</label>
								<input type="text" class="form-control" name="jumlah" required placeholder="Jumlah" value="<?= $peminjaman->jumlah;?>">
							  </div>

							  <div class="form-group">
								<label>Tanggal</label>
								<input type="date" class="form-control" name="tgl" required placeholder="Tanggal" value="<?= $peminjaman->tgl;?>">
							  </div>
							  	
							    <div class="form-group">
								<label>Status</label>
								<input type="text" class="form-control" name="status" required placeholder="Status" value="<?= $peminjaman->status;?>">
							  </div>						  
							 
							
							  <button type="submit" name="save" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Peminjaman</button>
							</form>
								<?= form_close(); ?>
						</div>
					</div>
				