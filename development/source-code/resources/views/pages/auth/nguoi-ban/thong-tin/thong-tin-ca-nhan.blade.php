@extends('layouts.nguoi-ban.layouts.main') @section('title','Thông tin cá nhân') @section('content')
<!--Begin Content -->
<!-- page content -->
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

                    <form action="{{URL::Route('nguoiban-thongtin.post')}}" method="POST" name="form_sua_thong_tin" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive avatar-view" src="{{$anhDaiDien}}" alt="Avatar" title="Change the avatar" width="220px" height="220px" accept="image/*">
                                </div>
                            </div>
                            <h3>Samuel Doe</h3>
                            <input type="file" name="anh_dai_dien" />

                            <br/>
                            <button type="button" class="btn btn-primary btn-fill btn-wd">Đổi mật khẩu</button>

                            <br />

                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">

                            <div class="profile_title">
                                <div class="col-md-6">
                                    <h2>Thông tin chi tiết</h2>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="card">
                                    <br/>
                                    <div class="content">

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Họ</label>
                                                    <input type="text" class="form-control border-input" name="txt_ho" placeholder="Họ" value="{{$ho}}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Tên</label>
                                                    <input type="text" class="form-control border-input" name="txt_ten" placeholder="Tên" value="{{$ten}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="txt_ten_shop">Tên shop</label>
                                                    <input type="text" class="form-control border-input" name="txt_ten_shop" placeholder="Tên shop" value="{{$tenShop}}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Tên đăng nhập</label>
                                                    <input type="text" class="form-control border-input" name="txt_ten_dang_nhap" placeholder="Tên đăng nhập" value="{{$tenDangNhap}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="txt_email">Email</label>
                                                    <input type="email" class="form-control border-input" name="txt_email" placeholder="Email" value="{{$email}}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Số điện thoại</label>
                                                    <input type="text" class="form-control border-input" placeholder="Số điện thoại" name="txt_sdt" value="{{$soDienThoai}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <label>Giới tính</label>
                                                    <br/>
                                                    <input type="radio" name="txt_gioi_tinh" value="0" @php if ($gioiTinh == 0) echo "checked"  @endphp> Nam <span style="padding-left: 5em;"></span>
                                                    <input type="radio" name="txt_gioi_tinh" value="1" @php if ($gioiTinh == 1) echo "checked"  @endphp> Nữ <span style="padding-left: 5em;"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Địa chỉ</label>
                                                    <input type="text" class="form-control border-input" placeholder="Địa chỉ" name="txt_diachi" value="{{$diaChi}}">
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
<!-- /page content -->

@endsection