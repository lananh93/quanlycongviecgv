<?php $__env->startSection('title'); ?>
    <div class="col-lg-12">
        <h1 class="page-header">Giảng dạy
            <small>Danh sách</small>
        </h1>
    </div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>

            <!-- /.col-lg-12 -->
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
        <tr align="center">
            <th>Mã GD</th>
            <th>Mã MH</th>
            <th>Tên giảng dạy</th>
            <th>Thời gian BD</th>
            <th>Thời gian KT</th>
            <th>Trạng thái</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach($data as $item): ?>

            <tr class="odd gradeX" align="center">
                <td><?php echo $item["MaGD"]; ?></td>
                <td><?php echo $item["MaMH"]; ?></td>
                <td><?php echo $item["TenGD"]; ?></td>
                <td><?php echo $item["TgBD"]; ?></td>
                <td><?php echo $item["TgKT"]; ?></td>
                <td><?php echo $item["Trangthai"]; ?></td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có chắc muốn xóa không?')" href="<?php echo route('work::deletelist', $item['MaGD']); ?>"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="<?php echo route('work::editlist', $item['MaGD']); ?>">Edit</a></td>

            </tr>

        <?php endforeach; ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.backend.lecturer.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>