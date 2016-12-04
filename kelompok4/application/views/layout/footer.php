<div class="container">
	<div class="footer">
        <p>Proyek Tk III &copy; Kelompok 4 2016</p>
     </div>
</div>



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
    <script src="<?php echo base_url() ?>bootstrap/assets/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd"
        });
    });
      $(document).ready(function () {
        $('#anggota').DataTable();
      });
      $(document).ready(function () {
        $('#simpanan').DataTable();
      });
      $(document).ready(function () {
        $('#formadmin').DataTable();
      });
      $(document).ready(function () {
        $('#pimpinan').DataTable();
      });
      $(document).ready(function () {
        $('#sk').DataTable();
      });
      $(document).ready(function () {
        $('#sm').DataTable();
      });
      $(document).ready(function () {
        $('#pesanmasuk').DataTable();
      });
      $(document).ready(function () {
        $('#pesankeluar').DataTable();
      });
      $(document).ready(function () {
        $('#disposisi').DataTable();
      });
    </script>
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>