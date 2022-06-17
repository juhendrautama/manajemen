<div class="panel panel-default">
<div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right,#483D8B, #00FFFF);">
    <h3><strong>Laporan Alat Kesehatan</strong></h3>
</div>
<div class="panel-body">
    <hr>
    <form method="post" action="Laporan_alkes/Cari">
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
                        <a target="_blank"  href="Laporan_alkes/Cetak_laporan/<?php echo $tgl1; ?>/<?php echo $tgl2; ?> " class="btn btn-success btn-sm">
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
											<th>Spesifikasi Alkes</th>
											<th>Jumlah</th>
											<th>Tgl Peroleh</th>
											<th>Keterangan</th>
										</tr>
				</thead>

        <?php if (isset($_POST['proses'])) {  $tgl1=$_POST['tgl1']; $tgl2=$_POST['tgl2']; ?>
                
        <?php $no=1; foreach ($alkes_join_laporan as $al) : ?>

										
<tbody>
  
      <tr class="odd gradeX">
        <td align="center"><?= $no++; ?>.</td>
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
        
        echo $sisa+$jum_pengadaan;
        ?></td>
        <td><?= $al->tgl_peroleh; ?></td>
        <td><?= $al->keterangan_alkes; ?></td>
       
      </tr>

</tbody>
<?php endforeach; ?>
<?php }else{ ?>
  <?php } ?>
        </table>

    </div>
</div>
</div>
             