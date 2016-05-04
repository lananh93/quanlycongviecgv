<?php
/**
 * Created by PhpStorm.
 * User: Lan Anh
 * Date: 30/03/2016
 * Time: 12:40 SA
 */
        ?>


<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="/css/user.css">
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('script'); ?>
            <!-- Jquery Validate -->
    <script src="/assets/AdminLTE-2.3.0/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/js/user.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Thành viên
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo route('admin::dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo route('admin::user::index'); ?>">Thành viên</a></li>
            <li class="active"><?php echo (Request::is('admin/user/add')) ? 'Thêm mới' : 'Chỉnh sửa'; ?></li>
        </ol>
    </section>

    <section class="content">
        <?php if(session()->has('status')): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert <?php echo session('status') ? 'alert-success' : 'alert-danger'; ?> alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa <?php echo session('status') ? 'fa-check' : 'fa-ban'; ?>"></i> <?php echo session('status') ? 'Thành công!' : 'Lỗi!'; ?></h4>
                        <?php echo session('notification'); ?>

                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm mới</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="post"
                          action="/admin/user/save<?php echo isset($user) ? '/' . $user['_id'] : ''; ?>" id="form-add-user">
                        <?php echo csrf_field(); ?>

                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Vai trò</label>

                                <div class="col-sm-10 col-md-8">
                                    <div class="row">
                                        <?php foreach($roles as $role): ?>
                                            <div class="col-sm-4">
                                                <div class="checkbox icheck">
                                                    <label>
                                                        <input type="checkbox" value="<?php echo $role['slug']; ?>"
                                                               name="roles[]" <?php echo (isset($user) && in_array($role['_id'], $user['role_id'])) ? 'checked' : ''; ?>>
                                                        <?php echo trans($role['slug']); ?>

                                                    </label>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Họ và tên</label>

                                <div class="col-sm-5 col-md-4">
                                    <input type="text" name="last_name" class="form-control" placeholder="Họ"
                                           value="<?php echo isset($user) ? $user['last_name'] : ''; ?>">
                                </div>

                                <div class="col-sm-5 col-md-4">
                                    <input type="text" name="first_name" class="form-control" placeholder="Tên"
                                           value="<?php echo isset($user) ? $user['first_name'] : ''; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10 col-md-8">
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                           value="<?php echo isset($user) ? $user['email'] : ''; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Mật khẩu</label>

                                <div class="col-sm-10 col-md-8">
                                    <div class="input-group">
                                        <input readonly type="<?php echo isset($user) ? 'password' : 'text'; ?>"
                                               name="password" class="form-control"
                                               placeholder="Mật khẩu"
                                               value="<?php echo isset($user) ? 'matkhaubimat' : ''; ?>">
                                        <span class="input-group-btn">
                                            <button type="button" id="generatePassword"
                                                    class="btn btn-info btn-flat" <?php echo isset($user) ? 'disabled' : ''; ?>>
                                                Khởi tạo
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-flat btn-success center-block">Lưu</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>