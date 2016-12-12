@extends('layouts.main')

@section('title','Trang chủ')

@section('content')
    <!--Begin Content -->
      <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>Minx</span>-SHOPPER</h1>
                                    <h2>Good deal everyday</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Mua ngay</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ URL::asset('assets/img/girl1.jpg') }}" class="girl img-responsive" alt="" />
                                    <img src="{{ URL::asset('assets/img/pricing.png') }}"  class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>Minx</span>-SHOPPER</h1>
                                    <h2>Good deal everyday</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Mua ngay</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ URL::asset('assets/img/girl2.jpg') }}" class="girl img-responsive" alt="" />
                                    <img src="{{ URL::asset('assets/img/pricing.png') }}"  class="pricing" alt="" />
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>Minx</span>-SHOPPER</h1>
                                    <h2>Good deal everyday</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Mua ngay</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ URL::asset('assets/img/girl3.jpg') }}" class="girl img-responsive" alt="" />
                                    <img src="{{ URL::asset('assets/img/pricing.png') }}" class="pricing" alt="" />
                                </div>
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->
        <!--Begin_list_new_product-->
        <div class="item-product">
            <div class="category-title">
                <center>
                    <h2>SẢN PHẨM MỚI</h2>
                </center>
                <p></p>
            </div>

            <div class="product-top">
            @foreach($spmoi as $spmoi)
                <div class="product-top-item">
                    <div class="product-image-cart">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ $spmoi->getAnh()  }}" alt="Áo trễ vai mã 001">
                            </a>
                        </div>
                        <div class="product-icon-cart">
                            <a href="{!! url('mua-hang',[$spmoi->id]) !!}">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Thêm vào giỏ hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-title">
                        <div class="product-price">
                            <span class="current-price">{{ number_format( $spmoi->gia_ban_hien_tai  ,0,",",".")}}</span>
                        </div>
                        <div class="product-name">
                            <a href="{{  URL::route('sanpham.show', $spmoi->id) }}" title="{{ $spmoi->ten }}">{{ $spmoi->ten }}</a>
                        </div>
                        <div class="product-icon-option">
                            <span title="Đã có 1 lượt mua"><i class="fa fa-tag" aria-hidden="true"></i> 1</span>
                            <span title="Đã có 12 lượt thích"><i class="fa fa-heart" aria-hidden="true"></i> 12</span>
                            <span title="Đã có 5 hỏi đáp"><i class="fa fa-comments" aria-hidden="true"></i> 5</span>
                        </div>
                    </div>
                    <div class="shop-place">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i> {{ $spmoi->taikhoannguoiban->ten_shop }}</a>
                    </div>
                    
                </div>
                @endforeach
            </div>
        </div>
        <!--End_list_new_product-->

        <!--Begin_list_hot_product-->
        <div class="item-product">
            <div class="category-title">
                <center>
                    <h2>SẢN PHẨM BÁN CHẠY</h2>
                </center>
                <p></p>
            </div>

            <div class="product-top">

            @foreach($spbanchay as $i=>$spchay)
                <div class="product-top-item">
                    <div class="product-image-cart">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ $spchay->san_pham->getAnh() }}" alt="{{ $spchay->san_pham->ten }}">
                            </a>
                        </div>
                        <div class="product-icon-cart">
                            <a href="#">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Thêm vào giỏ hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-title">
                        <div class="product-price">
                            <span class="current-price">{{ $spchay->san_pham->gia_ban_hien_tai }}</span>
                            <span class="old-price">{{ $spchay->san_pham->don_gia_goc }}</span>
                        </div>
                        <div class="product-name">
                            <a href="#" title="{{ $spchay->san_pham->ten }}">{{ $spchay->san_pham->ten }}</a>
                        </div>
                        <div class="product-icon-option">
                           
                        </div>
                    </div>
                    <div class="shop-place">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i> </a>
                    </div>
                    
                </div>


                @endforeach
            </div>
        </div>
        <!--End_list_hot_product-->

        <!--Begin_list_sale_product-->
        <div class="item-product">
            <div class="category-title">
                <center>
                    <h2>SẢN PHẨM KHUYẾN MÃI</h2>
                </center>
                <p></p>
            </div>

            <div class="product-top">
             @foreach($spkhuyenmai as $i=>$spkhuyenmai)
                <div class="product-top-item">
                    <div class="product-image-cart">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ $spkhuyenmai->getAnh() }}" alt="Áo trễ vai mã 001">
                            </a>
                        </div>
                        <div class="product-icon-cart">
                            <a href="#">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Thêm vào giỏ hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-title">
                        <div class="product-price">
                            <span class="current-price">{{ $spkhuyenmai->gia_ban_hien_tai }}</span>
                            <span class="old-price">{{ $spkhuyenmai->don_gia_goc }}</span>
                        </div>
                        <div class="product-name">
                            <a href="#" title="{{ $spkhuyenmai->ten}}">{{ $spkhuyenmai->ten}}</a>
                        </div>
                        <div class="product-icon-option">
                           
                        </div>
                    </div>
                    <div class="shop-place">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i> </a>
                    </div>
                    <div class="product-icon-sale">
                        <span>{{ $spkhuyenmai->phan_tram_khuyen_mai ."%"}}</span>
                    </div>
                </div>

               
            @endforeach
                
            </div>
        </div>

         @if(isset($sanpham))
                             @foreach ($sanpham  as $sp) 
                           {!! $sp->mo_ta !!} 
                           @endforeach
                            
                            @endif
        <!--End_list_sale_product-->
        <!--End_Items-->
@endsection