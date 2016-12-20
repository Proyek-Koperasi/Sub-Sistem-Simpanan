<div class="container"><div class="page-container"><div class="page-content-wrapper"><div class="page-content"><div class="theme-panel"><div class="theme-options"></div>
                </div>
        <h4>Data Anggota</h4>
        <div class = "panel-heading">
        <a class="btn btn-primary" href="<?= base_url().'anggota/insert' ?>">Tambah Anggota</a>
        </div>
        <div class="table-responsive">
    
              <table id="anggota" class="table table-bordered table-striped">
                   
                   <thead>
                   <th>No</th>
                   
                     <th>Nama</th>
                     <th>JK</th>
                     <th>Tempat Lahir</th>
                     <th>Tgl Lahir</th>
                     <th>Alamat</th>
                     <th>No Telp</th>
                     <th>Username</th>
                     <th>Password</th>
                     
                      <th>Ubah</th>
                       <th>Hapus</th>
                   </thead>
    <tbody>
    <?php
        $no = 1; 
        foreach ($get as $key) { 
         ?>
    <tr>
     <td><?= $no; ?></td>
   <td><?= $key->nama ?></td>
   <td><?= $key->jk ?></td>
     <td><?= $key->tempat_lahir ?></td>
   <td><?= $key->tgl_lahir ?></td>
    <td><?= $key->alamat ?></td>
   <td><?= $key->no_telp ?></td>
    <td><?= $key->username_anggota ?></td>
   <td><?= $key->password_anggota ?></td>
    
    
    
    <td><a class="btn btn-warning" href="<?= base_url().'anggota/update/'.$key->id_anggota ?>">Ubah</a>   </td>
    <td>
    <a class="btn btn-danger" href="<?= base_url().'anggota/delete/'.$key->id_anggota ?>">Hapus</a> </td>
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

  