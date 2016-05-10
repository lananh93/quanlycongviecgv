@extends('layout.backend.lecturer.master')
@section('title')
    <div class="col-lg-12">
        <h1 class="page-header">Công việc
            <small>Thêm mới</small>
        </h1>
    </div>
@endsection()
@section('content')
    <div class="col-lg-7" style="padding-bottom:120px">
        <form action="" method="POST">
            @include('errors.error')
            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
            <div class="form-group">

                <label>Tên công việc</label>
                <input class="form-control" id="txtCV" name="txtCV" placeholder="Nhập tên công việc" value ="{!! old('txtCV', isset($data) ? $data['TenCV'] : null) !!}"/>


            </div>
            <div class="form-group">
                <label>Loại công việc</label>
                <label class="radio-inline">
                    <input name="rdoLevel" value="1" checked="" type="radio" value ="{!! old('txtCV', isset($data) ? $data['TenCV'] : null) !!}">Giảng dạy
                </label>
                <label class="radio-inline">
                    <input name="rdoLevel" value="2" type="radio" value ="{!! old('rdoLevel', isset($data) ? $data['Loai'] : null) !!}">Nghiên cứu khoa học
                </label>
                <label class="radio-inline">
                    <input name="rdoLevel" value="3" type="radio" value ="{!! old('rdoLevel', isset($data) ? $data['Loai'] : null) !!}">Khác
                </label>
            </div>

            <div class="form-group">
                <label>Thời gian</label>
                <input class="form-control" name="txtTG" value ="{!! old('txtTG', isset($data) ? $data['Thoigian'] : null) !!}"/>
            </div>

            <div class="form-group">
                <label>Số lượng sinh viên</label>
                <input class="form-control" name="txtSL" value ="{!! old('txtSL', isset($data) ? $data['SoluongSV'] : null) !!}"/>
            </div>

            <button type="submit" class="btn btn-default">Cập nhật</button>
            <button type="reset" class="btn btn-default">Reset</button>
            </form>
    </div>
@endsection()