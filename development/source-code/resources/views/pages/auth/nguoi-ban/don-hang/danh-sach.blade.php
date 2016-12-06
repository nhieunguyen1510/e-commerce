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

    <div class="row">
        <!--Form dùng để submit lọc điều kiện gửi request lên controller xử lý với method là GET-->
        <form action="" method="GET" name="form_loc">

            <div class="col-md-2 col-sm-2 col-xs-12 form-group">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" name="search_input" id="search_input">
                </div>
            </div>
            

            <div class="col-md-2 col-sm-2 col-xs-12">
                <div class="form-group">
                    <select class="form-control" name="tinhtrang" id="tinhtrang">
                        <option value="" @php if($idTinhTrang == null) echo 'selected'; @endphp>Tình trạng</option>
                        @foreach($dsTinhTrang as $tinhTrang)
                            @if( $tinhTrang->bang == 'san_pham')
                            <option value="{{$tinhTrang->id}}" @php if($tinhTrang->id == $idTinhTrang) echo 'selected'; @endphp>{{ $tinhTrang->tinh_trang }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="row">
                    <div class="form-group">

                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <input type="number" class="form-control " placeholder="Gía thấp" name="cost_min" id="cost_min" value="">
                        </div>

                        <div class="col-md-1 col-sm-1 col-xs-12"><span style="font-size : 20px;">></span></div>

                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <input type="number" class="form-control" placeholder="Gía cao" name="cost_max" id="cost_max" value="">

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-1 col-sm-1 col-xs-12">
                <div class="form-group">
                    <button class="btn btn-default" type="submit">Lọc</button>
                </div>
            </div>

        </form>
    </div>
    
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
                                <th class="col-md-2">Tên người nhận</th>
                                <th class="col-md-4">Địa chỉ giao hàng</th>
                                <th class="col-md-2">Tổng tiền</th>
                                <th class="col-md-1">Tình trạng</th>
                                <th class="col-md-3">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dsDonHang as $key=>$donHang)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$donHang->ten_nguoi_nhan}}</td>
                                <td>{{$donHang->dia_chi_giao_hang}}</td>
                                <td>{{$donHang->tong_tien}}</td>
                                <td>{{$donHang->tinh_trang->tinh_trang}}</td>
                                <td>
                                    <center>
                                        <a href="{{URL::Route('nguoiban-donhang.show', ['idDonHang' => $donHang->id])}}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Xem </a>
                                        @if($donHang->id_tinh_trang != 7)
                                            @if($donHang->id_tinh_trang == 3)
                                            <a href="{{URL::Route('nguoiban-donhang.update', ['idDonHang' => $donHang->id, 'idTinhTrang' => 4])}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Đã liên lạc </a>
                                            @elseif($donHang->id_tinh_trang == 4)
                                            <a href="{{URL::Route('nguoiban-donhang.update', ['idDonHang' => $donHang->id, 'idTinhTrang' => 5])}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Giao thành công </a>
                                            <a href="{{URL::Route('nguoiban-donhang.update', ['idDonHang' => $donHang->id, 'idTinhTrang' => 6])}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Giao thất bại </a>
                                            @endif
                                            <a href="{{URL::Route('nguoiban-donhang.update', ['idDonHang' => $donHang->id, 'idTinhTrang' => 7])}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Hủy </a>
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