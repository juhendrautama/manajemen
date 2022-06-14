
					<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Data Kegiatan</strong> <a href="karya/tambah" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Input Kegiatan</a></h3>
						</div>
						<div class="panel-body">
							<div class="dataTable_wrapper">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>No</th>
											<th>Kegiatan</th>
											<th>Laboratorium</th>
											<th>Tanggal</th>
											<th>Keterangan</th>
											<th>Aksi</th>
										</tr>
									</thead>
										<?php $no=1; foreach ($kegiatan_join as $kegiatan) : ?>
									<tbody>
										
												<tr class="odd gradeX">
													<td align="center"><?php echo $no++; ?>.</td>
													<td><?php echo $kegiatan->nama_kegiatan; ?></td>
													<td><?php echo $kegiatan->nama_lab; ?></td>
													<td><?php echo $kegiatan->tgl; ?></td>
													<td><?php echo $kegiatan->ket; ?></td>
													<td>
														<a title="Edit Data" href="<?= base_url('kegiatan/to/edit/'.$kegiatan->id_kegiatan); ?>" class="btn btn-success btn-sm">EDIT</a> 

														<a title="Hapus Data" href="" onclick="return confirm('Hapus data ini..?');" href="<?= base_url(); ?>kegiatan/hapus/<?= $kegiatan->id_kegiatan; ?>" class="btn btn-danger btn-sm">HAPUS</a>
													</td>
												</tr>
		
									</tbody>
									<?php endforeach; ?>
								</table>

							</div>
						</div>
					</div>
			