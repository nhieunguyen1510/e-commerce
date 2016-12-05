@extends('layouts.nguoi-ban.layouts.main') @section('title','Danh sách đơn hàng') @section('content')
<!--Begin Content -->

<div class="row tile_count">
    <div class="page-title">
        <div class="title_left">
            <!-- Breadcrumbs go here -->
            <h2>
                <ul class="breadcrumb">
                    <li><a href="#">Đơn hàng</a></li>
                    <li class="active">Danh sách đơn hàng</li>
                </ul>
            </h2>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Nhập mã đơn hàng" name="search_input" id="search_input">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Tìm</button>
                      </span>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <!-- Table dynamics -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Danh sách đơn hàng</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered" name="datatable">
                        <thead>
                            <tr>
                                <th class="col-md-1">STT</th>
                                <th class="col-md-4">Tên sản phẩm</th>
                                <th class="col-md-1">Số lượng</th>
                                <th class="col-md-1">Giá bán</th>
                                <th class="col-md-1">Tình trạng</th>
                                <th class="col-md-4">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dsDonHang as $key=>$donHang)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$donHang->ten}}</td>
                                <td>{{$donHang->so_luong_ton_kho}}</td>
                                <td>{{$donHang->gia_ban_hien_tai}}</td>
                                <td>{{$donHang->tinh_trang->tinh_trang}}</td>
                                <td>
                                    <center>
                                        <a href="{{URL::Route('sanpham.show', ['idSanPham' => $sanPham->id])}}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Xem chi tiết </a>
                                        @if($donHang->id_tinh_trang == 1)
                                            <a href="{{URL::Route('nguoiban-sanpham.update', ['idSanPham' => $sanPham->id])}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Hết hàng </a>
                                        @endif
                                    </center>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$dsDonHang->links()}}

                </div>
            </div>
        </div>
    </div>

    <!-- Table dynamics -->
</div>

<!-- End Content -->

@endsection