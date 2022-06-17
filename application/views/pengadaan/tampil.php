<div class="panel panel-default">
<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right, #483D8B, #00FFFF);">
    <h3><strong>Data Pengadaan</strong></h3>
    <hr>




<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Pengadaan Alat</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Pengadaan Bahan</a></li>
  </ul>

  <!-- Tab panes -->
  

</div>
</div>

<div class="panel-body">
<div class="tab-content">
    
    <div role="tabpanel" class="tab-pane   active" id="home">
      <br>
      <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalbaru"><i class="fa fa-plus"></i> Input Data Pengadaan Alat Baru</a>
      <!-- Modal -->
      <div class="modal fade" id="myModalbaru" tabindex="-1"  aria-labelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false"  aria-hidden="true" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Input Data Pengadaan Alat Baru</h4>
            </div>
            <div class="modal-body">
            <form method="POST" action="Pengadaan/Simpan_pengadaan_baru">
            <div class="form-group">
								<label>Nama Laboratorium</label>
								<select name="id_lab" class="form-control" required>
									<option value="" selected="selected">-- Pilih Laboratorium --</option>
									<?php foreach ($labor as $lab ): ?>
									<option value="<?= $lab->id_lab;?>"><?php echo $lab->nama_lab;?></option>
									<?php endforeach; ?>
								</select>
							  </div>
               <input type="text" hidden value="<?php echo $kode_pengadaan ?>" name="kode_pengadaan">       
							  <div class="form-group">
								<label>Nama Alkes</label>
								<input type="text" class="form-control" name="nama" required placeholder="Nama Alat Kesehatan">
							  </div>

							  <div class="form-group">
								<label>Jumlah</label>
								<input type="number" class="form-control" name="jumlah" required placeholder="Jumlah">
							  </div>
							  
							  <div class="form-group">
								<label>Tgl. Peroleh</label>
								<input type="date" class="form-control" name="tgl_peroleh" required placeholder="Tgl. Peroleh">
							  </div>
							  
							  <div class="form-group">
								<label>Jenis Alat</label>
								<input type="text" class="form-control" name="jenis_alat" required placeholder="Jenis Alat">
							  </div>
							  
							  <div class="form-group">
								<label>Ukuran</label>
								<input type="text" class="form-control" name="ukuran" required placeholder="Ukuran">
							  </div>
							  
							  <div class="form-group">
								<label>Tipe Merek</label>
								<input type="text" class="form-control" name="tipe_merk" required placeholder="Ukuran">
							  </div>
							  
							  <div class="form-group">
								<label>Keterangan</label>
								<textarea class="form-control" required placeholder="Keterangan" name="keterangan_alkes" rows="4" cols="10"></textarea>
							  </div>

                <div class="form-group">
								<label>Status Pengadaan</label>
                <input type="text" readonly class="form-control" name="status_pengadaan" value="Pemeriksaan">
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
      <!-- Modal -->


      <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModallama"><i class="fa fa-plus"></i> Input Data Pengadaan Alat Lama</a>
          <!-- Modal -->
          <div class="modal fade" id="myModallama" tabindex="-1"  aria-labelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false"  aria-hidden="true" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Input Data Pengadaan Alat Lama</h4>
            </div>
            <div class="modal-body">
            <form method="POST" action="Pengadaan/Simpan_pengadaan_lama">
            <div class="form-group">
								<label>Nama Alkes</label>
								<select name="id_alat" class="form-control" required>
									<option value="" selected="selected">-- Pilih Alkes --</option>
                  <?php foreach ($alkes as $al): ?>
									<option value="<?= $al->id_alat;?>"><?php echo $al->nama;?></option>
									<?php endforeach; ?>
								</select>
							  </div>
              

							  <div class="form-group">
								<label>Jumlah</label>
								<input type="number" class="form-control" name="jumlah" required placeholder="Jumlah">
							  </div>
							  
							  <div class="form-group">
								<label>Tgl. Peroleh</label>
								<input type="date" class="form-control" name="tgl_peroleh" required placeholder="Tgl. Peroleh">
							  </div>
							
							  <div class="form-group">
								<label>Keterangan</label>
								<textarea class="form-control" required placeholder="Keterangan" name="keterangan_alkes" rows="4" cols="10"></textarea>
							  </div>

                <div class="form-group">
								<label>Status Pengadaan</label>
                <input type="text" class="form-control" name="status_pengadaan" readonly required value="Pemeriksaan">
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
      <!-- Modal -->                




      <hr>
      <div class="dataTable_wrapper">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Alat</th>
                    <th>Jenis</th>
                    <th>Jumlah Pengadaan</th>
                    <th>Tgl</th>
                    <th>Ket</th>
                    <th>Status</th>
                    <th>Kategori Pengadaan</th>
                    <th>Aksi</th>
                </tr>
            </thead>

                <?php $no=1; foreach ($pengadaan_join as $peminjaman) : ?>

            <tbody>
                
                        <tr class="odd gradeX">
                            <td align="center"><?php echo $no++; ?>.</td>
                            <td>
                                <?php $id_alat=$peminjaman->id_alat; ?>
                                <?php $tampil_data_alat=$this->M_pengadaan->tampil_alat($id_alat)->row(); ?>
                                <?php echo $tampil_data_alat->nama; ?>
                            </td>
                            <td><?php echo $peminjaman->jenis_pengadaan; ?></td>
                            <td><?php echo $peminjaman->jumlah_pengadaan ; ?></td>
                            <td><?php echo $peminjaman->tgl_pengadaan; ?></td>
                            <td><?php echo $peminjaman->keterangan_pengadaan ; ?></td>
                            <td><?php echo $peminjaman->status_pengadaan; ?></td>
                            <td><?php echo $peminjaman->kategori; ?></td>
                            <td>
                              <?php if($peminjaman->kategori=='lama'){ ?>
                                <a title="Edit Data" href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#alateditlama<?php echo $peminjaman->id_pengadaan; ?>">EDIT</a> 
                                <a title="Hapus Data" href="Pengadaan/Hapus_pengadaan_alat_lama/<?php echo $peminjaman->id_pengadaan; ?>/<?php echo $peminjaman->id_alat; ?>" onclick="return confirm('Hapus data ini..?');" href="" class="btn btn-danger btn-sm">HAPUS</a>

                                <?php $user1=$this->session->userdata('level'); ?>
                                <?php if($user1=='1'){ ?>
                                    <?php if($peminjaman->status_pengadaan=='Pemeriksaan'){?>
                                    <a title="Edit Data" href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#konfirmasialatlama<?php echo $peminjaman->id_pengadaan; ?>">Konfimasi Pengadaan</a> 
                                    <?php }else{} ?>
                                <?php }else{} ?>

                              <?php }else if($peminjaman->kategori=='baru'){ ?>  
                                
                                <a title="Edit Data" href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#alateditbaru<?php echo $peminjaman->id_alat; ?>">EDIT</a> 
                                <a title="Hapus Data" href="Pengadaan/Hapus_pengadaan_alat_baru/<?php echo $peminjaman->id_alat; ?>" onclick="return confirm('Hapus data ini..?');" href="" class="btn btn-danger btn-sm">HAPUS</a>


                                <?php $user1=$this->session->userdata('level'); ?>
                                <?php if($user1=='1'){ ?>
                                  <?php if($peminjaman->status_pengadaan=='Pemeriksaan'){?>
                                  <a title="Edit Data" href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#konfirmasibaru<?php echo $peminjaman->id_alat; ?>">Konfimasi Pengadaan</a> 
                                  <?php }else{} ?>
                                <?php }else{} ?>
                              <?php } ?>  
                              

                                
                            </td>
                        </tr>

            </tbody>
