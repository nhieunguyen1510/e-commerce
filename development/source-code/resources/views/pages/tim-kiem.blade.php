@extends('layouts.main')

@section('title','Kết quả tìm kiếm')

@section('content')
<style type="text/css" media="screen">
.right-content{
	float: right;
}	
</style>
<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Kết quả tìm kiếm: <b>{{ $kw }}</b></li>
				</ol>
			</div>
    <div class="row">

				<div class="col-sm-3" style="margin-top: 20px">
					<div class="left-sidebar">
						<h2>LỌC TÌM KIẾM</h2>
					
						<div class="brands_products"><!--brands_products-->
							<h2>Nhãn Hàng</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Giá</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href=""> <span class="pull-right">(50)</span>200.000-300.000</a></li>
									<li><a href=""> <span class="pull-right">(56)</span>100.000-200.000</a></li>
									<li><a href=""> <span class="pull-right">(27)</span>100.000-200.000</a></li>
									
								</ul>
							</div>
							<div class="input-group">

  <input type="text" class="form-control" placeholder="VND"><span class="input-group-addon">Đến</span>
  <input type="text" class="form-control" placeholder="VND">
</div>
							
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="{{ URL::asset('assets/img/shipping.jpg') }}" alt="" />
						</div><!--/shipping-->
						
					</div>
				</div>
				
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center"><span>Tìm kiếm:</span> {{ $kw }}</h2>
						<div class="col-sm-8" style="width:126%;">
							<div class="product-list">
   <div class="item-product">

            <div class="product-top">
                

               

                @if (count($sp) > 0)
        @foreach ($sp as $sanPham)

                <div class="product-top-item" style="width:23%;margin-top: 20px;">
                    <div class="product-image-cart">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{ $sanPham->anh_dai_dien }}" alt="Áo trễ vai mã 001">
                            </a>
                        </div>
                        <div class="product-icon-cart">
                            <a href="{!! url('mua-hang',[$sanPham->id]) !!}">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Thêm vào giỏ hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-title">
                        <div class="product-price">
                            <span class="current-price">{{ number_format( $sanPham->don_gia_goc  ,0,",",".")}}</span>
                            
                        </div>
                        <div class="product-name">
                            <a href="{{  URL::route('sanpham.show', $sanPham->slug) }}" title="{{ $sanPham->ten }}">
                           {{ $sanPham->ten }}
                            </a>
                        </div>
                        <div class="product-icon-option">
                            <span title="Đã có 1 lượt mua"><i class="fa fa-tag" aria-hidden="true"></i> 1</span>
                            <span title="Đã có 12 lượt thích"><i class="fa fa-heart" aria-hidden="true"></i> 12</span>
                            <span title="Đã có 5 hỏi đáp"><i class="fa fa-comments" aria-hidden="true"></i> 5</span>
                        </div>
                    </div>
                    <div class="shop-place">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i> MiuShop</a>
                    </div>
                    <div class="product-icon-sale">
                        <span>-50%</span>
                    </div>
                </div>
 @endforeach
    @else
        <p>Hiện không có sản phẩm nào !</p>
    @endif
                
            </div>
        </div>
</div>	
					</div>
					
					<ul class="pagination" style="float: right;">
					{{$sp -> links()}}
					</ul>
</div>

		</div>

					<!--features_items--

		<div class="right-content"> 
    </div>

     
    <scroll2top-btn></scroll2top-btn>
@endsection