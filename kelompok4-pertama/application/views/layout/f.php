      <div class="footer">
        <p>TA &copy; Manajemen Informatika 2016</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- JavaScript -->
    <script src="<?php echo base_url() ?>bootstrap/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url() ?>bootstrap/js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="<?php echo base_url() ?>bootstrap/js/morris/chart-data-morris.js"></script>
    <script src="<?php echo base_url() ?>bootstrap/js/tablesorter/jquery.tablesorter.js"></script>
    <script src="<?php echo base_url() ?>bootstrap/js/tablesorter/tables.js"></script>
    <script src="<?php echo base_url() ?>bootstrap/datepicker/js/bootstrap-datepicker.js"></script>

    <script src="<?php echo base_url() ?>bootstrap/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>bootstrap/assets/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
        $('#undangan').DataTable();
      });
      $(document).ready(function () {
        $('#peminjaman').DataTable();
      });
      $(document).ready(function () {
        $('#organisasi').DataTable();
      });
      $(document).ready(function () {
        $('#pimpinan').DataTable();
      });
    </script>
    <script type="text/javascript" charset="utf-8">
  // $(document).ready(function() {
  //  $('#peminjaman').dataTable( {
  //   "bProcessing": true,
  //   "bServerSide": true,
  //   'sPaginationType': 'full_numbers',
  //   "sAjaxSource": "<?php base_url()?>peminjaman/ajax_view_pinjam/",
  //   "aaSorting": [[ 0, "desc" ]]
  //  } );
  // } );  
  </script>

    <script>
      $(document).ready(function () {
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd"
        });
    });
    // $(function() {
    //   $( "#datepicker" ).datepicker({
    //     changeMonth: true,
    //     changeYear: true,
    //     dateFormat: 'yy-mm-dd'
    //   });
    // });
    </script>
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
