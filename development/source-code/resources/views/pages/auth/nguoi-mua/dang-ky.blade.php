@extends('layouts.main')

@section('title','Đăng ký')
@section('content')
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading"><strong>Đăng ký tài khoản</strong></div>
            <div class="panel-body">
                <form action="{{ URL::Route('dangky.post') }}" method="POST" id="formDangKy" name="formDangKy" role="form">
                    {{ csrf_field() }}
                    <div class="form-group"\>
                        <label for="txtTenDangNhap">Tên đăng nhập <span class="text-danger">&#042</span></label>
                        <input class="form-control" id="txtTenDangNhap" name="txtTenDangNhap" placeholder="Nhập tên đăng nhập" />
                    </div>
                    <div class="form-group">
                        <label for="txtTen">Tên <span class="text-danger">&#042</span></label>
                        <input class="form-control" id="txtTen" name="txtTen" maxlength="50" placeholder="Nhập tên" />
                    </div>
                    <div class="form-group">
                        <label for="txtHo">Họ <span class="text-danger">&#042</span></label>
                        <input class="form-control" id="txtHo" name="txtHo" placeholder="Nhập họ" />
                    </div>
                    <div class="form-group">
                        <label for="txtEmail">Email <span class="text-danger">&#042</span></label>
                        <input class="form-control" id="txtEmail" name="txtEmail" placeholder="Nhập email" type="email" />
                    </div>
                    <div class="form-group">
                        <label for="txtGioiTinh">Giới tinh <span class="text-danger">&#042</span></label>
                        <div class="radio">
                            <label><input type="radio" name="txtGioiTinh" value="0">Nam</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="txtGioiTinh" value="1">Nữ</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtMatKhau">Mật khẩu <span class="text-danger">&#042</span></label>
                        <input class="form-control" id="txtMatKhau" name="txtMatKhau" maxlength="50" placeholder="Nhập mật khẩu" type="password"/>       
                    </div>
                    <div class="col-md-4 col-md-offset-4 form-group"><button class="btn btn-primary form-control" type="submit">Đăng ký</button></div>
                    </form>
            </div>
        </div>
    <p class="text-center">Bạn đã có tài khoản?<a href="{{URL::Route('dangnhap.get')}"> Đăng nhập</a></p>
    </div>
@endsection