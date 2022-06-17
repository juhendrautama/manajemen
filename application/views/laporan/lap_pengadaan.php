<div class="panel panel-default">
<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right,#483D8B, #00FFFF);">
    <h3><strong>Laporan Pengadaan</strong></h3>
</div>
<div class="panel-body">
    <hr>
    <form method="post" action="Laporan_pengadaan/Cari">
                <table>
                  <tr>
                    <td><label>Tanggal </label> </td>
                    <td>:</td>
                    <?php if (isset($_POST['proses'])) { ?>
                      <td><input type="date" class="form-control" name="tgl1" value="<?php echo $tgl1=$_POST['tgl1'] ?>"></td>
                      <td>&nbsp; <b>-</b>&nbsp; </td>
                      <td><input type="date" class="form-control" name="tgl2" value="<?php echo $tgl2=$_POST['tgl2'] ?>"></td>
                    <?php } else { ?>
                      <td><input type="date" class="form-control" name="tgl1" value=""></td>
                      <td>&nbsp; <b>-</b>&nbsp; </td>
                      <td><input type="date" class="form-control" name="tgl2" value=""></td>
                    <?php } ?>
                    <td> &nbsp;</td>
                    <td><select class="form-control" name="jenis_pengadaan" >
                    <?php if (isset($_POST['proses'])) { ?>
                      <option value="<?php echo $_POST['jenis_pengadaan'] ?>"><?php echo $jenis_pengadaan=$_POST['jenis_pengadaan'] ?></option>
                      <?php } else { }?>  
                      <option value="">Pillih</option>
                      <option value="Alat">Alat</option>
                      <option value="Bahan">Bahan</option>
                    </select></td>
                    <td> &nbsp;</td>
                    <td>
                      <input type="submit" class="btn btn-primary btn-sm" name="proses" value="GO">
                    
                  </td>
                  </tr>
                </table>
              
              </form>
    <hr>
    <?php if (isset($_POST['proses'])){  ?>
                        <a target="_blank"  href="Laporan_pengadaan/Cetak_laporan/<?php echo $tgl1; ?>/<?php echo $tgl2; ?>/<?php echo $jenis_pengadaan ?>" class="btn btn-success btn-sm">
                            <span class="fa fa-print fa-fw"></span>    
                            Cetak
                        </a>
                        <?php }else{} ?>
    <hr>                    
    <div class="dataTable_wrapper">
        <table class="table table-striped table-bordered table-hover" >
        <thead>
										<tr>
											<th>No</th>
											<th>Nama Alat / Bahan</th>
											<th>Jenis pengadaan</th>
											<th>Jumlah Pengadaan</th>
											<th>Tanggal</th>
										</tr>
				</thead>

        <?php if (isset($_POST['proses'])) {  $tgl1=$_POST['tgl1']; $tgl2=$_POST['tgl2']; ?>
                
        <?php $no=1; foreach ($tampil_lap_all_pengadaan as $al) : ?>

										
<tbody>
  
      <tr class="odd gradeX">
        <td align="center"><?= $no++; ?>.</td>
        <td>
          <?php if($al->jenis_pengadaan=='Alat'){?>
              <?php $id_alat=$al->id_alat; ?>
              <?php $tampil_data_alat=$this->M_pengadaan->tampil_alat($id_alat)->row(); ?>
              <?php echo $tampil_data_alat->nama; ?>
          <?php }else if($al->jenis_pengadaan=='Bahan'){ ?>  
              <?php  $id_bahan=$al->id_bahan; ?>
              <?php $tampil_data_bahan=$this->M_pengadaan->tampil_bahan($id_bahan)->row(); ?>
              <?php echo $tampil_data_bahan->nama_bahan; ?>
          <?php } ?>  
        </td>
        <td>
        <?php echo $al->jenis_pengadaan; ?>
        </td>
        <td>
        <?php echo $al->jumlah_pengadaan; ?>
        </td>
        <td>
        <?php echo $al->tgl_pengadaan; ?>
        </td>
      </tr>


</tbody>
<?php endforeach; ?>
<?php }else{ ?>
  <?php } ?>
        </table>

    </div>
</div>
</div>
             