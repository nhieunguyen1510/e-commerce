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

    <!--Form dùng để submit lọc điều kiện gửi request lên controller xử lý với method là GET-->
    <form action="" method="GET" name="form_loc">
        <div class="row">
            <div class="col-md-4 col-sm-3 col-xs-12">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="form-group">
                            <select class="form-control" name="sap_xep" id="sap_xep" onchange="this.form.submit()">
                                <option value="id_tinh_trang" @if($sapXep == 'id_tinh_trang') selected @endif>Tình trạng</option>
                                <option value="ngay_tao" @if($sapXep == 'ngay_tao') selected @endif>Ngày đặt</option>
                                <option value="tong_tien" @if($sapXep == 'tong_tien') selected @endif>Tổng tiền</option>
                            </select>
                            @if($thuTu == 'asc')
                            <input value="desc" type="hidden" name="thu_tu" />
                            @else
                            <input value="asc" type="hidden" name="thu_tu" />
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-8 col-xs-12">
                        <div class="form-group">
                            <button class="btn btn-default" type="submit">
                                @if($thuTu == 'asc')
                                <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                                @else
                                <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
                                @endif
                                    Sắp xếp
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-2 col-xs-12 form-group">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nhập địa chỉ giao hàng" name="dia_chi_giao_hang" id="dia_chi_giao_hang" value="{{$diaChiGiaoHang}}">
                </div>
            </div>


            <div class="col-md-2 col-sm-2 col-xs-12">
                <div class="form-group">
                    <select class="form-control" name="tinh_trang" id="tinh_trang">
                        <option value="" @php if($idTinhTrang == null) echo 'selected'; @endphp>Tình trạng</option>
                        @foreach($dsTinhTrang as $tinhTrang)
                            @if( $tinhTrang->bang == 'giao_dich_nguoi_ban')
                            <option value="{{$tinhTrang->id}}" @php if($tinhTrang->id == $idTinhTrang) echo 'selected'; @endphp>{{ $tinhTrang->tinh_trang }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="col-md-6 col-sm-3 col-xs-12" ng-controller="DateTimePickerCtrl">
                <div class="row">
                    <div class="col-md-5 col-sm-1 col-xs-12" ng-init="thoiDiemDatHangFrom=initThoiDiemDatHang('{{$thoiDiemDatHangFrom}}')">
                        <div class="form-group">
                            <p class="input-group">
                                <input placeholder="dd-MM-yyyy" name="thoi_diem_dat_hang_from" type="text" class="form-control" uib-datepicker-popup="<%format%>" ng-model="thoiDiemDatHangFrom" is-open="isOpenFrom" datepicker-options="dateOptions" close-text="Close" alt-input-formats="altInputFormats" />
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" ng-click="openFrom()">
                                        <i class="glyphicon glyphicon-calendar"></i>
                                    </button>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-1 col-xs-12" ng-init="thoiDiemDatHangTo=initThoiDiemDatHang('{{$thoiDiemDatHangTo}}')">
                        <div class="form-group">
                            <p class="input-group">
                                <input placeholder="dd-MM-yyyy" name="thoi_diem_dat_hang_to" type="text" class="form-control" uib-datepicker-popup="<%format%>" ng-model="thoiDiemDatHangTo" is-open="isOpenTo" datepicker-options="dateOptions" close-text="Close" alt-input-formats="altInputFormats" />
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" ng-click="openTo()">
                                        <i class="glyphicon glyphicon-calendar"></i>
                                    </button>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-1 col-xs-12">
                        <div class="form-group">
                            <button class="btn btn-default" type="submit">
                                Lọc
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

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
                                <th class="col-md-1" style="width:4%">STT</th>
                                <th class="col-md-2">Người mua</th>
                                <th class="col-md-2">Người nhận</th>
                                <th class="col-md-4">Địa chỉ giao hàng</th>
                                <th class="col-md-2">Tổng tiền</th>
                                <th class="col-md-2">Tình trạng</th>
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
                                        
                                            @if($donHang->id_tinh_trang != 19 && $donHang->id_tinh_trang != 17 && $donHang->id_tinh_trang != 18) 
                                            <form action="{{ URL::Route('nguoiban-donhang.update') }}" method="GET">
                                                <div class="input-group"> 
                                                    <input type="hidden" name="idDonHang" value="{{$donHang->id}}" />
                                                    <div class="input-group-btn"> 
                                                        <select name="idTinhTrang" class="btn btn-xs btn-default" style="height : 22px">
                                                            @foreach($dsTinhTrang as $tinhTrang)
                                                                @if($tinhTrang->bang == 'giao_dich_nguoi_ban')
                                                                    @if($tinhTrang->id != $donHang->id_tinh_trang) 
                                                                        @if($donHang->id_tinh_trang == 15 && $tinhTrang->id != 17 && $tinhTrang->id != 18)
                                                                        <option value="{{$tinhTrang->id}}">{{$tinhTrang->tinh_trang}}</option> 
                                                                        @endif
                                                                        @if($donHang->id_tinh_trang == 16 && $tinhTrang->id != 15 && $tinhTrang->id != 19)
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