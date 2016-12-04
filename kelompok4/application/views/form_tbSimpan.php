<div class="container"><div class="page-container"><div class="page-content-wrapper"><div class="page-content"><div class="theme-panel"><div class="theme-options"></div>
                </div>
        <h4>Data TbSimpan</h4>
        <div class = "panel-heading">
        <a class="btn btn-primary" href="<?= base_url().'tbSimpan/insert' ?>">Tambah TBSimpan</a>
        </div>
        <div class="table-responsive">
        <table id="simpanan" class="table table-bordered table-striped">
                   
                   <thead>
                   <th>No</th>
                   
                     <th>Id Transaksi</th>
                     <th>Id Anggota</th>
                     <th>Nama</th>
                     <th>Jumlah Simpan</th>
                     <th>Jumlah Ambil</th>
                     <th>Total</th>
                     <th>Tanggal transaksi</th>
                     <th>Jenis simpanan</th>
                     <th>Bukti Trnsfer</th>
                     
                      <th>Ubah</th>
                      <th>Cetak</th>
                      <th>Hapus</th>

                   </thead>
    <tbody>
    <?php
        $no = 1; 
        foreach ($get as $key) { 
         ?>
    <tr>
     <td><?= $no; ?></td>
    <td><?= $key->id_transaksi ?></td>
    <td><?= $key->id_anggota ?></td>
   <td><?= $key->nama ?></td>
    <td><?= $key->jml_simpan ?></td>
    <td><?= $key->jml_ambil ?></td>
    <td><?= $key->total ?></td>
    <td><?= $key->tgl_transaksi ?></td>
    <td><?= $key->jenis_simpan ?></td>
    <td>  <!--<img src="C:/xampp/htdocs/kelompok4/gambarbaru/<? //echo $key->gambar ?>" width='100px' height='100px' /> -->
            <img src="../../../img/<?php echo $key->gambar ?>" width='100px' height='100px' />

    </td>
    
    <td><a class="btn btn-warning" href="<?= base_url().'tbSimpan/update/'.$key->id_transaksi ?>">Ubah</a>   </td>
    <td><a href="<?php echo base_url(); ?>tbSimpan/print_trans/<?php echo $key->id_transaksi; ?>" class='btn btn-danger'><i class="fa fa-print"></i></a></td>
    <td><a class="btn btn-danger" href="<?= base_url().'tbSimpan/delete/'.$key->id_transaksi ?>">Hapus</a>   </td>
    </tr>
    <?php $no++; } ?>
       
    </tbody>
        
</table>
                
           </form>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
</body>
