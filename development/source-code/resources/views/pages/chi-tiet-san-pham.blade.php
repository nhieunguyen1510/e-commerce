@extends('layouts.main') @section('title','Chi tiết sản phẩm') @section('content')


<section>
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Trang chủ</a></li>
                <li class="active">{{ $sanPham->ten }}</li>
            </ol>
        </div>
        <div class="row">

            <div class="col-sm-9 padding-right">
                <div class="product-details">
                    <!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="{{$anhDaiDien}}" />
                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">

                                    <ul class="gallery clearfix" style="margin-left:-15px">
                                        <li>
                                             <a href="{{ $anhChiTiet1 }}" rel="prettyPhoto" title="&lt;a href=&#x27;http://www.google.ca&#x27; target=&#x27;_blank&#x27; &gt;{{ $sanPham->ten }}&lt;/a&gt;"><img src="{{ $anhChiTiet1 }}" width="85px" height="84px" alt="Hình ảnh chi tiết" /></a>
                                        </li>
                                        <li>
                                            <a href="{{ $anhChiTiet1 }}" rel="prettyPhoto" title="&lt;a href=&#x27;http://www.google.ca&#x27; target=&#x27;_blank&#x27; &gt;{{ $sanPham->ten }}&lt;/a&gt;"><img src="{{ $anhChiTiet1 }}" width="85px" height="84px" alt="Hình ảnh chi tiết" /></a>
                                        </li>
                                        <li>
                                            <a href="{{ $anhChiTiet1 }}" rel="prettyPhoto" title="&lt;a href=&#x27;http://www.google.ca&#x27; target=&#x27;_blank&#x27; &gt;{{ $sanPham->ten }}&lt;/a&gt;"><img src="{{ $anhChiTiet1 }}" width="85px" height="84px" alt="Hình ảnh chi tiết" /></a>
                                        </li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                        <!-- Controls -->



                    </div>
                    <div class="col-sm-7">
                        <div class="product-information">
                            <!--/product-information-->
                            <img src="{{ URL::asset('assets/img/new.jpg') }}" class="newarrival" alt="" />
                            <h2>{{ $sanPham->ten }}</h2>
                            <p>Được bán bởi: <b>{{ $sanPham->taikhoannguoiban->ten_shop }}</b> </p>
                            <p>Thương hiệu: <b>{{ $sanPham->nha_san_xuat }}</b></p>

                            <span>
									<span>{{ number_format($sanPham->don_gia_goc ,0,",",".")}} VNĐ</span>
                            <button type="button" class="btn btn-default cart"><a href="{{ URL::Route('muahang',['id'=>$sanPham->id]) }}">
										<i class="fa fa-shopping-cart"></i>
										Thêm vào giỏ hàng</a>
									</button>
                            </span>
                            <p>Tình trạng: <b>{{ $sanPham->tinh_trang->tinh_trang }}</b></p>
                            <p>Nhãn hiệu: MINX</p>
                            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="20px" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                        </div>
                        <!--/product-information-->
                    </div>
                </div>
                <!--/product-details-->

                <div class="category-tab shop-details-tab">
                    <!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li><a href="#details" data-toggle="tab">Thông tin sản phẩm</a></li>
                            <!--<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li> -->
                            
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="details">
                            <p itemprop="description">
                                <p>{!! $sanPham->mo_ta !!}</p>
                        </div>

                      

                    </div>
                </div>
                <!--/category-tab-->
                <div class="recommended_items">
                    <!--recommended_items-->
                    <h2 class="title text-center">SẢN PHẨM CÙNG LOẠI</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">

                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{ URL::asset('assets/img/hmprod.jpg') }}" alt="" />
                                                <h2></h2>
                                                <p></p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <!--/recommended_items-->

            </div>
        </div>
    </div>
</section>


@endsection