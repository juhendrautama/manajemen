
	
					<div class="panel panel-default">

						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Data Pemakaian Bahan</strong> <a href="pbahan/tambah" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Input Pemakaian Bahan</a></h3>
						</div>
						<?php  if($this->session->flashdata('pesan') !== null): ?>
	<div>
		<div class="alert alert warning alert-dismissible fade show" role="alert">
			<?php $this->session->flashdata('pesan') ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		</div>
	<?php endif; ?>
						<div class="panel-body">
							<div class="dataTable_wrapper">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>No</th>
											<th>Laboratorium</th>
											<th>Bahan</th>
											<th>Tanggal Pemakaian</th>
											<!-- <th>Stok Awal</th> -->
											<th>Jumlah Pakai</th>
											<th>Aksi</th>
										</tr>
									</thead>

									<?php $no=1; foreach ($pbahan_join as $pb) : ?>
									<tbody>
										
										
												<tr class="odd gradeX">
													<td align="center"><?php echo $no++; ?>.</td>
													<td><?php echo $pb->nama_lab; ?></td>
													<td><?php echo $pb->nama_bahan; ?></td>
													<td><?php echo $pb->tgl_pemakaian; ?></td>
													<!-- <td><?php echo $pb->stok_awal_bahan.' '.$pb->satuan ?></td> -->
													<td><?php echo $pb->jumlah_pakai.' '.$pb->satuan; ?></td>
													<td>
														<a title="Edit Data" href="<?= base_url('pbahan/to/edit/'.$pb->id_pemakaian); ?>" class="btn btn-success btn-sm">EDIT</a> 
														<a title="Hapus Data" href="Pbahan/hapus/<?php echo $pb->id_pemakaian; ?>" onclick="return confirm('Hapus data ini..?');" class="btn btn-danger btn-sm">HAPUS</a>
													</td>
												</tr>
							
									</tbody>
								<?php endforeach; ?>
								</table>

							</div>
						</div>
					</div>
	