<!-- edit data alat -->
 <!-- Modal edit alat lama-->
 <div class="modal fade" id="alateditlama<?php echo $peminjaman->id_pengadaan; ?>" tabindex="-1"  aria-labelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false"  aria-hidden="true" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Ubah Data Pengadaan Alat Lama</h4>
            </div>
            <div class="modal-body">
            <form method="POST" action="Pengadaan/Ubah_pengadaan_alat_lama">
            <input type="text" hidden value="<?php echo $peminjaman->id_pengadaan; ?>" name="id_pengadaan"> 
            <input type="text" hidden  value="<?php echo $id_alat=$peminjaman->id_alat; ?>" name="id_alat">
          
							  <div class="form-group">
								<label>Nama</label>
                <?php  $id_alat=$peminjaman->id_alat; ?>
                <?php $tampil_data=$this->M_pengadaan->tampil_alat($id_alat)->row(); ?>
                
								<input type="text" readonly class="form-control" name="nama" required placeholder="Nama" value="<?php echo $tampil_data->nama; ?>">
							  </div>
							
                <?php if($peminjaman->status_pengadaan=='Sesuai'){ ?>
							  <div class="form-group">
								<label>Jumlah</label>
								<input type="number" readonly class="form-control" name="jumlah" required placeholder="jumlah" value="<?php echo $peminjaman->jumlah_pengadaan; ?>">
							  </div>
                <?php }else{ ?>
                  <div class="form-group">
                  <label>Jumlah</label>
								<input type="number"  class="form-control" name="jumlah" required placeholder="jumlah" value="<?php echo $peminjaman->jumlah_pengadaan; ?>">
							  </div>
                <?php } ?>

							  <?php if($peminjaman->status_pengadaan=='Sesuai'){ ?>
                <div class="form-group">
								<label>Keterangan</label>
								<textarea readonly class="form-control"  required placeholder="Keterangan" name="keterangan_alkes" rows="4" cols="10"><?php echo $peminjaman->keterangan_pengadaan; ?></textarea>
							  </div>
                <?php }else{ ?>
                  <div class="form-group">
								<label>Keterangan</label>
								<textarea class="form-control"  required placeholder="Keterangan" name="keterangan_alkes" rows="4" cols="10"><?php echo $peminjaman->keterangan_pengadaan; ?></textarea>
							  </div>
                <?php } ?>


                <div class="form-group">
								<label>Status Pengadaan  <?php echo $peminjaman->status_pengadaan; ?></label>
								<select name="status_pengadaan" class="form-control" required>
                  <?php if($peminjaman->status_pengadaan=='Sesuai'){ ?>
                    <option selected value="Sesuai">Sesuai</option>
                  <?php }else if($peminjaman->status_pengadaan=='Tidak Sesuai'){ ?>
                    <option selected value="Tidak Sesuai">Tidak Sesuai</option>
                  <?php }else if($peminjaman->status_pengadaan=='Pemeriksaan'){ ?>
                    <option selected value="Pemeriksaan">Pemeriksaan</option>   
                  <?php } ?>  

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
 <!-- Modal edit alat lama-->

 <!-- konfirmasi alat lama -->
 <div class="modal fade" id="konfirmasialatlama<?php echo $peminjaman->id_pengadaan; ?>" tabindex="-1"  aria-labelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false"  aria-hidden="true" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Konfirmasi Pengadaan Alat Lama</h4>
            </div>
            <div class="modal-body">
            <form method="POST" action="Pengadaan/Ubah_pengadaan_alat_lama">
            <input type="text" hidden value="<?php echo $peminjaman->id_pengadaan; ?>" name="id_pengadaan"> 
            <input type="text" hidden  value="<?php echo $id_alat=$peminjaman->id_alat; ?>" name="id_alat">
          
							  <div class="form-group">
                <?php  $id_alat=$peminjaman->id_alat; ?>
                <?php $tampil_data=$this->M_pengadaan->tampil_alat($id_alat)->row(); ?>
                
								<input type="text" hidden readonly name="nama" required placeholder="Nama" value="<?php echo $tampil_data->nama; ?>">
							  </div>
							
							  
							  <div class="form-group">
								<input type="number" hidden  name="jumlah" required placeholder="jumlah" value="<?php echo $peminjaman->jumlah_pengadaan; ?>">
							  </div>
							  
                <div class="form-group">
								<textarea  hidden  required  name="keterangan_alkes" rows="4" cols="10"><?php echo $peminjaman->keterangan_pengadaan; ?></textarea>
							  </div>
                <div class="form-group">
								<label>Status Pengadaan  </label>
								<select name="status_pengadaan" class="form-control" required>
                <option  value="">->Pilih<-</option>
                    <option  value="Sesuai">Sesuai</option>
                    <option  value="Tidak Sesuai">Tidak Sesuai</option> 
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
 <!-- konfirmasi alat lama -->

 <!-- Modal edit alat baru-->
 <div class="modal fade" id="alateditbaru<?php echo $peminjaman->id_alat; ?>" tabindex="-1"  aria-labelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false"  aria-hidden="true" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Ubah Data Pengadaan Alat Baru</h4>
            </div>
            <div class="modal-body">
            <form method="POST" action="Pengadaan/Ubah_pengadaan_alat_baru">
            <input type="text" hidden value="<?php echo $peminjaman->id_pengadaan; ?>" name="id_pengadaan"> 
            <input type="text" hidden  value="<?php echo $id_alat=$peminjaman->id_alat; ?>" name="id_alat"> 
            <?php if($peminjaman->status_pengadaan=='Sesuai'){ ?>
							  <div class="form-group">
								<label>Nama</label>
                <?php $tampil_data=$this->M_pengadaan->tampil_alat($id_alat)->row(); ?>
                
								<input type="text" readonly class="form-control" name="nama" required placeholder="Nama" value="<?php echo $tampil_data->nama; ?>">
							  </div>
							<?php }else{ ?>
                <div class="form-group">
								<label>Nama</label>
                <?php $tampil_data=$this->M_pengadaan->tampil_alat($id_alat)->row(); ?>
                
								<input type="text" class="form-control" name="nama" required placeholder="Nama" value="<?php echo $tampil_data->nama; ?>">
							  </div>
               <?php } ?> 
							  
               <?php if($peminjaman->status_pengadaan=='Sesuai'){ ?>
							  <div class="form-group">
								<label>Jumlah</label>
								<input type="number" readonly class="form-control" name="jumlah" required placeholder="jumlah" value="<?php echo $tampil_data->jumlah; ?>">
							  </div>
                <?php }else{ ?>
                  <div class="form-group">
								<label>Jumlah</label>
								<input type="number" class="form-control" name="jumlah" required placeholder="jumlah" value="<?php echo $tampil_data->jumlah; ?>">
							  </div>
							  <?php } ?>

                <?php if($peminjaman->status_pengadaan=='Sesuai'){ ?>
                <div class="form-group">
								<label>Keterangan</label>
								<textarea readonly class="form-control" required placeholder="Keterangan" name="keterangan_pengadaan" rows="4" cols="10"><?php echo $peminjaman->keterangan_pengadaan; ?></textarea>
							  </div>
                <?php }else{ ?>
                  <div class="form-group">
								<label>Keterangan</label>
								<textarea class="form-control" required placeholder="Keterangan" name="keterangan_pengadaan" rows="4" cols="10"><?php echo $peminjaman->keterangan_pengadaan; ?></textarea>
							  </div>  
                <?php } ?>



                <div class="form-group">
								<label>Status Pengadaan</label>
								<select name="status_pengadaan" class="form-control" required>
                  <?php if($peminjaman->status_pengadaan=='Sesuai'){ ?>
                    <option selected value="Sesuai">Sesuai</option>
                  <?php }else if($peminjaman->status_pengadaan=='Tidak Sesuai'){ ?>
                    <option selected value="Tidak Sesuai">Tidak Sesuai</option>
                  <?php }else if($peminjaman->status_pengadaan=='Pemeriksaan'){ ?>
                    <option selected value="Pemeriksaan">Pemeriksaan</option>   
                  <?php } ?>  

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
 <!-- Modal edit alat baru-->  
 <!-- konfirmasi alat baru -->
 <div class="modal fade" id="konfirmasibaru<?php echo $peminjaman->id_alat; ?>" tabindex="-1"  aria-labelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false"  aria-hidden="true" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Konfirmasi Pengadaan Alat Baru</h4>
            </div>
            <div class="modal-body">
            <form method="POST" action="Pengadaan/Ubah_pengadaan_alat_baru">
            <input type="text" hidden  value="<?php echo $id_alat=$peminjaman->id_alat; ?>" name="id_alat"> 
            <input type="text" hidden  value="<?php echo $peminjaman->id_pengadaan; ?>" name="id_pengadaan"> 
            <div class="form-group">
                <?php $tampil_data=$this->M_pengadaan->tampil_alat($id_alat)->row(); ?>
                
								<input hidden type="text"  name="nama" required  value="<?php echo $tampil_data->nama; ?>">
							  </div>
							
							  
							  <div class="form-group">
								<input hidden type="number"  name="jumlah" required  value="<?php echo $tampil_data->jumlah; ?>">
							  </div>
							  
                <div class="form-group">
								<textarea hidden  required  name="keterangan_pengadaan" rows="4" cols="10"><?php echo $peminjaman->keterangan_pengadaan; ?></textarea>
							  </div>
							
                <div class="form-group">
								<label>Status Pengadaan</label>
								<select name="status_pengadaan" class="form-control" required>
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
 <!-- konfirmasi alat baru -->     
 <!-- edit data alat --> 
            <?php endforeach; ?>
        </table>
        
    </div>

    </div>




    <div role="tabpanel" class="tab-pane fade " id="profile">
      <br>
      <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalbahanbaru"><i class="fa fa-plus"></i> Input Data Pengadaan Bahan Baru</a>
      <!-- Modal -->
      <div class="modal fade" id="myModalbahanbaru" tabindex="-1"  aria-labelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false"  aria-hidden="true" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Input Data Pengadaan Bahan Baru</h4>
            </div>
            <div class="modal-body">
            <form method="POST" action="Pengadaan/Simpan_pengadaan_bahan_baru">
            <input type="text" hidden value="<?php echo $kode_pengadaan2 ?>" name="kode_pengadaan2"> 
            <div class="form-group">
								<select name="id_lab" class="form-control" required>
									<option value="" selected="selected">-- Pilih Laboratorium --</option>
									<?php foreach ($labor as $lab ): ?>
									<option value="<?= $lab->id_lab;?>"><?php echo $lab->nama_lab;?></option>
									<?php endforeach; ?>
								</select>
								
							  </div>
							  <div class="form-group">
								<label>Nama Bahan Praktek</label>
								<input type="text" class="form-control" name="nama_bahan" required placeholder="Nama Bahan Praktek">
							  </div>
							  <div class="form-group">
								<label>Merek</label>
								<input type="text" class="form-control" name="merk" required placeholder="Merek">
							  </div>
							  
							  <div class="form-group">
								<label>Stok</label>
								<input type="number" class="form-control" name="stok_awal" required placeholder="Stok Barang">
							  </div>
							  
							  <div class="form-group">
								<label>Satuan</label>
								<select class="form-control" name="satuan" required>
									<option value="Pcs">Pcs</option>
									<option value="Liter">Liter</option>
									<option value="Box">Box</option>
									<option value="Gram">Gram</option>
									<option value="Butir">Butir</option>
								</select>
							  </div>
                <div class="form-group">
								<label>Tgl. Peroleh</label>
								<input type="date" class="form-control" name="tgl_peroleh" required placeholder="Tgl. Peroleh">
							  </div>
                <div class="form-group">
								<label>Keterangan</label>
								<textarea class="form-control" required placeholder="Keterangan" name="keterangan_bahan" rows="4" cols="10"></textarea>
							  </div>
                <div class="form-group">
								<label>Status Pengadaan</label>
                <input type="text" readonly class="form-control" name="status_pengadaan" value="Pemeriksaan">
							
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
      <!-- Modal -->            

      <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalbahanlama"><i class="fa fa-plus"></i> Input Data Pengadaan Bahan Lama</a>
       <!-- Modal -->
       <div class="modal fade" id="myModalbahanlama" tabindex="-1"  aria-labelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false"  aria-hidden="true" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Input Data Pengadaan Bahan Lama</h4>
            </div>
            <div class="modal-body">
            <form method="POST" action="Pengadaan/Simpan_bahan_lama">
            <input type="text" hidden value="<?php echo $kode_pengadaan2 ?>" name="kode_pengadaan"> 
            <div class="form-group">
								<label>Nama Bahan</label>
								<select name="id_bahan2" class="form-control" required>
									<option value="" selected="selected">-- Pilih Bahan --</option>
                  <?php foreach ($bahan as $al): ?>
									<option value="<?= $al->id_bahan;?>"><?php echo $al->nama_bahan;?>|<?= $al->id_bahan;?></option>
									<?php endforeach; ?>
								</select>
							  </div>
							 
							  
							  <div class="form-group">
								<label>Stok</label>
								<input type="number" class="form-control" name="stok_awal" required placeholder="Stok Barang">
							  </div>
							  
							 
                <div class="form-group">
								<label>Tgl. Peroleh</label>
								<input type="date" class="form-control" name="tgl_peroleh" required placeholder="Tgl. Peroleh">
							  </div>
                <div class="form-group">
								<label>Keterangan</label>
								<textarea class="form-control" required placeholder="Keterangan" name="keterangan_bahan" rows="4" cols="10"></textarea>
							  </div>
                <div class="form-group">
								<label>Status Pengadaan</label>
                <input type="text" class="form-control" name="status_pengadaan" readonly required value="Pemeriksaan">
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
      <!-- Modal -->  
      <hr>
      <div class="dataTable_wrapper">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Bahan</th>
                    <th>Jenis</th>
                    <th>Jumlah Pengadaan</th>
                    <th>Tgl</th>
                    <th>Ket</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

                <?php $no=1; foreach ($pengadaan_join2 as $peminjaman) : ?>

            <tbody>
                
                        <tr class="odd gradeX" style="font-size:12px;">
                            <td align="center"><?php echo $no++; ?>.</td>
                            <td>
                                <?php  $id_bahan=$peminjaman->id_bahan; ?>
                                <?php $tampil_data_bahan=$this->M_pengadaan->tampil_bahan($id_bahan)->row(); ?>
                                <?php echo $tampil_data_bahan->nama_bahan; ?>
                            </td>
                            <td><?php echo $peminjaman->jenis_pengadaan; ?></td>
                            <td><?php echo $peminjaman->jumlah_pengadaan ; ?></td>
                            <td><?php echo $peminjaman->tgl_pengadaan; ?></td>
                            <td><?php echo $peminjaman->keterangan_pengadaan ; ?></td>
                            <td><?php echo $peminjaman->kategori; ?></td>
                            <td><?php echo $peminjaman->status_pengadaan; ?></td>
                            <td>
                            <?php if($peminjaman->kategori=='lama'){ ?>
                                <a title="Edit Data" href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editpengadaanbahanlama<?php echo $peminjaman->id_pengadaan; ?>">EDIT</a> 
                                <a title="Hapus Data" href="Pengadaan/Hapus_pengadaan_bahan_lama/<?php echo $peminjaman->id_bahan; ?>" onclick="return confirm('Hapus data ini..?');" href="" class="btn btn-danger btn-sm">HAPUS</a>

                                <?php $user1=$this->session->userdata('level'); ?>
                                <?php if($user1=='1'){ ?>
                                  <?php if($peminjaman->status_pengadaan=='Pemeriksaan'){?>
                                    <a title="Edit Data" href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#konfirmasibahanlama<?php echo $peminjaman->id_bahan; ?>">Konfimasi Pengadaan</a>
                                  <?php }else{} ?>
                                <?php }else{} ?>

                              <?php }else if($peminjaman->kategori=='baru'){ ?>  
                                <a title="Edit Data" href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editpengadaanbahanbaru<?php echo $peminjaman->id_pengadaan; ?>">EDIT</a>

                                <a title="Hapus Data" href="Pengadaan/Hapus_pengadaan_bahan_baru/<?php echo $peminjaman->id_bahan; ?>" onclick="return confirm('Hapus data ini..?');" href="" class="btn btn-danger btn-sm">HAPUS</a>

                                <?php $user1=$this->session->userdata('level'); ?>
                                <?php if($user1=='1'){ ?>
                                  <?php if($peminjaman->status_pengadaan=='Pemeriksaan'){?>
                                    <a title="Edit Data" href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#konfirmasibahanbaru<?php echo $peminjaman->id_bahan; ?>">Konfimasi Pengadaan</a> 
                                  <?php }else{} ?>
                                <?php }else{} ?>

                              <?php } ?>

                            </td>
                        </tr>

            </tbody>
            <!-- edit data bahan -->
