<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 1.0
  </div>
  Copyright &copy;<script>
    document.write(new Date().getFullYear());
  </script> Muay Book All rights reserved
</footer>

<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>assets/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url(); ?>assets/adminlte/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- CK Editor -->
<script src="<?php echo base_url(); ?>assets/adminlte/bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/adminlte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/iCheck/icheck.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/adminlte/dist/js/demo.js"></script>
<!-- sweetalert / Swal-->
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script> -->

<!-- DataTable -->
<script>
  $(function() {
    $('#table-buku').DataTable()

    $('#table-laporan').DataTable()

    $('#table-user').DataTable()

    $('#table-member').DataTable()

  })
</script>

<!-- configurasi textarea -->
<script>
  $(function() {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>

<!-- Waktu -->
<script type="text/javascript">
  //set timezone
  <?php date_default_timezone_set('Asia/Jakarta'); ?>
  //buat object date berdasarkan waktu di server
  var serverTime = new Date(<?php print date('Y, m, d, H, i, s, 0'); ?>);
  //buat object date berdasarkan waktu di client
  var clientTime = new Date();
  //hitung selisih
  var Diff = serverTime.getTime() - clientTime.getTime();
  //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
  function displayServerTime() {
    //buat object date berdasarkan waktu di client
    var clientTime = new Date();
    //buat object date dengan menghitung selisih waktu client dan server
    var time = new Date(clientTime.getTime() + Diff);
    //ambil nilai jam
    var sh = time.getHours().toString();
    //ambil nilai menit
    var sm = time.getMinutes().toString();
    //ambil nilai detik
    var ss = time.getSeconds().toString();
    //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
    document.getElementById("clock").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" + sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
  }
</script>
</body>

</html>