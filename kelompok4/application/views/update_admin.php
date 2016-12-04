<div class="container"><div class="page-container"><div class="page-content-wrapper"><div class="page-content"><div class="theme-panel"><div class="theme-options"></div>
                </div>
   <div class="portlet box blue-hoki">
                <div class="portlet-title">
                                <div class="caption">
                                   <h4>Ubah Data Admin</h4>
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

                     <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-2">
                      <input name="username" type="text" value="<?= $get->username ?>"class="form-control" >
                    </div>
                    </div>
                      
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-3">
                      <input name="password" type="text" value="<?= $get->password ?>"class="form-control" >
                    </div>
                    </div>
                     
                     <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Status</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="status" class="form-control" id="focusedinput" placeholder="Password" value="<?= $get->status ?>">
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


            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
                  </form>
                       </div>
                       </div>

                       <br>
                       <br>

    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <div class="page-footer">
        <div class="page-footer-inner">
        <div class="copyright">
              <p>Proyek Tk III &copy; Kelompok 4 2016</p>
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
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>