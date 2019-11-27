<!DOCTYPE html>
<html>
@include('common.header')
<body id="page-top">

 @include('common.nav_bar')

  <div id="wrapper">

    <!-- Sidebar -->
    @include('common.sidebar')

    <div id="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          {{ Form::open(array('method'=>'POST', 'action' => array('AdminController@postLogout'))) }}
            {{ Form::submit('Logout', array('class' => 'btn btn-primary')) }}
          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>
  @include('common.footer')
</body>
</html>