@extends('layouts.nguoi-ban.layouts.main') @section('title','Chi Tiết Đơn Hàng') @section('content')
<!--Begin Content -->

<div>
    <div class="page-title">
        <div class="title_left">
            <h2>
                <ul class="breadcrumb">
                    <li><a href="#">Đơn hàng</a></li>
                    <li class="active">{{$donHang->id}}</li>
                </ul>
            </h2>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">

                <div class="x_title">
                    <h2>Thông tin giao hàng</h2>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <br />
                
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                        <div class="profile_img">
                            <div id="crop-avatar">
                                <!-- Ảnh đại diện của người mua -->
                                <img class="img-responsive avatar-view" src="{{$anhDaiDien}}" alt="Avatar" title="Change the avatar" width="220px" height="220px">
                            </div>
                        </div>

                        <br>
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">

                            <div class="col-md-12">
                                <div class="card">
                                    <br>
                                    <div class="content">

                                        <div class="row">
                                            <div class="col-md-5">
                                                <h4>Người mua: {{$thongTinNguoiMua->ho.' '.$thongTinNguoiMua->ten}}</h4>
                                                <h4>Người nhận: {{$donHang->ten_nguoi_nhan}}</h4>
                                                <h4>Ngày giao hàng: {{$donHang->ngay_giao_hang}}</h4>
                                                <h4>Số điện thoại: {{$donHang->so_dien_thoai_giao_hang}}</h4>
                                                <h4>Địa chỉ: {{$donHang->dia_chi_giao_hang}}</h4>
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

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">

                <div class="x_title">
                    <h2>Danh sách chi tiết đơn hàng</h2>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <br />

                    <table id="datatable" class="table table-striped table-bordered" name="datatable">
                        <thead>
                            <tr>
                                <th class="col-md-1">STT</th>
                                <th class="col-md-4">Tên sản phẩm</th>
                                <th class="col-md-1">Số lượng</th>
                                <th class="col-md-1">Đơn giá</th>
                                <th class="col-md-2">Tổng phụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($donHang->dsChiTietDonHang($itemsPerPage) as $key=>$chiTietDonHang)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$chiTietDonHang->san_pham->ten}}</td>
                                <td>{{$chiTietDonHang->so_luong}}</td>
                                <td>{{$chiTietDonHang->don_gia_san_pham}}</td>
                                <td>{{$chiTietDonHang->tong_tien}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$donHang->dsChiTietDonHang($itemsPerPage)->links()}}
                </div>
            </div>
        </div>
    </div>


</div>

<!-- End Content -->

@endsection