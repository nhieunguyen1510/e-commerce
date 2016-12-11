@extends('layouts.nguoi-ban.layouts.main') @section('title','Thông tin cá nhân') @section('content')
<!--Begin Content -->
<!-- page content -->
<div ng-controller="FormThongTinCaNhanCtrl">
    <div class="">

        <div class="page-title">
            <div class="title_left">
                <!-- Breadcrumbs go here -->
                <h2>
                    <ul class="breadcrumb">
                        <li><a href="">Thông tin cá nhân</a></li>
                        <li class="active">Thông tin</li>
                    </ul>
                </h2>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Thông tin</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        

                    @if(session('thongbao'))
                    <div class="alert alert-danger" ng-hide="txtThongBao">
                        {{session('thongbao')}}
                    </div>
                    @endif

                        <form action="{{URL::Route('nguoiban-thongtin.post')}}" method="POST" name="form_sua_thong_tin" ng-submit="submitThongTin(form_sua_thong_tin.$valid, $event)" enctype="multipart/form-data" novalidate>
                            {{ csrf_field() }}

                            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                <div class="profile_img">
                                    <div id="crop-avatar">
                                        <!-- Current avatar -->
                                        <img class="img-responsive avatar-view" src="{{$anhDaiDien}}" alt="Avatar" title="Change the avatar" width="220px" height="220px" accept="image/*">
                                    </div>
                                </div>
                                <h3>{{Auth::guard('nguoi_ban')->user()->ten_dang_nhap}}</h3>
                                <input type="file" name="anh_dai_dien" />

                                <br/>
                                <button type="button" class="btn btn-primary btn-fill btn-wd" data-toggle="modal" data-target="#myModal">Đổi mật khẩu</button>


                                <br />

                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">

                                <div class="profile_title">
                                    <div class="col-md-6">
                                        <h2>Thông tin chi tiết</h2>
                                    </div>
                                </div>

                                <div ng-show="(form_sua_thong_tin.$dirty || isSubmitted) && form_sua_thong_tin.$invalid" class="text-danger">
                                    <i class="fa fa-times text-danger"></i>
                                    <span ng-show="form_sua_thong_tin.txt_ho.$error.required">Họ không được bỏ trống<br></span>
                                    <span ng-show="form_sua_thong_tin.txt_ho.$error.maxlength">Họ không quá 255 ký tự<br></span>
                                    <span ng-show="form_sua_thong_tin.txt_ten.$error.required">Tên không được bỏ trống<br></span>
                                    <span ng-show="form_sua_thong_tin.txt_ten.$error.maxlength">Tên không quá 255 ký tự<br></span>
                                    <span ng-show="form_sua_thong_tin.txt_ten_shop.$error.required">Tên shop không được bỏ trống<br></span>
                                    <span ng-show="form_sua_thong_tin.txt_ten_shop.$error.maxlength">Tên shop không quá 255 ký tự<br></span>
                                    <span ng-show="form_sua_thong_tin.txt_ten_dang_nhap.$error.required">Tên đăng nhập không được bỏ trống<br></span>
                                    <span ng-show="form_sua_thong_tin.txt_ten_dang_nhap.$error.maxlength">Tên đăng nhập không quá 255 ký tự<br></span>
                                    <span ng-show="form_sua_thong_tin.txt_email.$error.required">Email không được bỏ trống<br></span>
                                    <span ng-show="form_sua_thong_tin.txt_email.$error.maxlength">Email không quá 255 ký tự<br></span>
                                    <span ng-show="form_sua_thong_tin.txt_email.$error.email">Email không đúng định dạng<br></span>
                                    <span ng-show="form_sua_thong_tin.txt_diachi.$error.required">Địa chỉ không được bỏ trống<br></span>
                                    <span ng-show="form_sua_thong_tin.txt_diachi.$error.maxlength">Địa chỉ không quá 255 ký tự<br></span>
                                    <span ng-show="form_sua_thong_tin.txt_sdt.$error.required">Số điện thoại không được bỏ trống<br></span>
                                    <span ng-show="form_sua_thong_tin.txt_sdt.$error.pattern">Số điện thoại không đúng định dạng<br></span>
                                </div>

                                <div class="col-md-12">
                                    <div class="card">
                                        <br/>
                                        <div class="content">

                                            <div class="row">
                                                <div class="col-md-5" ng-init="txt_ho='{{$ho}}'">
                                                    <div class="form-group">
                                                        <label>Họ</label>
                                                        <input type="text" class="form-control border-input" name="txt_ho" ng-model="txt_ho" ng-required="true" ng-maxlength="255" placeholder="Họ">
                                                    </div>
                                                </div>
                                                <div class="col-md-5" ng-init="txt_ten='{{$ten}}'">
                                                    <div class="form-group">
                                                        <label>Tên</label>
                                                        <input type="text" class="form-control border-input" name="txt_ten" ng-model="txt_ten" ng-required="true" ng-maxlength="255" placeholder="Tên">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-5" ng-init="txt_ten_shop='{{$tenShop}}'">
                                                    <div class="form-group">
                                                        <label for="txt_ten_shop">Tên shop</label>
                                                        <input type="text" class="form-control border-input" name="txt_ten_shop" ng-model="txt_ten_shop" ng-required="true" ng-maxlength="255" placeholder="Tên shop">
                                                    </div>
                                                </div>
                                                <div class="col-md-5" ng-init="txt_ten_dang_nhap='{{$tenDangNhap}}'">
                                                    <div class="form-group">
                                                        <label>Tên đăng nhập</label>
                                                        <input type="text" class="form-control border-input" name="txt_ten_dang_nhap" ng-model="txt_ten_dang_nhap" ng-required="true" ng-maxlength="255" placeholder="Tên đăng nhập">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-5" ng-init="txt_email='{{$email}}'">
                                                    <div class="form-group">
                                                        <label for="txt_email">Email</label>
                                                        <input type="email" class="form-control border-input" name="txt_email" ng-model="txt_email" ng-required="true" ng-maxlength="255" autocomplete="off" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-5" ng-init="txt_sdt='{{$soDienThoai}}'">
                                                    <div class="form-group">
                                                        <label>Số điện thoại</label>
                                                        <input type="text" class="form-control border-input" ng-pattern="phoneNumberPattern" ng-model="txt_sdt" ng-required="true" ng-maxlength="10" placeholder="Số điện thoại" name="txt_sdt">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6" ng-init="txt_gioi_tinh='{{$gioiTinh}}'">
                                                    <div class="form-group">

                                                        <label>Giới tính</label>
                                                        <br/>
                                                        <input type="radio" name="txt_gioi_tinh" ng-model="txt_gioi_tinh" ng-required="true" ng-maxlength="10" value="0"> Nam <span style="padding-left: 5em;"></span>
                                                        <input type="radio" name="txt_gioi_tinh" ng-model="txt_gioi_tinh" ng-required="true" ng-maxlength="10" value="1"> Nữ <span style="padding-left: 5em;"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-8" ng-init="txt_diachi='{{$diaChi}}'">
                                                    <div class="form-group">
                                                        <label>Địa chỉ</label>
                                                        <input type="text" class="form-control border-input" placeholder="Địa chỉ" name="txt_diachi" ng-model="txt_diachi" ng-required="true" ng-maxlength="255">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Ngày tạo</label>
                                                        <p style="font-size:14px">{{$ngayTao}}</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Ngày cập nhật</label>
                                                        <p style="font-size:14px">{{$ngayCapNhat}}</p>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="text-center">
                                                <br/>
                                                <button type="submit" class="btn btn-info btn-fill btn-wd">Cập nhật</button>
                                                <button type="reset" class="btn btn-success btn-fill btn-wd">Hủy</button>
                                            </div>
                                            <div class="clearfix"></div>
                        </form>
                        </div>
                        </div>
                        </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- Modal -->
<form id="formDoiMatKhau" name="formDoiMatKhau" action="{{ URL::Route('nguoiban-doimatkhau.post') }}" method="POST" role="form">
     {{ csrf_field() }}
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Đổi mật khẩu</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="txtMatKhau">Mật khẩu mới </label>
                        <input class="form-control" type="password" id="txtMatKhau" name="txtMatKhau" minlength="6" maxlength="50" required="required" placeholder="Nhập mật khẩu mới" />
                    </div>

                    <div class="form-group">
                        <label for="txtMatKhauNhapLai">Nhập lại mật khẩu </label>
                        <input class="form-control" type="password" id="txtMatKhauNhapLai" name="txtMatKhauNhapLai" minlength="6" maxlength="50" required="required" placeholder="Nhập lại mật khẩu" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default">Xác nhận</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</form>

<!-- /page content -->

@endsection