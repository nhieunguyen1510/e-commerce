@extends('layouts.main')

@section('title','Đăng nhập')
@section('content')
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading"><strong>Login</strong></div>
            <div class="panel-body">

                @if(session('thongbao'))
                <div class="alert alert-danger">
                    {{session('thongbao')}}
                </div>
                @endif

                <form id="formDangNhap" name="formDangNhap" action="{{ URL::Route('dangnhap.post') }}" method="POST" novalidate="novalidate" role="form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="txtTenDangNhap">Tên đăng nhập </label>
                        <input class="form-control" type="text" id="txtTenDangNhap" name="txtTenDangNhap" maxlength="50" placeholder="Nhập tên đăng nhập"/>
                    </div>
                    <div class="form-group">
                        <label for="txtMatKhau">Mật khẩu </label>
                        <input class="form-control" type="password" id="txtMatKhau" name="txtMatKhau" maxlength="50" placeholder="Nhập mật khẩu" />
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 form-group">
                            <button class="btn btn-primary form-control" type="submit">Đăng nhập</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="text-center"><a href="{{ URL::Route('dangky.index') }}">Quên mật khẩu?</a></p>
                    </div>
                </form>
            </div>
        </div>
        <p class="text-center">Bạn không có tài khoản? <a href="{{ URL::Route('dangky.index') }}">Đăng ký tài khoản mới </a></p>
    </div>
@endsection