<!-- Modal edit bahan baru-->
<div class="modal fade" id="editpengadaanbahanbaru<?php echo $peminjaman->id_pengadaan; ?>" tabindex="-1"  aria-labelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false"  aria-hidden="true" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Ubah Data Pengadaan Bahan Baru</h4>
            </div>
            <div class="modal-body">
            <form method="POST" action="Pengadaan/Ubah_pengadaan_bahan_baru">
            <input type="text" hidden  value="<?php echo $id_bahan=$peminjaman->id_bahan; ?>" name="id_bahan"> 
            <?php if($peminjaman->status_pengadaan=='Sesuai'){ ?> 
            <div class="form-group">
								<label>Nama Bahan Praktek</label>
                <?php $tampil_data_bahan=$this->M_pengadaan->tampil_bahan($id_bahan)->row(); ?>
								<input type="text" readonly class="form-control" name="nama_bahan" required placeholder="Nama Bahan Praktek" value="<?php echo $tampil_data_bahan->nama_bahan; ?>">
							  </div>
                <?php }else{ ?>
                  <div class="form-group">
								<label>Nama Bahan Praktek</label>
                <?php $tampil_data_bahan=$this->M_pengadaan->tampil_bahan($id_bahan)->row(); ?>
								<input type="text" class="form-control" name="nama_bahan" required placeholder="Nama Bahan Praktek" value="<?php echo $tampil_data_bahan->nama_bahan; ?>">
							  </div>
                <?php } ?>
                
                <?php if($peminjaman->status_pengadaan=='Sesuai'){ ?> 
							  <div class="form-group">
								<label>Merek</label>
								<input readonly type="text" class="form-control" name="merk" required placeholder="Merek" value="<?php echo $tampil_data_bahan->merk; ?>">
							  </div>
                <?php }else{ ?>
                  <div class="form-group">
								<label>Merek</label>
								<input type="text" class="form-control" name="merk" required placeholder="Merek" value="<?php echo $tampil_data_bahan->merk; ?>">
							  </div>
                <?php } ?>
							  
                <?php if($peminjaman->status_pengadaan=='Sesuai'){ ?> 
							  <div class="form-group">
								<label>Stok</label>
								<input type="number" readonly class="form-control" name="stok_awal" required placeholder="Stok Barang" value="<?php echo $peminjaman->jumlah_pengadaan; ?>">
							  </div>
                <?php }else{ ?>
                  <div class="form-group">
								<label>Stok</label>
								<input type="number" class="form-control" name="stok_awal" required placeholder="Stok Barang" value="<?php echo $peminjaman->jumlah_pengadaan; ?>">
							  </div>
              <?php } ?>
							  
						
                <div class="form-group">
								<label>Keterangan</label>
								<textarea class="form-control" required placeholder="Keterangan" name="keterangan_pengadaan" rows="4" cols="10"><?php echo $peminjaman->keterangan_pengadaan; ?></textarea>
							  </div>

                <div class="form-group">
								<label>Status Pengadaan</label>
								<select name="status_pengadaan" class="form-control" required>
                  <?php if($peminjaman->status_pengadaan=='Sesuai'){ ?>
                    <option selected value="Sesuai">Sesuai</option>
                  <?php }else if($peminjaman->status_pengadaan=='Tidak Sesuai'){ ?>
                    <option selected value="Tidak Sesuai">Tidak Sesuai</option> 
                  <?php }else if($peminjaman->status_pengadaan=='Pemeriksaan'){ ?>
                    <option selected value="Pemeriksaan">Pemeriksaan</option>   
                  <?php } ?>  

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
 <!-- Modal edit bahan baru--> 
