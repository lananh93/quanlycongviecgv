<?php
/**
 * Created by PhpStorm.
 * User: Lan Anh
 * Date: 30/03/2016
 * Time: 12:27 SA
 */
?>
<?php
    $user = Sentinel::getUser();
?>

        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo trans('Trang admin'); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/assets/AdminLTE-2.3.0/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/AdminLTE-2.3.0/plugins/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/assets/AdminLTE-2.3.0/plugins/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/AdminLTE-2.3.0/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/assets/AdminLTE-2.3.0/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/assets/AdminLTE-2.3.0/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't lecturer if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Admin Style -->
    <link rel="stylesheet" href="/css/admin.css">

    <?php echo $__env->yieldContent('style'); ?>
</head>

<body class="hold-transition skin-blue sidebar-mini fixed">
<div class="wrapper">
    <!-- BEGIN HEADER -->
    <?php echo $__env->make('layout.backend.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- END HEADER -->

    <!-- BEGIN SIDEBAR -->
    <?php echo $__env->make('layout.backend.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- BEGIN SIDEBAR -->

    <!-- BEGIN CONTAINER -->
    <div class="content-wrapper">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <!-- END CONTAINER -->

    <!-- BEGIN FOOTER -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>
                <Vers>2.3.0</Vers>
            </b>
        </div>
        <strong>Copyright &copy; 2016 <a href="#">Nguyen Thi Lan Anh</a>.</strong>
    </footer>
    <!-- END FOOTER -->
</div>


<!-- jQuery 2.1.4 -->
<script src="/assets/AdminLTE-2.3.0/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/assets/AdminLTE-2.3.0/plugins/jQueryUI/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="/assets/AdminLTE-2.3.0/bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="/assets/AdminLTE-2.3.0/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/assets/AdminLTE-2.3.0/plugins/fastclick/fastclick.min.js"></script>
<!-- iCheck -->
<script src="/assets/AdminLTE-2.3.0/plugins/iCheck/icheck.min.js"></script>
<!-- Bootstrap Confirmation -->
<script src="/assets/AdminLTE-2.3.0/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/AdminLTE-2.3.0/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/assets/AdminLTE-2.3.0/dist/js/demo.js"></script>
<!-- Site script -->
<script src="/js/site.js"></script>

<?php echo $__env->yieldContent('script'); ?>

</body>
</html>