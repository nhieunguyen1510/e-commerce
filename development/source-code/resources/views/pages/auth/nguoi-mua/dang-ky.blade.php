@extends('layouts.main')

@section('title','Đăng ký')
@section('content')
    <div ng-controller="FormDangKyCtrl" class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading"><strong>Đăng ký tài khoản</strong></div>
            <div class="panel-body">
                @if(count($errors) > 0 )
                  <div class="alert alert-danger" fade in>
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    @foreach($errors->all() as $err)
                        {{ $err }}<br/>
                    @endforeach
                  </div>
                  @endif
                <div class="alert alert-danger" ng-bind="txtThongBao" ng-show="txtThongBao">
                </div>

                <form action="{{ URL::Route('dangky.post') }}" method="POST" id="formDangKy" name="formDangKy" ng-app="myApp" role="form" novalidate="novalidate">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="txtTenDangNhap">Tên đăng nhập <span class="text-danger">&#042</span></label>
                        <input class="form-control" id="txtTenDangNhap" name="txtTenDangNhap" ng-model="txtTenDangNhap" ng-required="true" ng-maxlength="50" placeholder="Nhập tên đăng nhập"  />
                        <i class="fa fa-check text-success" ng-show="formDangKy.txtTenDangNhap.$dirty && formDangKy.txtTenDangNhap.$valid"></i>
                        <div ng-show="formDangKy.txtTenDangNhap.$dirty && formDangKy.txtTenDangNhap.$invalid" class="text-danger">
                            <i class="fa fa-times text-danger"></i>
                            <span ng-show="formDangKy.txtTenDangNhap.$error.required">Tên đăng nhập không được bỏ trống</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtTen">Tên <span class="text-danger">&#042</span></label>
                        <input class="form-control" id="txtTen" name="txtTen" ng-model="txtTen" ng-required="true" ng-maxlength="50" placeholder="Nhập tên" />
                        <i class="fa fa-check text-success" ng-show="formDangKy.txtTen.$dirty && formDangKy.txtTen.$valid"></i>
                        <div ng-show="formDangKy.txtTen.$dirty && formDangKy.txtTen.$invalid" class="text-danger">
                            <i class="fa fa-times text-danger"></i>
                            <span ng-show="formDangKy.txtTen.$error.required">Tên không được bỏ trống</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtHo">Họ <span class="text-danger">&#042</span></label>
                        <input class="form-control" id="txtHo" name="txtHo" ng-model="txtHo" ng-required="true" ng-maxlength="50" placeholder="Nhập họ" />
                        <i class="fa fa-check text-success" ng-show="formDangKy.txtHo.$dirty && formDangKy.txtHo.$valid"></i>
                        <div ng-show="formDangKy.txtHo.$dirty && formDangKy.txtHo.$invalid" class="text-danger">
                            <i class="fa fa-times text-danger"></i>
                            <span ng-show="formDangKy.txtHo.$error.required">Họ không được bỏ trống</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtEmail">Email <span class="text-danger">&#042</span></label>
                        <input class="form-control" id="txtEmail" name="txtEmail" ng-model="txtEmail" ng-required="true" ng-maxlength="50" placeholder="Nhập email" type="email" autocomplete="off" />
                        <i class="fa fa-check text-success" ng-show="formDangKy.txtEmail.$dirty && formDangKy.txtEmail.$valid"></i>
                        <div ng-show="formDangKy.txtEmail.$dirty && formDangKy.txtEmail.$invalid" class="text-danger">
                            <i class="fa fa-times text-danger"></i>
                            <span ng-show="formDangKy.txtEmail.$error.required">Email không được bỏ trống</span>
                            <span ng-show="formDangKy.txtEmail.$error.email">Email không đúng định dạng</span>
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label for="txtSoDienThoai">Số điện thoại <span class="text-danger">&#042</span></label>
                        <input class="form-control" id="txtSoDienThoai" name="txtSoDienThoai" ng-pattern="phoneNumberPattern" ng-model="txtSoDienThoai" ng-required="true" ng-maxlength="10" placeholder="Nhập số điện thoại" type="text" />
                        <i class="fa fa-check text-success" ng-show="formDangKy.txtSoDienThoai.$dirty && formDangKy.txtSoDienThoai.$valid"></i>
                        <div ng-show="formDangKy.txtSoDienThoai.$dirty && formDangKy.txtSoDienThoai.$invalid" class="text-danger">
                            <i class="fa fa-times text-danger"></i>
                            <span ng-show="formDangKy.txtSoDienThoai.$error.required">Số điện thoại không được bỏ trống</span>
                            <span ng-show="formDangKy.txtSoDienThoai.$error.number">Số điện thoại không đúng định dạng</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtDiaChi">Địa chỉ <span class="text-danger">&#042</span></label>
                        <input class="form-control" id="txtDiaChi" name="txtDiaChi" ng-model="txtDiaChi" ng-required="true" ng-maxlength="255" placeholder="Nhập địa chỉ" />
                        <i class="fa fa-check text-success" ng-show="formDangKy.txtDiaChi.$dirty && formDangKy.txtDiaChi.$valid"></i>
                        <div ng-show="formDangKy.txtDiaChi.$dirty && formDangKy.txtDiaChi.$invalid" class="text-danger">
                            <i class="fa fa-times text-danger"></i>
                            <span ng-show="formDangKy.txtDiaChi.$error.required">Địa chỉ không được bỏ trống</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <ng-form name="txtGioiTinhGroup">
                            <label for="txtGioiTinh">Giới tinh <span class="text-danger">&#042</span></label>
                            <div class="radio">
                                <label><input type="radio" name="txtGioiTinh" ng-model="txtGioiTinh" ng-required="true" value="0">Nam</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="txtGioiTinh" ng-model="txtGioiTinh" ng-required="true" value="1">Nữ</label>
                            </div>
                        </ng-form>
                        <i class="fa fa-check text-success" ng-show="formDangKy.txtGioiTinhGroup.$dirty && formDangKy.txtGioiTinhGroup.$valid"></i>
                        <div ng-show="formDangKy.txtGioiTinhGroup.$dirty && formDangKy.txtGioiTinh.$invalid" class="text-danger">
                            <i class="fa fa-times text-danger"></i>
                            <span ng-show="formDangKy.txtGioiTinh.$error.required">Giới tính không được bỏ trống</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtMatKhau">Mật khẩu <span class="text-danger">&#042</span></label>
                        <input class="form-control" id="txtMatKhau" name="txtMatKhau" ng-model="txtMatKhau" ng-required="true" ng-minlength="6" ng-maxlength="30" placeholder="Nhập mật khẩu" type="password"/>
                        <i class="fa fa-check text-success" ng-show="formDangKy.txtMatKhau.$dirty && formDangKy.txtMatKhau.$valid"></i>
                        <div ng-show="formDangKy.txtMatKhau.$dirty && formDangKy.txtMatKhau.$invalid" class="text-danger">
                            <i class="fa fa-times text-danger"></i>
                            <span ng-show="formDangKy.txtMatKhau.$error.required">Mật khẩu không được bỏ trống</span>
                            <span ng-show="formDangKy.txtMatKhau.$error.minlength">Mật khẩu phải dài hơn 5 ký tự</span>
                        </div>       
                    </div>
                    
                    <div class="col-md-4 col-md-offset-4 form-group">
                        <button class="btn btn-primary form-control" type="button" ng-click="dangKy(formDangKy.$valid)">Đăng ký</button>
                    </div>
                    </form>
            </div>
        </div>
    <p class="text-center">Bạn đã có tài khoản?<a href="{{URL::Route('dangnhap.get')}"> Đăng nhập</a></p>
    </div>
@endsection