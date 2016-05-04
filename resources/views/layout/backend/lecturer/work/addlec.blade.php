@extends('layout.backend.lecturer.master')
@section('title')
    <div class="col-lg-12">
        <h1 class="page-header">Công việc
            <small>Thêm mới</small>
        </h1>
    </div>
@endsection()
@section('content')

    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                <li>{!! $errors->first('txtCV') !!}</li>
            </ul>
        </div>
        @endif
    <div class="col-lg-7" style="padding-bottom:120px">
        <form action="{!! route('work::addlec') !!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
            <div class="form-group">
                <label>Tên công việc</label>
                <input class="form-control" id="txtCV" name="txtCV" placeholder="Nhập tên công việc"/>

            </div>
            <div class="form-group">
                <label>Loại công việc</label>
                <label class="radio-inline">
                    <input name="rdoLevel" value="1" checked="" type="radio">Giảng dạy
                </label>
                <label class="radio-inline">
                    <input name="rdoLevel" value="2" type="radio">Nghiên cứu khoa học
                </label>
                <label class="radio-inline">
                    <input name="rdoLevel" value="3" type="radio">Khác
                </label>
            </div>

            <div class="form-group">
                <label>Thời gian</label>
                <input class="form-control" name="txtTG"/>
            </div>

            <div class="form-group">
                <label>Số lượng sinh viên</label>
                <input class="form-control" name="txtSL"/>
            </div>

            <button type="submit" class="btn btn-default">Thêm công việc</button>
            <button type="reset" class="btn btn-default">Reset</button>
            <form>
    </div>
@endsection()