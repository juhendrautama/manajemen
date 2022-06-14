
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
													</td>
												</tr>
		
									</tbody>
									<?php endforeach; ?>
								</table>

							</div>
						</div>
					</div>