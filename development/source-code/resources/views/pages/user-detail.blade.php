@extends('layouts.main')

@section('title','Thông tin tài khoản')

@section('content')

<style type="text/css" media="screen">

.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

small {
display: block;
line-height: 1.428571429;
color: #999;
}
</style>
<div class="container" ng-controller="FormThongTinCaNhanCtrl">
    <div class="row">
        <div style="width:100%">

            <div class="well well-sm">
            <h2>Thông tin tài khoản</h2>
            @foreach($userInfo as $info)
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="{{ URL::asset('assets/img/user.png') }}" width="300px" height="300px" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>{{ $info->ten." ".$info->ho  }} <h4>
                        <small><cite title="{{ $info->dia_chi }}"><i class="glyphicon glyphicon-map-marker"> {{ $info->dia_chi }}
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>{{ $info->email }}
                            <br />
                            <i class="glyphicon glyphicon-phone"></i>{{ $info->so_dien_thoai }}
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>{{ $info->ngay_tao }}</p>
                        <!-- Split button -->
                        <div class="btn-group">
                           <button type="button" id="change" class="btn btn-default" ng-click="clickLichSu()">Xem lịch sử mua hàng</button>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        
        <div ng-show="isLichSuShow">
        <h2>Lịch sử mua hàng</h2>

        <table class="table table-striped">
            <thead>
      <tr>
        <th>STT</th>
        <th>Mã Đơn Hàng</th>
        <th>Thời gian đặt hàng</th>
        <th>Tổng tiền</th>
        <th>Tình trạng</th>
        <th>Hành động</th>
      </tr>
    </thead>
    <tbody>
    <?php  $stt=0 ?>
    @foreach($lichsuGiaoDich as $lichsu)
    <?php $stt++; ?>
      <tr>
        <td>{!! $stt !!}</td>
        <td>{{ $lichsu->id }}</td>
        <td>{{ $lichsu->thoi_gian_giao_dich }}</td>
        <td>{{ number_format($lichsu->tong_tien ,0,",",".")}}</td>
        <td>{{ $lichsu->id_tinh_trang }}</td>
        <td><button type="button" class="btn btn-danger">Xem</button></td>
      </tr>
      @endforeach
    </tbody>
</table>
    </div>
</div>
</div>
@endforeach
@endsection