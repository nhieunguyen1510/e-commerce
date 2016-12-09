@extends('layouts.nguoi-ban.layouts.main') @section('title','Chứng từ nạp tiền') @section('content')
<!--Begin Content -->

<div class="row tile_count">
    <div class="page-title">
        <div class="title_left">
            <!-- Breadcrumbs go here -->
            <h2>
                <div class="col-md-8">
                        <ul class="breadcrumb">
                            <li><a href="">Thông tin</a></li>
                            <li class="active">Chứng từ nạp tiền</li>
                        </ul>
                </div>
            </h2>
        </div>
      

    </div>

    <div class="clearfix"></div>

    <div class="clearfix"></div>

    <!-- Table dynamics -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Chứng từ nạp tiền</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered" name="datatable">
                        <thead>
                            <tr>
                                <th class="col-md-1">STT</th>
                                <th class="col-md-2">Số tiền chuyển khoản</th>
                                <th class="col-md-2">Hình thức thanh toán</th>
                                <th class="col-md-2">Ngày giao dịch</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dsChungTu as $key=>$chungtu)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$chungtu->so_tien_chuyen_khoan}}</td>
                                <td>{{$chungtu->hinh_thuc_thanh_toan}}</td>
                                <td>{{$chungtu->ngay_tao}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!--Sử dụng appends để qua trang khác thì sẽ lưu thêm query string là tinhtrang để lọc điều kiện-->
                    {{$dsChungTu->links()}}

                </div>
            </div>
        </div>
    </div>

    <!-- Table dynamics -->
</div>

<!-- End Content -->

@endsection