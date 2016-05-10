@extends('layout.backend.lecturer.master')
@section('title')
    <div class="col-lg-12">
        <h1 class="page-header">Giảng dạy
            <small>Cập nhật thông tin</small>
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
                <input class="form-control" id="txtCV" name="txtCV" placeholder="Nhập tên công việc" value ="{!! old('txtCV', isset($data) ? $data['TenGD'] : null) !!}"/>


            </div>
            <div class="form-group">
                <label>Mã môn học</label>
                <input class="form-control" id="txtMH" name="txtMH" placeholder="Nhập mã môn học" value ="{!! old('txtMH', isset($data) ? $data['MaMH'] : null) !!}"/>
            </div>

            <div class="form-group">
                <label>Thời gian bắt đầu</label>
                <input class="form-control" type='date' name="tgBD" value ="{!! old('tgBD', isset($data) ? $data['TgBD'] : null) !!}"/>
            </div>

            <div class="form-group">
                <label>Thời gian kết thúc</label>
                <input class="form-control" type='date' name="tgKT" value ="{!! old('tgKT', isset($data) ? $data['TgKT'] : null) !!}"/>
            </div>

            <div class="form-group">
                <label>Trạng thái</label>
                <label class="radio-inline">
                    <input name="rdoLevel" value="Mở" checked="" type="radio" value ="{!! old('rdoLevel', isset($data) ? $data['Trangthai'] : null) !!}">Mở
                </label>
                <label class="radio-inline">
                    <input name="rdoLevel" value="Hoàn thành" type="radio" value ="{!! old('rdoLevel', isset($data) ? $data['Trangthai'] : null) !!}">Hoàn thành
                </label>
            </div>

            <button type="submit" class="btn btn-default">Cập nhật</button>
            <button type="reset" class="btn btn-default">Reset</button>
            </form>
    </div>
@endsection()