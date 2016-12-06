@extends('layouts.main')

@section('title','Chi tiết sản phẩm')

@section('content')

    
    <section>
		<div class="container">
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
							
						</div><!--/price-range--><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
						@foreach($sanPham as $sp)
							<div class="view-product">
								<img src="{{ $sp->anh_dai_dien }}" alt="" />
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="{{ $sp->anh_chi_tiet_1 }}" alt="" width="85px" height="84px"></a>
										  <a href=""><img src="{{ $sp->anh_chi_tiet_2 }}" alt="" width="85px" height="84px"></a>
										  <a href=""><img src="{{ $sp->anh_chi_tiet_3 }}" alt="" width="85px" height="84px"></a>
										</div>
	
									</div>
						@endforeach				
								  <!-- Controls -->
								
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="{{ URL::asset('assets/img/new.jpg') }}" class="newarrival" alt="" />
							@foreach($sanPham as $sp)
								<h2>{{ $sp->ten }}</h2>
								<p>Được bán bởi: </p>
								<p>Thương hiệu: <b>{{ $sp->nha_san_xuat }}</b></p>
							
								<span>
									<span>{{ number_format($sp->don_gia_goc ,0,",",".")}} VNĐ</span>
									<button type="button" class="btn btn-fefault cart"><a href="{!! url('mua-hang',[$sp->id]) !!}">
										<i class="fa fa-shopping-cart"></i>
										Thêm vào giỏ hàng</a>
									</button>
								</span>
								<p><b>Tình trạng:</b> Còn hàng</p>
								<p><b>Tình trạng:</b> Còn hàng</p>
								<p><b>Nhãn hiệu:</b>  MINX</p>
								<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="20px" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Thông tin sản phẩm</a></li>
								<!--<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li> -->
								<li class="active"><a href="#reviews" data-toggle="tab">Nhận xét (5)</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<p itemprop="description"><p>{{ $sp->mo_ta }}</p>
							</div>
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<p><b>Write Your Review</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					@endforeach	
					<div class="recommended_items"><!--recommended_items-->
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
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>

   
@endsection