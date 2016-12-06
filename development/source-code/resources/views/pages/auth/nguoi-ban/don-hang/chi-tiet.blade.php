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

                <div class="x_content">
                    <br />

                    <table id="datatable" class="table table-striped table-bordered" name="datatable">
                        <thead>
                            <tr>
                                <th class="col-md-1">STT</th>
                                <th class="col-md-2">Tên sản phẩm</th>
                                <th class="col-md-4">Số lượng</th>
                                <th class="col-md-2">Đơn giá</th>
                                <th class="col-md-1">Tổng phụ</th>
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