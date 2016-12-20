<div class="container"><div class="page-container"><div class="page-content-wrapper"><div class="page-content"><div class="theme-panel"><div class="theme-options"></div>
                </div> 

  <div class="portlet box blue-hoki">
                <div class="portlet-title">
                                <div class="caption">
                                     <h4>Ubah Data Simpanan</h4>
                                </div>
                                <div class="tools">
                                </div>
                            </div>
                <div class="portlet-body">
                <div class="tab-content">
                        <div class="tab-pane active" id="horizontal-form">
            <form class="form-horizontal" action=" " method="POST">
            <div class = "panel-heading">
        </div>
      <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
             <form class="form-horizontal" action=" " method="POST">
            <div class = "panel-heading">
                    <div class="form-group">
                       <label for="focusedinput" class="col-sm-2 control-label">Pilih Anggota</label>
                       <div class="col-sm-8">
                       <select name="id_anggota" id="fTerminalType"> 
                       <option value="" disabled selected>Pilih Anggota</option>
                                      <?php
                                        foreach ($anggota as $key) {
                                          echo '<option value="'.$key->id_anggota.'">'.$key->id_anggota.', '.$key->nama.'</option>';
                                        }
                                      ?>
                                    </select>
                                    </div>
                                </div>
                                  
                    
                    <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">kd_jenis_simpan</label>
                                    <div class="col-sm-8">
                      <select name="kd_jenis_simpan" id="fTerminalType"> 
                      <option value="" disabled selected>Pilih Jenis simpan</option>
                      <?php
                        foreach ($jenis_simpan as $key) {
                          echo '<option value="'.$key->kd_jenis_simpan.'">'.$key->jenis_simpan.'</option>';
                        }
                      ?>
                    </select>
                    </div> 
                    </div>
                           <div class="form-group">        
                                    <label for="focusedinput" class="col-sm-2 control-label">jml_simpan</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="jml_simpan" class="form-control" id="focusedinput" placeholder="Nama Siswa" value="<?= $get->jml_simpan ?>">
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="help-block"></p>
                                    </div>
                                  </div>
                                  
                                  
                                  <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label"> jml_ambil</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="jml_ambil" class="form-control" id="focusedinput" placeholder="Nama Siswa" value="<?= $get->jml_ambil?>">
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="help-block"></p>
                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label"> total</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="total" class="form-control" id="focusedinput" placeholder="Nama Siswa" value="<?= $get->total?>">
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="help-block"></p>
                                    </div>
                                  </div>
                                  
                                   <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label"> Tanggal</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="tgl_transaksi" class="form-control" id="focusedinput" placeholder="Nama Siswa" value="<?= $get->tgl_transaksi?>">
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="help-block"></p>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label"> Gambar</label>
                                     <img class="ukuran_gambar" src="gambar/<?= $get->gambar?>">
                                     <br>
                                    <div class="col-sm-3">
                                         <td><input type="file" name="file_upload" /></td>
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="help-block"></p>
                                    </div>
                                  </div>

                            
                    </div>
                </div>
                </div>
                
                
                <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <button type="submit" name="ok" class="btn-success btn">Simpan</button>
                <button type="submit" name="btn-cancel" class="btn-danger btn">Batal</button>
            </div>
            </div>
            </div>
          </div>
        </div>
      </div><!-- /#page-wrapper -->

      </div><!-- /#page-wrapper -->