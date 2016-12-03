@extends('layouts.nguoi-ban.layouts.main') @section('title','Thêm Sản Phẩm') @section('content')
<!--Begin Content -->

<div ng-controller="FormThemSanPhamCtrl">
    <div class="page-title">
        <div class="title_left">
            <h2>
                <ul class="breadcrumb">
                    <li><a href="#">Sản phẩm</a></li>
                    <li class="active">Thêm sản phẩm</li>
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
                    
                    <form enctype="multipart/form-data" id="form_them_san_pham" name="form_them_san_pham" class="form-horizontal form-label-left" ng-submit="submitSanPham(form_them_san_pham.$valid, $event)" method="POST" action="{{URL::Route('nguoiban-sanpham.store')}}" novalidate>
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Loại danh mục <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="txt_loaidanhmuc">
                                        @foreach($dsDanhMuc as $key=>$danhMuc)
                                            @if($key==0) 
                                            <option value="{{$danhMuc->id}}" selected>{{$danhMuc->ten}}</option> 
                                            @else
                                            <option value="{{$danhMuc->id}}">{{$danhMuc->ten}}</option> 
                                            @endif
                                        @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên SP: <span class="required">*</span>
                        </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="txt_tensp" ng-model="txt_tensp" ng-required="true" ng-maxlength="255" class="form-control col-md-7 col-xs-12"  placeholder="Thêm tên sản phẩm vào đây"/>
                            </div>
                            <i class="fa fa-check text-success" ng-show="form_them_san_pham.txt_tensp.$dirty && form_them_san_pham.txt_tensp.$valid && isSubmitted"></i>
                            <div ng-show="(form_them_san_pham.txt_tensp.$dirty && form_them_san_pham.txt_tensp.$invalid) || isSubmitted" class="text-danger">
                                <i class="fa fa-times text-danger"></i>
                                <span ng-show="form_them_san_pham.txt_tensp.$error.required">Tên sản phẩm không được bỏ trống</span>
                                <span ng-show="form_them_san_pham.txt_tensp.$error.maxlength">Tên sản phẩm không quá 255 ký tự</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mô tả: <span class="required">*</span>
                        </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea id="txt_mota" name="txt_mota" rows="7" ng-model="txt_mota" ng-required="true" ng-maxlength="500" class="form-control ckeditor col-md-7 col-xs-12" placeholder="Thêm mô tả vào đây"></textarea>
                            </div>
                            <i class="fa fa-check text-success" ng-show="form_them_san_pham.txt_mota.$dirty && form_them_san_pham.txt_mota.$valid && isSubmitted"></i>
                            <div ng-show="(form_them_san_pham.txt_mota.$dirty && form_them_san_pham.txt_mota.$invalid) || isSubmitted" class="text-danger">
                                <i class="fa fa-times text-danger"></i>
                                <span ng-show="form_them_san_pham.txt_mota.$error.required">Mô tả sản phẩm không được bỏ trống</span>
                                <span ng-show="form_them_san_pham.txt_mota.$error.maxlength">Mô tả sản phẩm không quá 500 ký tự</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Giá bán: <span class="required">*</span>
                        </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" name="txt_giaban" ng-required="true" min="1" ng-model="txt_giaban" class="form-control col-md-7 col-xs-12"  placeholder="Thêm giá bán vào đây"/>
                            </div>
                            <i class="fa fa-check text-success" ng-show="form_them_san_pham.txt_giaban.$dirty && form_them_san_pham.txt_giaban.$valid && isSubmitted"></i>
                            <div ng-show="(form_them_san_pham.txt_giaban.$dirty || isSubmitted) && form_them_san_pham.txt_giaban.$invalid" class="text-danger">
                                <i class="fa fa-times text-danger"></i>
                                <span ng-show="form_them_san_pham.txt_giaban.$error.required">Giá bán sản phẩm không được bỏ trống</span>
                                <span ng-show="form_them_san_pham.txt_giaban.$error.min">Giá sản phẩm ít nhất là 1</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Phần trăm khuyến mãi <span class="required">*</span>
                        </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" name="txt_phantramKM" class="form-control col-md-7 col-xs-12" ng-required="true" ng-model="txt_phantramKM" placeholder="Thêm khuyến mãi vào đây"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Giá bán hiện tại <span class="required">*</span>
                        </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="txt_giaban_hientai" ng-required="true" class="form-control col-md-7 col-xs-12" ng-value="getGiaBanHienTai(txt_giaban-txt_giaban*(txt_phantramKM/100))" ng-readonly="true" placeholder="Giá hiện tại = Giá bán - Giá bán * phần trăm khuyến mãi"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Số lượng tồn: <span class="required">*</span>
                        </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" name="txt_soluongton" ng-required="true" min=1 class="form-control col-md-7 col-xs-12" ng-model="txt_soluongton" placeholder="Thêm số lượng tồn vào đây"/>
                            </div>
                            <i class="fa fa-check text-success" ng-show="form_them_san_pham.txt_soluongton.$dirty && form_them_san_pham.txt_soluongton.$valid && isSubmitted"></i>
                            <div ng-show="(form_them_san_pham.txt_soluongton.$dirty || isSubmitted) && form_them_san_pham.txt_soluongton.$invalid" class="text-danger">
                                <i class="fa fa-times text-danger"></i>
                                <span ng-show="form_them_san_pham.txt_soluongton.$error.required">Số lượng tồn sản phẩm không được bỏ trống</span>
                                <span ng-show="form_them_san_pham.txt_soluongton.$error.min">Số lượng tồn sản phẩm ít nhất là 1</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nhà Sản Xuất: <span class="required">*</span>
                        </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="txt_nsx" ng-required="true" ng-maxlength="255" ng-model="txt_nsx" class="form-control col-md-7 col-xs-12" placeholder="Thêm nhà sản xuất vào đây"/>
                            </div>
                            <i class="fa fa-check text-success" ng-show="form_them_san_pham.txt_nsx.$dirty && form_them_san_pham.txt_nsx.$valid && isSubmitted"></i>
                            <div ng-show="(form_them_san_pham.txt_nsx.$dirty && form_them_san_pham.txt_nsx.$invalid )|| isSubmitted" class="text-danger">
                                <i class="fa fa-times text-danger"></i>
                                <span ng-show="form_them_san_pham.txt_nsx.$error.required">Nhà sản xuất không được bỏ trống</span>
                                <span ng-show="form_them_san_pham.txt_nsx.$error.maxlength">Nhà sản xuất không quá 255 ký tự</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh đại diện:</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" name="anh_dai_dien" id="anh_dai_dien" accept="image/*">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh chi tiết 1:</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" name="anh_ct_1" id="anh_ct_1" accept="image/*">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh chi tiết 2:</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" name="anh_ct_2" id="anh_ct_2" accept="image/*">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh chi tiết 3:</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" name="anh_ct_3" id="anh_ct_3" accept="image/*">
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" name="btnLSPSua" class="btn btn-primary">Thêm</button>
                                <button type="reset" class="btn btn-success">Hủy</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


</div>

<!-- End Content -->

@endsection