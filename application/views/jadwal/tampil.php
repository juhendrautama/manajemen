
					<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Data Jadwal</strong> <a href="jadwal/tambah" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Input Jadwal</a></h3>
						</div>
						<div class="panel-body">
							<div class="dataTable_wrapper">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>No</th>
											<th>Jadwal</th>
											<th>Laboratorium</th>
											<th>Tanggal</th>
											<th>Jam</th>
											<th>Nama Laboran</th>
											<th>Aksi</th>
										</tr>
									</thead>
										<?php $no=1; foreach ($jadwal_join as $jl) : ?>
									<tbody>
										
												<tr class="odd gradeX">
													<td align="center"><?php echo $no++; ?>.</td>
													<td><?php echo $jl->nama_jadwal; ?></td>
													<td><?php echo $jl->nama_lab; ?></td>
													<td><?php echo $jl->tgl; ?></td>
													<td><?php echo $jl->jam; ?></td>
													<td><?php echo $jl->nama; ?></td>
													<td>
														<a title="Edit Data" href="<?= base_url('jadwal/to/edit/'.$jl->id_jadwal); ?>" class="btn btn-success btn-sm">EDIT</a> 
														<a title="Hapus Data" href="<?= base_url(); ?>jadwal/hapus/<?= $jl->id_jadwal; ?>" onclick="return confirm('Hapus data ini..?');" class="btn btn-danger btn-sm">HAPUS</a>
													</td>
												</tr>
		
									</tbody>
									<?php endforeach; ?>
								</table>

							</div>
						</div>
					</div>
			