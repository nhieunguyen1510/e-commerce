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
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <!--Form dùng để submit lọc điều kiện gửi request lên controller xử lý với method là GET-->
        <form action="" method="GET" name="form_loc">

            <div class="col-md-2 col-sm-2 col-xs-12 form-group">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Nhập tên người mua" name="ten_nguoi_mua" id="ten_nguoi_mua" value="{{$tenNguoiMua}}">
                </div>
            </div>


            <div class="col-md-2 col-sm-2 col-xs-12">
                <div class="form-group">
                    <select class="form-control" name="tinh_trang" id="tinh_trang">
                        <option value="" @php if($idTinhTrang == null) echo 'selected'; @endphp>Tình trạng</option>
                        @foreach($dsTinhTrang as $tinhTrang)
                            @if( $tinhTrang->bang == 'giao_dich')
                            <option value="{{$tinhTrang->id}}" @php if($tinhTrang->id == $idTinhTrang) echo 'selected'; @endphp>{{ $tinhTrang->tinh_trang }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="col-md-5 col-sm-3 col-xs-12">
                <div class="row">
                    <div class="form-group">

                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <input type="number" class="form-control " placeholder="Gía tối thiểu" name="total_min" id="total_min" value="{{$tongTienToiThieu}}">
                        </div>

                        <div class="col-md-1 col-sm-1 col-xs-12"><span style="font-size : 20px;"><</span></div>

                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <input type="number" class="form-control" placeholder="Gía tối đa" name="total_max" id="total_max" value="{{$tongTienToiDa}}">
                        </div>
                        <div class="col-md-1 col-sm-1 col-xs-12">
                            <div class="form-group">
                                <button class="btn btn-default" type="submit">Lọc</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-1 col-sm-1 col-xs-12">
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
                                <th class="col-md-2">Người mua</th>
                                <th class="col-md-2">Người nhận</th>
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
                                <td>{{$donHang->tai_khoan_nguoi_mua->ten}}</td>
                                <td>{{$donHang->ten_nguoi_nhan}}</td>
                                <td>{{$donHang->dia_chi_giao_hang}}</td>
                                <td>{{$donHang->tong_tien}}</td>
                                <td>{{$donHang->tinh_trang->tinh_trang}}</td>
                                <td>
                                    <center>
                                            <a href="{{URL::Route('nguoiban-donhang.show', ['idDonHang' => $donHang->id])}}" class="btn btn-primary btn-xs">
                                            <i class="fa fa-folder"></i> Xem 
                                            </a> 
                                        
                                            @if($donHang->id_tinh_trang != 7 && $donHang->id_tinh_trang != 5 && $donHang->id_tinh_trang != 6) 
                                            <form action="{{ URL::Route('nguoiban-donhang.update') }}" method="GET">
                                                <div class="input-group"> 
                                                    <input type="hidden" name="idDonHang" value="{{$donHang->id}}" />
                                                    <div class="input-group-btn"> 
                                                        <select name="idTinhTrang" class="btn btn-xs btn-default" style="height : 22px">
                                                            @foreach($dsTinhTrang as $tinhTrang)
                                                                @if($tinhTrang->bang == 'giao_dich')
                                                                    @if($tinhTrang->id != $donHang->id_tinh_trang) 
                                                                        @if($donHang->id_tinh_trang == 3 && $tinhTrang->id != 5 && $tinhTrang->id != 6)
                                                                        <option value="{{$tinhTrang->id}}">{{$tinhTrang->tinh_trang}}</option> 
                                                                        @endif
                                                                        @if($donHang->id_tinh_trang == 4 && $tinhTrang->id != 3 && $tinhTrang->id != 7)
                                                                        <option value="{{$tinhTrang->id}}">{{$tinhTrang->tinh_trang}}</option> 
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        </select>  
                                                        <button type="submit" class="btn btn-xs btn-default">Cập nhật</button>
                                                    </div>
                                                </div>
                                            </form>
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