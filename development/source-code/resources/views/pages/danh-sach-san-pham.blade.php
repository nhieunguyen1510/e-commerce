@extends('layouts.main')

@section('title','Danh sách sản phẩm')

@section('content')
<style type="text/css" media="screen">
.right-content{
	float: right;
}	
</style>
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
		</div>

		<div class="right-content"> 
    @include('partials.product-list', ['dsSanPham' => $dsSanPham])
    </div>

     
    <scroll2top-btn></scroll2top-btn>
@endsection