<div class="panel panel-default">
<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right,#483D8B, #00FFFF);">
    <h3><strong>Laporan Peminjaman</strong></h3>
</div>
<div class="panel-body">
    <hr>
    <form method="post" action="Laporan_peminjaman/Cari">
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
                    <td>
                      <input type="submit" class="btn btn-primary btn-sm" name="proses" value="GO">
                    
                  </td>
                  </tr>
                </table>
              
              </form>
    <hr>
    <?php if (isset($_POST['proses'])){  ?>
                        <a target="_blank"  href="Laporan_peminjaman/Cetak_laporan/<?php echo $tgl1; ?>/<?php echo $tgl2; ?> " class="btn btn-success btn-sm">
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
											<th>Nama Alat</th>
											<th>Jumlah</th>
											<th>Tanggal</th>
											<th>Status</th>
										</tr>
				</thead>

        <?php if (isset($_POST['proses'])) {  $tgl1=$_POST['tgl1']; $tgl2=$_POST['tgl2']; ?>
                
          <?php $no=1; foreach ($peminjaman_join_lap as $peminjaman) : ?>

<tbody>
  
      <tr class="odd gradeX">
        <td align="center"><?php echo $no++; ?>.</td>
        <td>
          <?php  $id_alat=$peminjaman->id_alat; ?>
          <?php $tampil_alat=$this->M_peminjaman->tampil_alat($id_alat)->row(); 
           echo	$tampil_alat->nama;
          ?>
        </td>
       
        <td><?php echo $peminjaman->jumlah; ?></td>
        <td><?php echo $peminjaman->tgl; ?></td>
        <td><?php echo $peminjaman->status; ?></td>
      
      </tr>

</tbody>
<?php endforeach; ?>
<?php }else{ ?>
  <?php } ?>
        </table>

    </div>
</div>
</div>
             