<div class="container">

<div class="page-container">
<div class="page-content-wrapper">
<div class="page-content">
<div class="theme-panel">
<div class="theme-options">
  
</div>
                </div>


                <!-- END STYLE CUSTOMIZER -->

                
<h4>Data Input Data Admin</h4>

        <div class = "panel-heading">
        <a class="btn btn-primary" href="<?= base_url().'admin/insert' ?>">Tambah Admin</a>
        </div>
        <div class="table-responsive">
    
              <table id="formadmin" class="table table-bordered table-striped">
                   
                   <thead>
                   <th>No</th>
                     <th>Username</th>
                     
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
   <td><?= $key->username ?></td>
   <!-- <td><?= $key->password ?></td> -->
   
    
    <td><a class="btn btn-warning" href="<?= base_url().'admin/update/'.$key->id_admin ?>">Ubah</a>   </td>
    <td>
    <a class="btn btn-danger" href="<?= base_url().'admin/delete/'.$key->id_admin ?>">Hapus</a> </td>
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
              <center>

<!-- END JAVASCRIPTS -->
</center>
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