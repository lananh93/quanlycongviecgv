<?php
/**
 * Created by PhpStorm.
 * User: Lan Anh
 * Date: 30/03/2016
 * Time: 12:34 SA
 */
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/assets/AdminLTE-2.3.0/dist/img/admin1.jpg" class="img-circle"
                     alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $user['last_name'] . ' ' . $user['first_name']; ?></p>
<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
</div>
</div>
<!-- search form -->
<form action="#" method="get" class="sidebar-form">
    <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Tìm kiếm...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
    </div>
</form>
<!-- /.search form -->
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">

    <li class="<?php echo (Request::is('admin')) ? 'active' : ''; ?>">
        <a href="">
            <i class="fa fa-th"></i> <span>Bảng tin</span>
        </a>
    </li>
    <li class="treeview <?php echo (Request::is('admin/user*')) ? 'active' : ''; ?>">
        <a href="#">
            <i class="fa fa-user"></i>
            <span>Thành viên</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo (Request::is('admin/user') || Request::is('admin/user/role/*')) ? 'active' : ''; ?>"><a href=<?php echo route('admin::user::index'); ?>><i class="fa fa-circle-o"></i> Tất cả người dùng</a></li>
            <li class="<?php echo (Request::is('admin/user/add')) ? 'active' : ''; ?>"><a href=<?php echo route('admin::user::add'); ?>><i class="fa fa-circle-o"></i> Thêm mới</a></li>
        </ul>
    </li>

    <li class="treeview <?php echo (Request::is('admin/media*')) ? 'active' : ''; ?>">
        <a href="#">
            <i class="fa fa-book"></i>
            <span>Quản lý quy định</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo Request::is('admin/user') ? 'active' : ''; ?>"><a href=<?php echo route('admin::user::index'); ?>><i class="fa fa-circle-o"></i> Tất cả quy định</a></li>
            <li class="<?php echo (Request::is('admin/user/addrule')) ? 'active' : ''; ?>"><a href=<?php echo route('admin::user::addrule'); ?>><i class="fa fa-circle-o"></i> Thêm mới</a></li>
        </ul>
    </li>

    <li class="treeview <?php echo (Request::is('admin/media*')) ? 'active' : ''; ?>">
        <a href="#">
            <i class="fa fa-book"></i>
            <span>Thư viện</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo Request::is('admin/media') ? 'active' : ''; ?>"><a href=<?php echo route('admin::media::index'); ?>><i class="fa fa-circle-o"></i> Tất cả tệp tin</a></li>
            <li class="<?php echo (Request::is('admin/media/setting')) ? 'active' : ''; ?>"><a href=<?php echo route('admin::user::add'); ?>><i class="fa fa-circle-o"></i> Cài đặt</a></li>
        </ul>
    </li>


    <li>
        <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <small class="label pull-right bg-red">3</small>
        </a>
    </li>

</ul>
</section>
<!-- /.sidebar -->
</aside>

