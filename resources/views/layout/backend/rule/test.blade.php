<?php
/**
 * Created by PhpStorm.
 * User: Lan Anh
 * Date: 30/03/2016
 * Time: 12:40 SA
 */
?>
@extends('layout.backend.master')

@section('style')
    <link rel="stylesheet" href="/css/user.css">
    @endsection

    @section('script')
            <!-- Jquery Validate -->
    <script src="/assets/AdminLTE-2.3.0/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/js/user.js"></script>
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Quy định
        </h1>

    </section>

    <section class="content">
        @if (session()->has('status'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert {!! session('status') ? 'alert-success' : 'alert-danger' !!} alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4>
                            <i class="icon fa {!! session('status') ? 'fa-check' : 'fa-ban' !!}"></i> {!! session('status') ? 'Thành công!' : 'Lỗi!' !!}
                        </h4>
                        {!! session('notification') !!}
                    </div>
                </div>
            </div>
            @endif

                    <!-- Page Content -->
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h1 class="box-title">Thêm quy định</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                        <form class="form-horizontal" action="" method="POST">
                            <div class="box-body">

                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tên quy định</label>
                                <div class="col-sm-10 col-md-8">

                                    <input class="form-control" name="txtName" placeholder="Nhập tên quy định"/>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Price</label>
                                <div class="col-sm-10 col-md-8">
                                    <input class="form-control" name="txtPrice" placeholder="Please Enter Password"/>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Intro</label>
                                <div class="col-sm-10 col-md-8">
                                    <textarea class="form-control" rows="3" name="txtIntro"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Content</label>
                                <div class="col-sm-10 col-md-8">
                                    <textarea class="form-control" rows="3" name="txtContent"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Images</label>
                                <div class="col-sm-10 col-md-8">
                                    <input type="file" name="fImages">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Product Keywords</label>
                                <div class="col-sm-10 col-md-8">
                                    <input class="form-control" name="txtOrder"
                                           placeholder="Please Enter Category Keywords"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Product Description</label>
                                <div class="col-sm-10 col-md-8">
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="box-footer">

                                <button type="submit" class="btn btn-flat btn-success center-block ">Thêm</button>
                            </div>

                    </div>
                    <form>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

            <!-- /#page-wrapper -->


    </section>

@endsection
