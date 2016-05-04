<?php
/**
 * Created by PhpStorm.
 * User: Lan Anh
 * Date: 30/03/2016
 * Time: 12:30 SA
 */
?>
<header class="main-header">
   <!-- Logo -->
    <!-- Logo -->
    <a href="{!! route('admin::dashboard') !!}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->

        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Trang Admin</b></span>
    </a>


    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="/assets/AdminLTE-2.3.0/dist/img/admin1.jpg" class="user-image"
                             alt="User Image">
                        <span class="hidden-xs">{!! $user['last_name'] . ' ' . $user['first_name'] !!}</span>
                    </a>
                    <ul class="dropdown-menu">
                    <!-- User image -->

                        <li class="user-header">
        <img src="/assets/AdminLTE-2.3.0/dist/img/admin1.jpg" class="img-circle"
             alt="User Image">
        <p>
            {!! $user['last_name'] . ' ' . $user['first_name'] !!}
            <small>Đăng ký từ
                tháng {!! \Carbon\Carbon::parse($user['created_at'])->format('m Y') !!}</small>
        </p>
    </li>
    <!-- Menu Footer-->
    <li class="user-footer">
        <div class="pull-left">
            <a href="#" class="btn btn-default btn-flat">Profile</a>
        </div>
        <div class="pull-right">
            <a href="{!! route('logout') !!}" class="btn btn-default btn-flat">Logout</a>
        </div>
    </li>
</ul>
</li>
</ul>
</div>
</nav>
</header>