<!-- konfirmasi bahan baru--> 
<div class="modal fade" id="konfirmasibahanbaru<?php echo $peminjaman->id_bahan; ?>" tabindex="-1"  aria-labelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false"  aria-hidden="true" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Konfirmasi Pengadaan Bahan Baru</h4>
            </div>
            <div class="modal-body">
            <form method="POST" action="Pengadaan/Ubah_pengadaan_bahan_baru">
            <input type="text"  hidden value="<?php echo $id_bahan=$peminjaman->id_bahan; ?>" name="id_bahan"> 
          
            <div class="form-group">
                <?php $tampil_data_bahan=$this->M_pengadaan->tampil_bahan($id_bahan)->row(); ?>
								<input  hidden type="text"  name="nama_bahan" required placeholder="Nama Bahan Praktek" value="<?php echo $tampil_data_bahan->nama_bahan; ?>">
							  </div>
							  <div class="form-group">
								<input hidden type="text"  name="merk" required placeholder="Merek" value="<?php echo $tampil_data_bahan->merk; ?>">
							  </div>
							  
							  <div class="form-group">
								<input type="number" hidden name="stok_awal" required placeholder="Stok Barang" value="<?php echo $peminjaman->jumlah_pengadaan; ?>">
							  </div>
							  
						
                <div class="form-group">
								<textarea hidden required placeholder="Keterangan" name="keterangan_pengadaan" rows="4" cols="10"><?php echo $peminjaman->keterangan_pengadaan; ?></textarea>
							  </div>

                <div class="form-group">
								<label>Status Pengadaan</label>
								<select name="status_pengadaan" class="form-control" required>
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
 <!-- konfirmasi bahan baru--> 
 <!-- edit bahan lama -->
 <div class="modal fade" id="editpengadaanbahanlama<?php echo $peminjaman->id_pengadaan; ?>" tabindex="-1"  aria-labelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false"  aria-hidden="true" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Ubah Data Pengadaan Bahan Lama</h4>
            </div>
            <div class="modal-body">
            <form method="POST" action="Pengadaan/Ubah_pengadaan_bahan_lama">
            <input type="text" hidden  value="<?php echo $id_bahan=$peminjaman->id_bahan; ?>" name="id_bahan"> 
          
            
          <div class="form-group">
          <label>Nama</label>
          <input type="text" readonly class="form-control" name="nama" required placeholder="Nama" value="<?php echo $tampil_data_bahan->nama_bahan; ?>">
          </div>
        
          <?php if($peminjaman->status_pengadaan=='Sesuai'){ ?> 
          <div class="form-group">
          <label>Jumlah</label>
          <input type="number" readonly class="form-control" name="stok_awal" required placeholder="jumlah" value="<?php echo $peminjaman->jumlah_pengadaan; ?>">
          </div>
          <?php }else{ ?>
            <div class="form-group">
          <label>Jumlah</label>
          <input type="number" class="form-control" name="stok_awal" required placeholder="jumlah" value="<?php echo $peminjaman->jumlah_pengadaan; ?>">
          </div>
           <?php } ?> 

           <?php if($peminjaman->status_pengadaan=='Sesuai'){ ?> 
          <div class="form-group">
          <label>Keterangan</label>
          <textarea class="form-control" readonly  required  name="keterangan_pengadaan" rows="4" cols="10"><?php echo $peminjaman->keterangan_pengadaan; ?></textarea>
          </div>
          <?php }else{ ?>
            <div class="form-group">
          <label>Keterangan</label>
          <textarea class="form-control"  required  name="keterangan_pengadaan" rows="4" cols="10"><?php echo $peminjaman->keterangan_pengadaan; ?></textarea>
          </div>
          <?php } ?>


          <div class="form-group">
          <label>Status Pengadaan</label>
          <select name="status_pengadaan" class="form-control" required>
            <?php if($peminjaman->status_pengadaan=='Sesuai'){ ?>
              <option selected value="Sesuai">Sesuai</option>
            <?php }else if($peminjaman->status_pengadaan=='Tidak Sesuai'){ ?>
              <option selected value="Tidak Sesuai">Tidak Sesuai</option>
            <?php }else if($peminjaman->status_pengadaan=='Pemeriksaan'){ ?>
              <option selected value="Pemeriksaan">Pemeriksaan</option>   
            <?php } ?>  

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
       <!-- edit bahan lama -->
     <!-- konfirmasi bahan lama -->
 <div class="modal fade" id="konfirmasibahanlama<?php echo $peminjaman->id_bahan; ?>" tabindex="-1"  aria-labelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false"  aria-hidden="true" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Konfirmasi Pengadaan Bahan Lama</h4>
            </div>
            <div class="modal-body">
            <form method="POST" action="Pengadaan/Ubah_pengadaan_bahan_lama">
            <input type="text" hidden value="<?php echo $id_bahan=$peminjaman->id_bahan; ?>" name="id_bahan"> 
          
          <div class="form-group">
          <input type="text" hidden readonly  name="nama" required placeholder="Nama" value="<?php echo $tampil_data_bahan->nama_bahan; ?>">
          </div>
        
          
          <div class="form-group">
          <input type="number" hidden  name="stok_awal" required placeholder="jumlah" value="<?php echo $peminjaman->jumlah_pengadaan; ?>">
          </div>
          
          <div class="form-group">
          <textarea  hidden  required  name="keterangan_pengadaan" rows="4" cols="10"><?php echo $peminjaman->keterangan_pengadaan; ?></textarea>
          </div>
          <div class="form-group">
          <label>Status Pengadaan</label>
          <select name="status_pengadaan" class="form-control" required>
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
       <!-- konfirmasi bahan lama -->
<!-- edit data bahan -->
            <?php endforeach; ?>
        </table>

    </div>            

    </div>

  </div>


    
</div>
</div>





