@extends('layouts.nguoi-ban.layouts.main') @section('title','Danh sách sản phẩm') @section('content')
<!--Begin Content -->

<div class="row tile_count">
    <div class="page-title">
        <div class="title_left">
            <!-- Breadcrumbs go here -->
            <h2>
                <ul class="breadcrumb">
                    <li><a href="#">Sản phẩm</a></li>
                    <li class="active">Danh sách sản phẩm</li>
                </ul>
            </h2>
            <button class="btn"><a href="{{URL::Route('nguoiban-sanpham.create')}}">Thêm mới</a></button>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" name="search_input" id="search_input">
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
                    <h2>Danh sách sản phẩm</h2>
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
                            @foreach($dsSanPham as $key=>$sanPham)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$sanPham->ten}}</td>
                                <td>{{$sanPham->so_luong_ton_kho}}</td>
                                <td>{{$sanPham->gia_ban_hien_tai}}</td>
                                <td>{{$sanPham->tinh_trang->tinh_trang}}</td>
                                <td>
                                    <center>
                                        <a href="{{URL::Route('sanpham.show', ['idSanPham' => $sanPham->id])}}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Xem chi tiết </a>
                                        @if($sanPham->id_tinh_trang == 1)
                                            <a href="{{URL::Route('nguoiban-sanpham.update', ['idSanPham' => $sanPham->id])}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Hết hàng </a>
                                        @endif
                                    </center>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$dsSanPham->links()}}

                </div>
            </div>
        </div>
    </div>

    <!-- Table dynamics -->
</div>

<!-- End Content -->

@endsection