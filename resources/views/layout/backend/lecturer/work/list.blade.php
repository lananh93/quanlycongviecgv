@extends('layout.backend.lecturer.master')
@section('title')
    <div class="col-lg-12">
        <h1 class="page-header">Giảng dạy
            <small>Danh sách</small>
        </h1>
    </div>
    @endsection()
    @section('content')

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

        @foreach($data as $item)

            <tr class="odd gradeX" align="center">
                <td>{!! $item["MaGD"] !!}</td>
                <td>{!! $item["MaMH"] !!}</td>
                <td>{!! $item["TenGD"] !!}</td>
                <td>{!! $item["TgBD"] !!}</td>
                <td>{!! $item["TgKT"] !!}</td>
                <td>{!! $item["Trangthai"] !!}</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có chắc muốn xóa không?')" href="{!! route('work::deletelist', $item['MaGD']) !!}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! route('work::editlist', $item['MaGD']) !!}">Edit</a></td>

            </tr>

        @endforeach
        </tbody>
    </table>

@endsection()


