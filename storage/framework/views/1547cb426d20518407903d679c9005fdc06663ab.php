<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang giảng viên</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo e(url ('/example/bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo e(url ('/example/bower_components/metisMenu/dist/metisMenu.min.css')); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo e(url ('/example/dist/css/sb-admin-2.css')); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo e(url ('/example/bower_components/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet"
          type="text/css">

    <!-- DataTables CSS -->
    <link href="<?php echo e(url ('/example/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css ')); ?>"
          rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo e(url ('/example/bower_components/datatables-responsive/css/dataTables.responsive.css')); ?>"
          rel="stylesheet">
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Trang giảng viên</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="<?php echo route('news'); ?>"><i class="fa fa-dashboard fa-fw"></i> Bảng tin</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Giảng dạy<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo route('work::getlist'); ?>">Danh sách công việc giảng dạy</a>
                            </li>
                            <li>
                                <a href="<?php echo route('work::addlec'); ?>">Thêm công việc giảng dạy</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Nghiên cứu khoa học <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo route('science::getlist'); ?>">Danh sách công việc nghiên cứu khoa học</a>
                            </li>
                            <li>
                                <a href="<?php echo route('science::addscience'); ?>">Thêm công việc nghiên cứu khoa học</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cube fa-fw"></i> Tác vụ<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Danh sách tác vụ</a>
                            </li>
                            <li>
                                <a href="#">Tên tác vụ</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i> Tài khoản cá nhân<span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Chỉnh sửa thông tin</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <?php echo $__env->yieldContent('title'); ?>
                        <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <?php if(Session::has('flash_message')): ?>
                        <div class=" alert alert-<?php echo Session::get('flash_level'); ?> ">
                        <?php echo Session::get('flash_message'); ?>

                </div>
                <?php endif; ?>


        </div>
        <!-- Đây là nội dung --!>
                <?php echo $__env->yieldContent('content'); ?>
                <!-- End Đây là nội dung --!>

            <!-- /.row -->
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="<?php echo e(url('/example/bower_components/jquery/dist/jquery.min.js')); ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo e(url('/example/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo e(url('/example/bower_components/metisMenu/dist/metisMenu.min.js')); ?>"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo e(url('/admin/dist/js/sb-admin-2.js')); ?>"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo e(url('/example/bower_components/DataTables/media/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(url('/example/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')); ?>"></script>
<!-- My script-->
<script src="<?php echo e(url('/example/js/myscript.js')); ?>"></script>
<!-- Page-Level Demo Scripts - Tables - Use for reference -->

<script src="<?php echo e(url('/js/calender.js')); ?>"></script>
</body>

</html>
