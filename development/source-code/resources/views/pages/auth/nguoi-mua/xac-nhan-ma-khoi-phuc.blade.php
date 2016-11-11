@extends('layouts.main')

@section('title','Xác nhận mã khôi phục')
@section('content')

    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"><strong>Xác nhận mã khôi phục</strong></div>
            <div class="panel-body">

                @if(session('thongbao'))
                    <div class="alert alert-danger" ng-hide="txtThongBao">
                        {{session('thongbao')}}
                    </div>
                @endif

                <form id="formXacNhanMaKhoiPhuc" name="formXacNhanMaKhoiPhuc" action="{{ URL::Route('xacnhanmakhoiphuc.post') }}" method="POST" role="form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="txtEmail">Email </label>
                        <input class="form-control" type="email" id="txtEmail" name="txtEmail" maxlength="50" required="required" placeholder="Nhập email"/>
                    </div>

                    <div class="form-group">
                        <label for="txtMaKhoiPhuc">Mã khôi phục </label>
                        <input class="form-control" type="text" id="txtMaKhoiPhuc" name="txtMaKhoiPhuc" maxlength="50" required="required" placeholder="Nhập mã khôi phục"/>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 form-group">
                            <button class="btn btn-primary form-control" type="submit">Xác nhận</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection