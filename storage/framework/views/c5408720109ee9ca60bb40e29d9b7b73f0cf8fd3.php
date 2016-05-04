<?php
/**
 * Created by PhpStorm.
 * User: Lan Anh
 * Date: 30/03/2016
 * Time: 12:40 SA
 */
?>


<?php $__env->startSection('style'); ?>
        <!-- DataTables -->
<link rel="stylesheet" href="/assets/AdminLTE-2.3.0/plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="/css/user.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
        <!-- DataTables -->
<script src="/assets/AdminLTE-2.3.0/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/AdminLTE-2.3.0/plugins/datatables/dataTables.bootstrap.min.js"></script>

<script src="/js/user.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Quy định
        </h1>

    </section>

    <section class="content">
        <?php if(session()->has('status')): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert <?php echo session('status') ? 'alert-success' : 'alert-danger'; ?> alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4>
                            <i class="icon fa <?php echo session('status') ? 'fa-check' : 'fa-ban'; ?>"></i> <?php echo session('status') ? 'Thành công!' : 'Lỗi!'; ?>

                        </h4>
                        <?php echo session('notification'); ?>

                    </div>
                </div>
            </div>
            <?php endif; ?>


                    <!-- Page Content -->
            <div id="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h1 class="box-title">Danh sách</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="odd gradeX" align="center">
                                <td>1</td>
                                <td>Áo Thun Nana</td>
                                <td>200.000 VNĐ</td>
                                <td>3 Minutes Age</td>
                                <td>Hiện</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            <tr class="even gradeC" align="center">
                                <td>2</td>
                                <td>Áo Thun Polo</td>
                                <td>250.000 VNĐ</td>
                                <td>1 Hours Age</td>
                                <td>Ẩn</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>


    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>