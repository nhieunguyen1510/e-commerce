@extends('layouts.main')

@section('title','Danh sách sản phẩm')

@section('content')
<style type="text/css" media="screen">
.right-content{
	float: right;
}	
</style>
<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Trang chủ</a></li>
				  <li class="active">{{ $danhMucIns->ten }}</li>
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
					 
						<h2 class="title text-center">{{ $danhMucIns->ten }}</h2>
						
						<div class="col-sm-8" style="width:126%;">
							@include('partials.product-list', ['dsSanPham' => $dsSanPham])	
					</div>
					
					<ul class="pagination" style="float: right;">
					<p>Tổng số trang: <b>{{ $dsSanPham -> lastPage() }}</b></p>
					@if($dsSanPham->currentPage()!=1)
							<li><a href="{{ str_replace('/?','?',$dsSanPham->url($dsSanPham->currentPage() -1)) }}"><<</a></li>
					@endif
							@for ($i=1;$i<=$dsSanPham->lastPage(); $i =$i+1)
							<li class="{{ ($dsSanPham -> currentPage() == $i) ? 'active' : '' }}"><a href="{{ str_replace('/?','?',$dsSanPham->url($i)) }}">{{ $i }}</a>
							</li>
							@endfor
							@if($dsSanPham->currentPage()!=$dsSanPham->lastPage())	
							<li><a href="{{ str_replace('/?','?',$dsSanPham->url($dsSanPham->currentPage() +1)) }}">>></a></li>
							@endif
						</ul>
</div>

		</div>

					<!--features_items--

		<div class="right-content"> 
    </div>

     
    <scroll2top-btn></scroll2top-btn>
@endsection