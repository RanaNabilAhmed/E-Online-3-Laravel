<footer class="main-footer">
    <strong>Copyright &copy; 2019-2020 <a href="">Nabil Ahmed</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{URL::to('')}}/public/assets/backend/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{URL::to('')}}/public/assets/backend/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{URL::to('')}}/public/assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{URL::to('')}}/public/assets/backend/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{URL::to('')}}/public/assets/backend/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{URL::to('')}}/public/assets/backend/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{URL::to('')}}/public/assets/backend/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{URL::to('')}}/public/assets/backend/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{URL::to('')}}/public/assets/backend/plugins/moment/moment.min.js"></script>
<script src="{{URL::to('')}}/public/assets/backend/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{URL::to('')}}/public/assets/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{URL::to('')}}/public/assets/backend/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{URL::to('')}}/public/assets/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{URL::to('')}}/public/assets/backend/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{URL::to('')}}/public/assets/backend/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::to('')}}/public/assets/backend/dist/js/demo.js"></script>
<!-- general form javascript files -->
<!-- bs-custom-file-input -->
<script src="{{URL::to('')}}/public/assets/backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="{{URL::to('')}}/public/assets/backend/dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="{{URL::to('')}}/public/assets/backend/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{URL::to('')}}/public/assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{URL::to('')}}/public/assets/backend/dist/js/pages/dashboard3.js"></script>
<!-- Ekko Lightbox -->
<script src="{{URL::to('')}}/public/assets/backend/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- Filterizr-->
<script src="{{URL::to('')}}/public/assets/backend/plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
<!-- AdminLTE for demo purposes -->

<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
<!-- general form javascript files end -->
</body>
</html>









