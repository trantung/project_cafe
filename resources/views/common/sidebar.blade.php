<ul class="sidebar navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="{{action('AdminController@index')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-folder"></i>
      <span>Danh Mục</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Table, Category,..:</h6>
      <a class="dropdown-item" href="{{action('RoleController@index')}}">Role</a>
      <a class="dropdown-item" href="{{action('UserController@index')}}">User</a>
      <a class="dropdown-item" href="{{action('LevelController@index')}}">Tầng</a>
      <a class="dropdown-item" href="{{action('TableController@index')}}">Bàn</a>
      <a class="dropdown-item" href="{{action('CategoryController@index')}}">Category</a>
      <a class="dropdown-item" href="{{action('SizeController@index')}}">Size</a>
      <a class="dropdown-item" href="{{action('MaterialTypeController@index')}}">Material type</a>
      <a class="dropdown-item" href="{{action('MaterialController@index')}}">Material</a>
      <a class="dropdown-item" href ="{{action('ProductController@index')}}">Sản Phẩm</a>
      <div class="dropdown-divider"></div>
      <h6 class="dropdown-header">Other Pages:</h6>
      <a class="dropdown-item" href="404.html">404 Page</a>
      <a class="dropdown-item" href="blank.html">Blank Page</a>
    </div>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="charts.html">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Charts</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="tables.html">
      <i class="fas fa-fw fa-table"></i>
      <span>Tables</span></a>
  </li>
</ul>