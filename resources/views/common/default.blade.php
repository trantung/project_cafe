<!DOCTYPE html>
<html>
@include('common.header')
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <!--  <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div> -->
          <div class="clearfix"></div>
          <!-- menu profile quick info -->
          <!-- avatar -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="{{url('../../images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Đăng đẹp zai</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->
          <br />
          <!-- sidebar menu -->
          @include('common.sidebar')
        </div>
      </div>
      <!-- top navigation -->
      @include('common.nav_bar')
      <!-- /top navigation -->
      <!-- page content -->
      <div class="right_col" role="main">
        <!-- top tiles -->
        <!-- main -content  -->
        @yield('content')
      </div>
    </div>
    <!-- /top tiles -->
    <!-- footer content -->
  </div>
  @include('common.footer')