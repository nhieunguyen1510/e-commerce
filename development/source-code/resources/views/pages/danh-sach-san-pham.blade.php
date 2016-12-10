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
							<h2>Loại</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href=""> <input type="checkbox" value="">   <span class="pull-right">({{ $rs2 }})</span>Denim</a></li>
									<li><a href=""><input type="checkbox" value="">   <span class="pull-right">({{ $rs3 }})</span>Beaded Velvet</a></li>
									
								
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Giá</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href=""> <span class="pull-right">({{ $rs1 }})</span>425.000 - 550.000</a></li>
									
								</ul>
							</div>
							  <form method="POST" action="{{ URL::Route('timtheogia') }}"> {{ csrf_field() }}
                        <div class="price">
                        <div class="input-group">

                           <input type="text" name="keywordmin" class="form-control" placeholder="VND">
                           <input type="hidden" name="idDanhMuc" value="{{ $danhMucIns->id }}">
                            <span class="input-group-addon" >Đến</span>
                           <input type="text" name="keywordmax" class="form-control" placeholder="VND">


                        </div>
                        <br>
                         <center><button type="submit" class="btn btn-danger">Tìm</button></center>
                         </div>
                         </form>
							
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