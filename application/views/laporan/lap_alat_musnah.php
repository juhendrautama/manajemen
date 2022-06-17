<div class="panel panel-default">
<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right,#483D8B, #00FFFF);">
    <h3><strong>Laporan Alat Musnah</strong></h3>
</div>
<div class="panel-body">
    <hr>
    <form method="post" action="Laporan_alat_musanah/Cari">
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
                        <a target="_blank"  href="Laporan_alat_musanah/Cetak_laporan/<?php echo $tgl1; ?>/<?php echo $tgl2; ?> " class="btn btn-success btn-sm">
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
											<th>Tanggal Musnah</th>
											<th>Jumlah Musnah</th>
											<th>Sebab Musnah</th>
										</tr>
				</thead>

        <?php if (isset($_POST['proses'])) {  $tgl1=$_POST['tgl1']; $tgl2=$_POST['tgl2']; ?>
                
        	<?php $no=1; foreach ($musnah_join as $musnah) : ?>
									<tbody>
										
										
												<tr class="odd gradeX">
													<td align="center"><?php echo $no++; ?>.</td>
													<td><?php echo $musnah->nama; ?></td>
													<td><?php echo $musnah->tgl_musnah; ?></td>
													<td><?php echo $musnah->jumlah_musnah; ?></td>
													<td><?php echo $musnah->sebab_musnah; ?></td>
												
												</tr>
							
									</tbody>
								<?php endforeach; ?>
<?php }else{ ?>
  <?php } ?>
        </table>

    </div>
</div>
</div>
             