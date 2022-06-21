<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="panel panel-default">
						<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
							<h3><strong>Data Alat Kesehatan</strong> <a href="alkes/tambah" class="btn btn-warning btn-sm"><i class="fa fa-plus"></i> Input Data Alat Kesehatan</a></h3>
						</div>
						<div class="panel-body">
							<div class="dataTable_wrapper">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>No</th>
											<th>Laboratorium</th>
											<th>Spesifikasi Alkes</th>
											<th>Jumlah</th>
											<th>Tgl Peroleh</th>
											<th>Keterangan</th>
											<th>Aksi</th>
										</tr>
									</thead>

									<?php $no=1; foreach ($alkes_join as $al) : ?>

										
									<tbody>
										
												<tr class="odd gradeX">
													<td align="center"><?= $no++; ?>.</td>
													<td><?= $al->nama_lab; ?></td>
													<td>
														<label>Nama :</label> <?= $al->nama ?> <br />
														<label>Jenis :</label> <?= $al->jenis_alat; ?> <br />
														<label>Ukuran :</label> <?= $al->ukuran; ?> <br />
														<label>Tipe/Merek :</label> <?= $al->tipe_merk; ?> <br />
													</td>
													<td><?php

													$dipinjam = 0;
													$tot_now = $al->jumlah;
													$this->db->where('id_alat', $al->id_alat);
													$this->db->where('id_lab', $al->id_lab);
													$this->db->where('status', 'Sesuai');
													$query = $this->db->get('tbl_peminjaman');
													if ($query->num_rows() > 0) {
														$dipinjam = $query->row()->jumlah;
													}
													$sisa = $tot_now - $dipinjam;
													
													$id_alat=$al->id_alat;
													$data_alat=$this->M_pengadaan->tampil_alat_alkes($id_alat)->row();
													$jum_pengadaan='';
													if(empty($data_alat->total_alat)){
														$jum_pengadaan='0';

													}else{
														$jum_pengadaan=$data_alat->total_alat;
													}
													
	

													echo $hasilakhir=$sisa+$jum_pengadaan;

													
													
													?></td>
													<td><?= $al->tgl_peroleh; ?></td>
													<td><?= $al->keterangan_alkes; ?></td>
													<td>
														<form>
															
														<a title="Edit Data" href="<?= base_url('alkes/to/edit/'.$al->id_alat); ?>" class="btn btn-success btn-sm">EDIT</a> 
														<a title="Hapus Data" href="<?= base_url(); ?>alkes/hapus/<?= $al->id_alat; ?>" onclick="return confirm('Hapus data ini..?');" class="btn btn-danger btn-sm">HAPUS</a>
														</form>
													</td>
												</tr>
									
									</tbody>
								<?php endforeach; ?>
								</table>

							</div>
						</div>
					</div>
</body>
</html>
					