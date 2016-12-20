<div class="container"><div class="page-container"><div class="page-content-wrapper"><div class="page-content"><div class="theme-panel"><div class="theme-options"></div>
                </div> 

<h4>Data Input Jenis Simpanan</h4>
        <div class = "panel-heading">
        <a class="btn btn-primary" href="<?= base_url().'jenis_simpan/insert' ?>">Tambah Jenis Simpanan</a>
        </div>
        <div class="table-responsive">
    
              <table id="mytable" class="table table-bordered table-striped">
                   
                   <thead>
                   <th>No</th>
                     <th>Simpanan</th>
                     
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
   <td><?= $key->jenis_simpan ?></td> 
   
    
    <td><a class="btn btn-warning" href="<?= base_url().'jenis_simpan/update/'.$key->kd_jenis_simpan ?>">Ubah</a>   </td>
    <td>
    <a class="btn btn-danger" href="<?= base_url().'jenis_simpan/delete/'.$key->kd_jenis_simpan ?>">Hapus</a> </td>
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
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>


</body>
</html>