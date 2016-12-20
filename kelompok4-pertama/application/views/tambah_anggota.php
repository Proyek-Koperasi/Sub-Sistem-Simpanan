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
                       
 
                   <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Nama</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="nama" class="form-control" id="focusedinput" placeholder="Masukkan Nama Anggota Baru">
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="help-block"></p>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Jenis kelamin</label>
                                    <div class="col-sm-1">
                                        <input type="text" name="jk" class="form-control" id="focusedinput" placeholder="">
                                    </div><p>*Jenis Kelamin L/P</p>
                                    </div>

                                    <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Tempat Lahir</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="tempat_lahir" class="form-control" id="focusedinput" placeholder="Masukkan Tmp Lahir">
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="help-block"></p>
                                    </div>
                                  </div>
                                  
                                    <div class="form-group">
                                      <label for="focusedinput" class="col-sm-2 control-label"> Tanggal </label>
                                      <div class="col-sm-3">
                                          <td><input type="text" name="tgl_lahir" value="" id="date_timepicker_start" class="form-control"/></td>
                                      </div>
                                      <div class="col-sm-2">
                                          <p class="help-block"></p>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
                                     <div class="col-xs-6">
                                        <textarea rows="3" class="form-control" type="text" name="alamat" id="alamat" placeholder="Masukan Alamat Lengkap" required></textarea>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">No Telepon</label>
                                    <div class="col-sm-3">
                                        <input type="number" name="no_telp" class="form-control" id="focusedinput" placeholder="No Telepon/HP">
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Username </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="username_anggota" class="form-control" id="focusedinput" placeholder="Username">
                                    </div>
                                    </div>
                                    
                                    <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="password_anggota" class="form-control" id="focusedinput" placeholder="Password">
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
              <center> </center>
              </div>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?= base_url() ?>res/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>res/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?= base_url() ?>res/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>res/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>res/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>res/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>res/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>res/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>res/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>res/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="<?= base_url() ?>res/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?= base_url() ?>res/assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="<?= base_url() ?>res/assets/admin/layout2/scripts/demo.js" type="text/javascript"></script>
<script>
      jQuery(document).ready(function() {    
         Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
      });
   </script>

<script src="<?php echo base_url() ?>bootstrap/datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url() ?>bootstrap/assets/js/jquery.dataTables.min.js"></script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>