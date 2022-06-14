                    <div class="panel panel-default">
                        <div class="panel-heading" style="color:white;background: #3a6186;background: -webkit-linear-gradient(to right, #89253e, #3a6186);background: linear-gradient(to right,#483D8B, #00FFFF);">
                            <h3><strong>Data Ruang Laboratorium</strong> <a href="labor/tambah" class="btn btn-warning btn-sm"><i class="fa fa-plus"></i> Input Data Laboratorium</a></h3>
                        </div>
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Laboratorium</th>
                                            <th>Kuota</th>
                                            <th>Jumlah Alat</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                        <?php $no=1; foreach ($lab as $lb) : ?>

                                        
                                    <tbody>
                                        
                                                <tr class="odd gradeX">
                                                    <td align="center"><?= $no++; ?>.</td>
                                                    <td><?= $lb->nama_lab; ?></td>
                                                    <td><?= $lb->kuota;?> </td>
                                                    <td><?php echo $retVal = ( get_data_sum('tbl_alkes','id_lab',$lb->id_lab,'jumlah') == '' ) ? 0 : get_data_sum('tbl_alkes','id_lab',$lb->id_lab,'jumlah'); ?></td> 
                                                    <td><?= $lb->keterangan; ?></td>
                                                    <td>
                                                        <form>
                                                            
                                                        <a title="Edit Data" href="<?= base_url('lab/to/edit/'.$lb->id_lab); ?>" class="btn btn-success btn-sm">EDIT</a> 
                                                        <a title="Hapus Data" href="<?= base_url(); ?>labor/hapus/<?= $lb->id_lab; ?>" onclick="return confirm('Hapus data ini..?');" class="btn btn-danger btn-sm">HAPUS</a>
                                                        </form>
                                                    </td>
                                                </tr>
                                    
                                    </tbody>
                                <?php endforeach; ?>
                                </table>

                            </div>
                        </div>
                    </div>
                                     