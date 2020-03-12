<div id="leftsidebar" class="sidebar">
    <div class="sidebar-scroll">
        <nav id="leftsidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="active"><a href="{{action('AdminController@index')}}"><i class="icon-home" title="Home"></i><span>Dashboard</span></a></li>
                <li class="middle">
                    <a href="#uiElements" class="has-arrow"><i class="fa fa-coffee"></i><span>Tài khoản người dùng</span></a>
                    <ul>
                        <li><a href="{{action('RoleController@index')}}"><i class="fa fa-users" title=" Quyền người dùng" style="color:beige"></i><span>Quyền người dùng</span></a></li>
                        <li><a href="{{action('UserController@index')}}"><i class="icon-user" title="Tài khoản" style="color:beige"></i><span>Tài khoản</span></a></li>
                    </ul>
                </li>
                <li class="middle">
                    <a href="#uiElements" class="has-arrow"><i class="fa fa-coffee"></i><span>Quản lý cửa hàng</span></a>
                    <ul>
                        <li><a href="{{action('LevelController@index')}}"><i class=" fa fa-arrows-v" title="tầng" style="color:beige"></i><span>Quản lý tầng</span></a></li>
                        <li><a href="{{action('TableController@index')}}"><i class="fa fa-table" title="bàn" style="color:beige"></i><span>Quản lý bàn</span></a></li>
                    </ul>
                </li>
                <li class="middle">
                    <a href="#uiElements" class="has-arrow"><i class="fa fa-coffee"></i><span>Quản lý NVL</span></a>
                    <ul>
                        <li><a href="{{action('MaterialTypeController@index')}}"><i class="icon-cup" title="loại nguyên liệu" style="color:beige"></i><span> loại NVL</span></a></li>
                        <li><a href="{{action('MaterialController@index')}}"><i class=" icon-globe-alt" title="nguyên liệu" style="color:beige"></i><span> NVL</span></a></li>
                    </ul>
                </li>
                <li class="middle">
                    <a href="#uiElements" class="has-arrow"><i class="fa fa-coffee"></i><span>Quản lý sản phẩm</span></a>
                    <ul>
                        <li><a href="{{action('SizeController@index')}}"><i class="fa fa-sitemap" title="size" style="color:beige"></i><span>Size</span></a></li>
                        <li><a href="{{action('ProductController@index')}}"><i class="fa fa-product-hunt" title="sản phẩm" style="color:beige"></i><span>Sản phẩm</span></a></li>
                        <li><a href="{{action('CategoryController@index')}}"><i class="icon-screen-tablet" title="Thể loại" style="color:beige"></i><span> Thể loại </span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>