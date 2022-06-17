
	<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Data Peminjaman</strong> <a href="peminjaman/tambah" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Input Data Peminjaman</a></h3>
						</div>
						<div class="panel-body">
							<div class="dataTable_wrapper">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Alat</th>
											<th>Nama Laboratorium</th>
											<th>Jumlah</th>
											<th>Tanggal</th>
											<th>Status</th>
											<th>Aksi</th>
										</tr>
									</thead>

										<?php $no=1; foreach ($peminjaman_join as $peminjaman) : ?>

									<tbody>
										
												<tr class="odd gradeX">
													<td align="center"><?php echo $no++; ?>.</td>
													<td>
														<?php  $id_alat=$peminjaman->id_alat; ?>
														<?php $tampil_alat=$this->M_peminjaman->tampil_alat($id_alat)->row(); 
														 echo	$tampil_alat->nama;
														?>
													</td>
													<td><?php  $id_lab=$peminjaman->id_lab; ?>
													<?php $tampil_lab=$this->M_peminjaman->tampil_lab($id_lab)->row(); 
														 echo	$tampil_lab->nama_lab;
														?>	
													</td>
													<td><?php echo $peminjaman->jumlah; ?></td>
													<td><?php echo $peminjaman->tgl; ?></td>
													<td><?php echo $peminjaman->status; ?></td>
													<td>
														<a title="Edit Data" href="<?= base_url('peminjaman/to/edit/'.$peminjaman->id_peminjaman); ?>" class="btn btn-success btn-sm">EDIT</a> 

														<a title="Hapus Data"  onclick="return confirm('Hapus data ini..?');" href="<?= base_url(); ?>Peminjaman/hapus/<?= $peminjaman->id_peminjaman; ?>"" class="btn btn-danger btn-sm">HAPUS</a>

														<?php $user1=$this->session->userdata('level'); ?>
															<?php if($user1=='1'){ ?>
															<?php if($peminjaman->status=='Pemeriksaan'){?>
																<a title="Edit Data" href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#konfirmasipeminjaman<?php echo $peminjaman->id_peminjaman; ?>">Konfimasi Pengadaan</a>
															<?php }else{} ?>
															<?php }else{} ?>
													</td>
												</tr>
		
									</tbody>

			<!-- konfirmasi peminjaman--> 
<div class="modal fade" id="konfirmasipeminjaman<?php echo $peminjaman->id_peminjaman; ?>" tabindex="-1"  aria-labelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false"  aria-hidden="true" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Konfirmasi Peminjaman</h4>
            </div>
            <div class="modal-body">
            <form method="POST" action="Peminjaman/edit2/<?php echo $peminjaman->id_peminjaman; ?>">
            <input type="text"  hidden value="<?php echo $peminjaman->id_peminjaman; ?>" name="id_peminjaman"> 
          
           

                <div class="form-group">
								<label>Status Peminjaman</label>
								<select name="status" class="form-control" required>
									<option value="" selected="selected">-- Pilih Status --</option>
                    <option  value="Sesuai">Sesuai</option>
                    <option value="Tidak Sesuai">Tidak Sesuai</option> 

								</select>
							  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="proses">Save changes</button>
            </div>
            </form>
          </div>
        </div>
      </div>
 <!-- konfirmasi peminjaman--> 												

									<?php endforeach; ?>
								</table>

							</div>
						</div>
					</div>