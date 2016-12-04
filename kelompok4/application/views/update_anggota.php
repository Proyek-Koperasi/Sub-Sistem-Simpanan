<div class="container"><div class="page-container"><div class="page-content-wrapper"><div class="page-content"><div class="theme-panel"><div class="theme-options"></div>
                </div>

  <div class="portlet box blue-hoki">
                <div class="portlet-title">
                                <div class="caption">
                                    <h4>Tambah Data Anggota</h4>
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
        <div class="portlet-body">
                <div class="tab-content">
                        <div class="tab-pane active" id="horizontal-form">
                     <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">

                    <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Nama</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="nama" class="form-control" value="<?= $get->nama ?>" id="focusedinput">
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="help-block"></p>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Jenis kelamin</label>
                                    <div class="col-sm-1">
                                        <input type="text" name="jk" class="form-control" value="<?= $get->jk ?>" id="focusedinput">
                                    </div><p>*Jenis Kelamin L/P</p>
                                    </div>

                                    <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Tempat Lahir</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="tempat_lahir" class="form-control" value="<?= $get->tempat_lahir ?>" id="focusedinput">
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="help-block"></p>
                                    </div>
                                  </div>
                                  
                                    <div class="form-group">
                                      <label for="focusedinput" class="col-sm-2 control-label"> Tanggal </label>
                                      <div class="col-sm-3">
                                          <td><input type="text" name="tgl_lahir" value="<?= $get->tgl_lahir ?>" id="date_timepicker_start" class="form-control"/></td>
                                      </div>
                                      <div class="col-sm-2">
                                          <p class="help-block"></p>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
                                     <div class="col-xs-6">
                                        <textarea rows="3" class="form-control" type="text" name="alamat" id="alamat"><?= $get->alamat ?></textarea>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">No Telepon</label>
                                    <div class="col-sm-3">
                                        <input type="number" name="no_telp" class="form-control" value="<?= $get->no_telp ?>" id="focusedinput">
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Username </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="username_anggota" class="form-control" value="<?= $get->username_anggota ?>" id="focusedinput">
                                    </div>
                                    </div>
                                    
                                    <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="password_anggota" class="form-control" value="<?= $get->password_anggota ?>" id="focusedinput">
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                        <button type="submit" name="ok" class="btn-success btn">Simpan</button>
                        <button type="submit" name="btn-cancel" class="btn-danger btn">Batal</button>
                    </div>
                    </div>
  
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

    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <div class="page-footer">
        <div class="page-footer-inner">
        <div class="copyright">
              <center> 
             </center>
              </div>
        </div>
        </div>
    </div>
                <script type="text/javascript">
<!--
jQuery(document).ready(function() {    
         Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
      });
//-->
                </script>
