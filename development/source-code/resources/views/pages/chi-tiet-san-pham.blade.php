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

            <div class="col-sm-12 padding-right">
                <div class="product-details">
                    <!--product-details-->
                    <div class="col-sm-5">
                        <div>
                            <img src="{{$anhDaiDien}}" width="350px" height="400px" style="border: 1px solid black" />
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
                        <h2 class="title text-center">THÔNG TIN SẢN PHẨM</h2>
                        <h3>{!! $sanPham->mo_ta !!}</h3>
                    </div>
                   
                </div>
                <!--/category-tab-->
                <div class="recommended_items">
                    <!--recommended_items-->
                    <h2 class="title text-center">SẢN PHẨM CÙNG LOẠI</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">

                                @foreach($relSanPham as $rel)
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{ $rel->getAnh() }}" alt="" />
                                                <a href="{{  URL::route('sanpham.show', $rel->id) }}"><h2>{{ $rel->ten }}</h2></a>
                                                <p>{{ $rel->taikhoannguoiban->ten_shop }}</p>
                                                <a href="{!! url('mua-hang',[$rel->id]) !!}"><button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                        </div>
                        
                    </div>
                </div>
                <!--/recommended_items-->

            </div>
        </div>
    </div>
</section>


@endsection