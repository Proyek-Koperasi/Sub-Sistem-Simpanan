<div class="container"><div class="page-container"><div class="page-content-wrapper"><div class="page-content"><div class="theme-panel"><div class="theme-options"></div>
                </div>

  <div class="portlet box blue-hoki">
                <div class="portlet-title">
                                <div class="caption">
                                    <h4>Ubah Data Jenis Simpanan</h4>
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
                        <label for="focusedinput" class="col-sm-2 control-label">Jenis Simpanan</label>
                        <div class="col-sm-3">
                      <input name="jenis_simpan" type="text" value="<?= $get->jenis_simpan ?>"class="form-control" >
                    </div>
                    </div>
                      
                    </div>
                   
                     
                    </div>
                     <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <button type="submit" name="ok" class="btn-success btn">Simpan</button>
                        <button type="submit" name="btn-cancel" class="btn-danger btn">Batal</button>

                        <br>
                        <br>
                        <br>
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
              <p>Proyek Tk III &copy; Kelompok 4 2016</p>
              </div>
              </div>
        </div>
        </div>
    <script>
      jQuery(document).ready(function() {    
         Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
      });
    </script>
</body>
<!-- END BODY -->
</html>


</body>
</html>