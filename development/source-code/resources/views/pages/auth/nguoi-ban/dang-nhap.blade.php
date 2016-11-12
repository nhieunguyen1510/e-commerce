<!DOCTYPE html>
<html ng-app="minxApp" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8" name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Đăng nhập </title>

      @include('partials.css-assets')
      @include('partials.js-assets')
     
  </head>

  <body>
        <div ng-controller="FormDangNhapNguoiBanCtrl" class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Đăng nhập</strong></div>
                <div class="panel-body">

                    @if(session('thongbao'))
                        <div class="alert alert-danger" ng-hide="txtThongBao">
                            {{session('thongbao')}}
                        </div>
                    @endif

                    <div class="alert alert-danger" ng-bind="txtThongBao" ng-show="txtThongBao">
                    </div>

                    <form id="formDangNhap" name="formDangNhap" action="{{ URL::Route('dangnhap.nguoiban.post') }}" method="POST" role="form" novalidate="novalidate">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="txtTenDangNhap">Tên đăng nhập </label>
                            <input class="form-control" type="text" id="txtTenDangNhap" name="txtTenDangNhap" ng-model="txtTenDangNhap" ng-required="true" ng-maxlength="50" placeholder="Nhập tên đăng nhập"/>
                            <i class="fa fa-check text-success" ng-show="formDangNhap.txtTenDangNhap.$dirty && formDangNhap.txtTenDangNhap.$valid"></i>
                            <div ng-show="formDangNhap.txtTenDangNhap.$dirty && formDangNhap.txtTenDangNhap.$invalid" class="text-danger">
                                <i class="fa fa-times text-danger"></i>
                                <span ng-show="formDangNhap.txtTenDangNhap.$error.required">Tên đăng nhập không được bỏ trống</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txtMatKhau">Mật khẩu </label>
                            <input class="form-control" type="password" id="txtMatKhau" name="txtMatKhau" ng-model="txtMatKhau" ng-required="true" ng-minlength="6" ng-maxlength="30" placeholder="Nhập mật khẩu" />
                            <i class="fa fa-check text-success" ng-show="formDangNhap.txtMatKhau.$dirty && formDangNhap.txtMatKhau.$valid"></i>
                            <div ng-show="formDangNhap.txtMatKhau.$dirty && formDangNhap.txtMatKhau.$invalid" class="text-danger">
                                <i class="fa fa-times text-danger"></i>
                                <span ng-show="formDangNhap.txtMatKhau.$error.required">Mật khẩu không được bỏ trống</span>
                                <span ng-show="formDangNhap.txtMatKhau.$error.minlength">Mật khẩu phải dài hơn 5 ký tự</span>
                            </div>    
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 form-group">
                                <button class="btn btn-primary form-control" type="button" ng-click="dangNhap(formDangNhap.$valid)">Đăng nhập</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <p class="text-center"><a href="{{ URL::Route('quenmatkhau.index') }}">Quên mật khẩu?</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <p class="text-center">Bạn không có tài khoản? <a href="{{ URL::Route('dangky.nguoiban.index') }}">Đăng ký tài khoản mới </a></p>
        </div>
    </body>
</html>