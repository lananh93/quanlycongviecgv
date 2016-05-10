@extends('layout.backend.lecturer.master')
@section('title')
    <div class="col-lg-12">
        <h1 class="page-header">Nghiên cứu khoa học
            <small>Danh sách</small>
        </h1>
    </div>
    @endsection()
    @section('content')

            <!-- /.col-lg-12 -->
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
        <tr align="center">
            <th>ID</th>
            <th>Ten cong viec</th>
            <th>Loai cong viec</th>
            <th>Thoi gian</th>
            <th>So luong sinh vien</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        <?php $stt =0 ?>
        @foreach($data as $item)
            <?php $stt =$stt +1 ?>

            <tr class="odd gradeX" align="center">
                <td>{!! $stt !!}</td>
                <td>{!! $item["TenCV"] !!}</td>
                <td>{!! $item["Loai"] !!}</td>
                <td>{!! $item["Thoigian"] !!}</td>
                <td>{!! $item["SoluongSV"] !!}</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có chắc muốn xóa không?')" href="{!! route('science::deletelist', $item['id']) !!}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! route('science::editlist', $item['id']) !!}">Edit</a></td>

            </tr>

        @endforeach
        </tbody>
    </table>

@endsection()


