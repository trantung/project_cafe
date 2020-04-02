 <!-- jQuery -->
 <script src="{{url('../../vendor/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{url('../../vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{url('../../vendor/fastclick/lib/fastclick.js')}}"></script>
  <!-- NProgress -->
  <script src="{{url('../../vendor/nprogress/nprogress.js')}}"></script>
  <!-- Chart.js -->
  <script src="{{url('../../vendor/Chart.js/dist/Chart.min.js')}}"></script>
  <!-- gauge.js -->
  <script src="{{url('../../vendor/gauge.js/dist/gauge.min.js')}}"></script>
  <!-- bootstrap-progressbar -->
  <script src="{{url('../../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
  <!-- iCheck -->
  <script src="{{url('../../vendor/iCheck/icheck.min.js')}}"></script>
  <!-- Skycons -->
  <script src="{{url('../../vendor/skycons/skycons.js')}}"></script>
  <!-- Flot -->
  <script src="{{url('../../vendor/Flot/jquery.flot.js')}}"></script>
  <script src="{{url('../../vendor/Flot/jquery.flot.pie.js')}}"></script>
  <script src="{{url('../../vendor/Flot/jquery.flot.time.js')}}"></script>
  <script src="{{url('../../vendor/Flot/jquery.flot.stack.js')}}"></script>
  <script src="{{url('../../vendor/Flot/jquery.flot.resize.js')}}"></script>
  <!-- Flot plugins -->
  <script src="{{url('../../vendor/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
  <script src="{{url('../../vendor/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
  <script src="{{url('../../vendor/flot.curvedlines/curvedLines.js')}}"></script>
  <!-- DateJS -->
  <script src="{{url('../../vendor/DateJS/build/date.js')}}"></script>
  <!-- JQVMap -->
  <script src="{{url('../../vendor/jqvmap/dist/jquery.vmap.js')}}"></script>
  <script src="{{url('../../vendor/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
  <script src="{{url('../../vendor/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="{{url('../../vendor/moment/min/moment.min.js')}}"></script>
  <script src="{{url('../../vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

  <!-- Custom Theme Scripts -->
  <script src="{{url('../../build/js/custom.min.js')}}"></script>
  <!-- Datatables -->
  <script src="{{url('../../vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('../../vendor/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <script src="{{url('../../vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{url('../../vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
  <script src="{{url('../../vendor/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
  <script src="{{url('../../vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{url('../../vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{url('../../vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
  <script src="{{url('../../vendor/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
  <script src="{{url('../../vendor/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{url('../../vendor/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
  <script src="{{url('../../vendor/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
  <script src="{{url('../../vendor/jszip/dist/jszip.min.js')}}"></script>
  <script src="{{url('../../vendor/pdfmake/build/pdfmake.min.js')}}"></script>
  <script src="{{url('../../vendor/pdfmake/build/vfs_fonts.js')}}"></script>

  <script>
    $(document).ready(function() {
      $('.star').on('click', function() {
        $(this).toggleClass('star-checked');
      });

      $('.ckbox label').on('click', function() {
        $(this).parents('tr').toggleClass('selected');
      });

      $('.btn-filter').on('click', function() {
        var $target = $(this).data('target');
        if ($target != 'all') {
          $('.table tr').css('display', 'none');
          $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
        } else {
          $('.table tr').css('display', 'none').fadeIn('slow');
        }
      });
    });
  </script>

</body>
</html>