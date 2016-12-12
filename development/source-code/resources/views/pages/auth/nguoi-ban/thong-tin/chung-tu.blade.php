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

    <div class="row">
        <!--Form dùng để submit lọc điều kiện gửi request lên controller xử lý với method là GET-->
        <form action="" method="GET" name="form_loc">

            <div class="col-md-2 col-sm-2 col-xs-12">
                <div class="form-group">
                    <select class="form-control" name="loc_theo" id="loc_theo" onchange = "this.form.submit()">
                        <option value="thang" @php if('thang' == $locTheo) echo 'selected'; @endphp>Theo tháng</option>
                        <option value="quy" @php if('quy' == $locTheo) echo 'selected'; @endphp>Theo quý</option>
                    </select>
                </div>
            </div>

            @if($locTheo == 'thang')
            <div class="col-md-2 col-sm-2 col-xs-12">
                <div class="form-group">
                    <select class="form-control" name="thang_txt" id="thang_txt">
                        <option value="" @php if($Thang == null) echo "selected" @endphp>Tháng</option>
                        @for ($i = 1; $i < 13; $i++)
                         <option value="{{$i}}" @php if($i == $Thang) echo 'selected'; @endphp>Tháng {{$i}}</option>
                        @endfor
                    </select>
                </div>
            </div>
            @endif

            @if($locTheo == 'quy')
            <div class="col-md-2 col-sm-2 col-xs-12">
                <div class="form-group">
                    <select class="form-control" name="quy_txt" id="quy_txt">
                        <option value="" @php if($Quy == null) echo "selected" @endphp>Quý</option>
                        <option value="1">Quý 1</option>
                        <option value="2">Quý 2</option>
                        <option value="3">Quý 3</option>
                        <option value="4">Quý 4</option>
                    </select>
                </div>
            </div>
            @endif

            <div class="col-md-2 col-sm-2 col-xs-12">
                <div class="form-group">
                    <select class="form-control" name="nam_txt" id="nam_txt">
                        <option value="" @php if($Nam == null) echo "selected" @endphp>Năm</option>
                        @for ($i = 0; $i <= 50; $i++)
                         <option value="{{2016 - $i}}" @php if((2016 - $i) == $Nam) echo 'selected'; @endphp>{{2016 - $i}}</option>
                        @endfor
                    </select>
                </div>
            </div>


            <div class="col-md-1 col-sm-1 col-xs-12">
                <div class="form-group">
                    <button class="btn btn-default" type="submit">Lọc</button>
                </div>
            </div>

        </form>
    </div>

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
                                <th class="col-md-1">Mã chứng từ</th>
                                <th class="col-md-2">Số tiền chuyển khoản</th>
                                <th class="col-md-2">Hình thức thanh toán</th>
                                <th class="col-md-2">Ngày giao dịch</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dsChungTu as $key=>$chungtu)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$chungtu->id}}</td>
                                <td>{{$chungtu->so_tien_chuyen_khoan}}</td>
                                <td>{{$chungtu->hinh_thuc->tinh_trang}}</td>
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