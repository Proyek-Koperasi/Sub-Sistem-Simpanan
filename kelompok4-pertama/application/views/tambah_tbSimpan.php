<div class="container"><div class="page-container"><div class="page-content-wrapper"><div class="page-content"><div class="theme-panel"><div class="theme-options"></div>
                </div> 

  <div class="portlet box blue-hoki">
                <div class="portlet-title">
                                <div class="caption">
                                     <h4>Tambah Data Simpanan</h4>
                                </div>
                                <div class="tools">
                                </div>
                            </div>
                <div class="portlet-body">
                <div class="tab-content">
                        <div class="tab-pane active" id="horizontal-form">
           
        </div>
        <div class="portlet-body">
                <div class="tab-content">
                        <div class="tab-pane active" id="horizontal-form">
                          <div class="form-group">
                          
                          			
                                  
                                 
                                  
                </div>
                </div>
 
                   <div class="row">
            <div class="col-sm-8 col-sm-offset-2">


             <form class="form-horizontal" action="<?=base_url();?>index.php/tbSimpan/insert/" method="POST" enctype="multipart/form-data">

              


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
                        <label for="focusedinput" class="col-sm-2 control-label">Jenis Simpanan</label>
                        <div class="col-sm-8">
                          <select name="kd_jenis_simpan" id="kd_jenis_simpan">
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
                          <label for="focusedinput" class="col-sm-2 control-label">Jumlah Simpan</label>
                          <div class="col-sm-3">
                              <input type="number" name="jml_simpan" class="form-control" id="focusedinput" required="number" placeholder="Jumlah Simpan">
                          </div>
                          <div class="col-sm-2">
                              <p class="help-block"></p>
                          </div>
                        </div>
                                                           
                                  
                        <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Jumlah Ambil</label>
                          <div class="col-sm-3">
                              <input type="number" name="jml_ambil" class="form-control" id="focusedinput" placeholder="Jumlah Ambil">
                          </div>
                          <div class="col-sm-2">
                              <p class="help-block"></p>
                          </div>
                        </div>
                                  
                        <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label"> Total</label>
                          <div class="col-sm-3">
                              <input type="number" name="total" class="form-control" id="focusedinput" placeholder="Total">
                          </div>
                          <div class="col-sm-2">
                              <p class="help-block"></p>
                          </div>
                        </div>
                                  
                        <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label"> Tanggal </label>
                          <div class="col-sm-3">
                              <td><input type="date" name="tgl_transaksi" value="<?php echo date('Y-m-d')?>" id="" class="form-control"/></td>
                          </div>
                          <div class="col-sm-2">
                              <p class="help-block"></p>
                          </div>
                        </div>
                                  <br>
                       <div  class="form-group">
                       <label for="focusedinput" class="col-sm-2 control-label"> Bukti transfer </label>
                       <div class="col-sm-3">
                       
                        <td><input type="file" name="foto" /></td>
                        <?php echo form_close(); ?>
                                  </div>  
                                  </div>
                                  
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
