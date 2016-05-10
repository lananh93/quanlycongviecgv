@extends('layout.backend.lecturer.master')
@section('title')
    <div class="col-lg-12">
        <h1 class="page-header">Giảng dạy
            <small>Thêm mới</small>
        </h1>
    </div>
@endsection()
@section('content')
    <div class="col-lg-7" style="padding-bottom:120px">
        @include('errors.error')
        <form action="{!! route('work::postaddlec') !!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>

            <div class="form-group">
                <label>Tên công việc giảng dạy</label>
                <input class="form-control" id="txtCV" name="txtCV" placeholder="Nhập tên công việc"/>
            </div>

            <div class="form-group">
                <label>Mã môn học</label>
                <input class="form-control" id="txtMH" name="txtMH" placeholder="Nhập mã môn học"/>
            </div>

            <div class="form-group">
                <label>Thời gian bắt đầu</label>
                <input class="form-control" type='date' name="tgBD"/>
            </div>

            <div class="form-group">
                <label>Thời gian kết thúc</label>
                <input class="form-control" type='date' name="tgKT"/>
            </div>

            <div class="form-group">
                <label>Trạng thái</label>
                <label class="radio-inline">
                    <input name="rdoLevel" value="Mở" checked="" type="radio">Mở
                </label>
                <label class="radio-inline">
                    <input name="rdoLevel" value="Hoàn thành" type="radio">Hoàn thành
                </label>
            </div>

            <button type="submit" class="btn btn-default">Thêm công việc</button>
            <button type="reset" class="btn btn-default">Reset</button>
            </form>
    </div>
@endsection()