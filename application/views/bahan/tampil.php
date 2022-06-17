
					<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Data Bahan Praktek </strong> <a href="bahan/tambah" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Input bahan Praktek</a></h3>
						</div>
						<div class="panel-body">
							<div class="dataTable_wrapper">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>No</th>
											<th>Laboratorium</th>
											<th>Bahan</th>
											<th>Merek</th>
											<th>Stok</th>
											<th>Tgl</th>
											<th>Aksi</th>
										</tr>
									</thead>
										<?php $no=1; foreach ($bahan_join as $bahan) : ?>
									<tbody>
										
												<tr class="odd gradeX">
													<td align="center"><?php echo $no++; ?>.</td>
													<td><?php echo $bahan->nama_lab; ?></td>
													<td><?php echo $bahan->nama_bahan; ?></td>
													<td><?php echo $bahan->merk; ?></td>
													<td>
														
														<?php
														$id_bahan=$bahan->id_bahan;
														$data_bahan=$this->M_pengadaan->tampil_bahan_jum($id_bahan)->row();
														$jum_pengadaan='';
														if(empty($data_bahan->total_bahan)){
															$jum_pengadaan='0';
	
														}else{
															$jum_pengadaan=$data_bahan->total_bahan;
														}
														$jum_pengadaan;
														echo'<br>';
														$a=$bahan->stok_awal;
														$hasil=$a+$jum_pengadaan;
														echo $hasil.' '.$bahan->satuan; ?>
												</td>
												<td><?php echo $bahan->tgl; ?></td>
													<td>
														<a title="Edit Data" href="<?= base_url('bahan/to/edit/'.$bahan->id_bahan); ?>" class="btn btn-success btn-sm">EDIT</a> 
														<a title="Hapus Data" href="" onclick="return confirm('Hapus data ini..?');" class="btn btn-danger btn-sm">HAPUS</a>
													</td>
												</tr>
		
									</tbody>
									<?php endforeach; ?>
								</table>

							</div>
						</div>
					</div>
			