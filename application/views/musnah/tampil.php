					<div class="panel panel-default">

						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Data Alat Musnah</strong> <a href="musnah/tambah" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Input Alat Musnah</a></h3>
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
											<th>Nama Alat</th>
											<th>Tanggal Musnah</th>
											<th>Jumlah Musnah</th>
											<th>Sebab Musnah</th>
											<th>Aksi</th>
										</tr>
									</thead>

									<?php $no=1; foreach ($musnah_join as $musnah) : ?>
									<tbody>
										
										
												<tr class="odd gradeX">
													<td align="center"><?php echo $no++; ?>.</td>
													<td><?php echo $musnah->nama_lab; ?></td>
													<td><?php echo $musnah->nama; ?></td>
													<td><?php echo $musnah->tgl_musnah; ?></td>
													<td><?php echo $musnah->jumlah_musnah; ?></td>
													<td><?php echo $musnah->sebab_musnah; ?></td>
													<td>
														<a title="Edit Data" href="<?= base_url('musnah/to/edit/'.$musnah->id_musnah); ?>" class="btn btn-success btn-sm">EDIT</a> 
														<a title="Hapus Data" href="<?= base_url(); ?>musnah/hapus/<?= $musnah->id_musnah; ?>" onclick="return confirm('Hapus data ini..?');" class="btn btn-danger btn-sm">HAPUS</a>
													</td>
												</tr>
							
									</tbody>
								<?php endforeach; ?>
								</table>

							</div>
						</div>
					</div>
	