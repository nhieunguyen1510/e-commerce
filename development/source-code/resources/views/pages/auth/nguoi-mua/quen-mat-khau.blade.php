@extends('layouts.main')

@section('title','Quên mật khẩu')
@section('content')

    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"><strong>Quên mật khẩu</strong></div>
            <div class="panel-body">

                @if(session('thongbao'))
                    <div class="alert alert-danger" ng-hide="txtThongBao">
                        {{session('thongbao')}}
                    </div>
                @endif

                <form id="formQuenMatKhau" name="formQuenMatKhau" action="{{ URL::Route('quenmatkhau.post') }}" method="POST" role="form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="txtEmail">Email </label>
                        <input class="form-control" type="email" id="txtEmail" name="txtEmail" maxlength="50" required="required" placeholder="Nhập email"/>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 form-group">
                            <button class="btn btn-primary form-control" type="submit">Khôi phục mật khẩu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection