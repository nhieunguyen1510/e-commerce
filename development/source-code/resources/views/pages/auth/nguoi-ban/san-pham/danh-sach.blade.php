@extends('layouts.nguoi-ban.layouts.main') @section('title','Danh sách sản phẩm') @section('content')
<!--Begin Content -->

<div class="row tile_count">
    <div class="page-title">
        <div class="title_left">
            <!-- Breadcrumbs go here -->
            <h2>
                <div class="col-md-8">
                        <ul class="breadcrumb">
                            <li><a href="{{URL::Route('nguoiban-sanpham.index')}}">Sản phẩm</a></li>
                            <li class="active">Danh sách sản phẩm</li>
                        </ul>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-default" href="{{URL::Route('nguoiban-sanpham.create')}}">Thêm mới</a>
                </div>
            </h2>
        </div>
      

    </div>

    <div class="clearfix"></div>

    <div class="row">
        <!--Form dùng để submit lọc điều kiện gửi request lên controller xử lý với method là GET-->
        <form action="" method="GET" name="form_loc">

            <div class="col-md-2 col-sm-2 col-xs-12 form-group">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" name="search_input" id="search_input" value="{{$search_input}}">
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
                            <input type="number" class="form-control " placeholder="Gía thấp" name="cost_min" id="cost_min" value="{{$cost_min}}">
                        </div>

                        <div class="col-md-1 col-sm-1 col-xs-12"><span style="font-size : 20px;">></span></div>

                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <input type="number" class="form-control" placeholder="Gía cao" name="cost_max" id="cost_max" value="{{$cost_max}}">

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
                                        <a href="{{URL::Route('sanpham.show', ['id' => $sanPham->id])}}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Xem </a> 
                                        @if($sanPham->id_tinh_trang == 1)
                                        <a href="{{URL::Route('nguoiban-sanpham.update', ['idSanPham' => $sanPham->id])}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Hết hàng </a>
                                        @endif
                                    </center>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!--Sử dụng appends để qua trang khác thì sẽ lưu thêm query string là tinhtrang để lọc điều kiện-->
                    {{$dsSanPham->appends(['search_input' => $search_input, 'tinhtrang' => $idTinhTrang, 'cost_min' => $cost_min, 'cost_max' => $cost_max ])->links()}}

                </div>
            </div>
        </div>
    </div>

    <!-- Table dynamics -->
</div>

<!-- End Content -->

@endsection