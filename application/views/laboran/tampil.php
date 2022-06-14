
	
					<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Data Laboran</strong> <a href="laboran/tambah" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Input Laboran</a></h3>
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
											<th>Nama</th>
											<th>Jenis Kelamain</th>
											<th>Alamat</th>
											<th>No Telpon</th>
											<th>Semester</th>
											<th>Aksi</th>
										</tr>
									</thead>

									<?php $no=1; foreach ($laboran as $lb) : ?>
									<tbody>
										
										
												<tr class="odd gradeX">
													<td align="center"><?php echo $no++; ?>.</td>
													<td><?= $lb->nama; ?></td>
													<td><?= $lb->jk; ?></td>
													<td><?= $lb->alamat; ?></td>
													<td><?= $lb->no_telp; ?></td>
													<td><?= $lb->semester; ?></td>
													<td>
														<a title="Edit Data" href="<?= base_url('laboran/to/edit/'.$lb->id_laboran); ?>" class="btn btn-success btn-sm">EDIT</a> 
														<a title="Hapus Data" href="<?= base_url(); ?>laboran/hapus/<?= $lb->id_laboran; ?>" onclick="return confirm('Hapus data ini..?');" class="btn btn-danger btn-sm">HAPUS</a>
													</td>
												</tr>
							
									</tbody>
								<?php endforeach; ?>
								</table>

							</div>
						</div>
					</div>
	