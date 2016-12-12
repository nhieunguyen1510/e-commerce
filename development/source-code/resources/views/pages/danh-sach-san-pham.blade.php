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
				  {{--<li class="active">{{ $danhMucIns->ten }}</li>--}}
				</ol>
			</div>
    <div class="row">
				<div class="col-sm-3" style="margin-top: 20px">
					<div class="left-sidebar">
						<h2>LỌC TÌM KIẾM</h2>
					<form method="GET" action="{{ URL::Route('sanpham.index') }}"> 
						<div class="brands_products"><!--brands_products-->
							<h2>Loại</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked" style="margin-left: 50px;">
								
									@foreach($dsDanhMuc as $danhMuc)
									<li>
										<input type="checkbox" name="idDanhMuc[]" value="{{$danhMuc->id}}" 
										@if($dsDanhMucSelected!=null)
											@foreach($dsDanhMucSelected as $danhMucSelected)
												@if($danhMuc->id==$danhMucSelected->id) checked @endif
												@if($danhMuc->id_danh_muc_san_pham_cha==$danhMucSelected->id) checked @endif
											@endforeach
										@endif>
										{{$danhMuc->ten}}
									@endforeach
									</li>
								
									
								
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Giá</h2>
							  
                        <div class="price">
                        <div class="input-group">

                           <input type="text" name="keywordmin" class="form-control" placeholder="VND">
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
					 
						{{--<h2 class="title text-center">{{ $danhMucIns->ten }}</h2>--}}
						
						<div class="col-sm-8" style="width:126%;">
							@include('partials.product-list', ['dsSanPham' => $dsSanPham])	
					</div>
					
					<ul class="pagination" style="float: right;">
					{{ $dsSanPham->appends(['idDanhMuc' => $dsIdDanhMuc,'keywordmin'=>$keywordmin,'keywordmax'=>$keywordmax])->links() }}
						</ul>
</div>

		</div>

					<!--features_items--

		<div class="right-content"> 
    </div>

     
    <scroll2top-btn></scroll2top-btn>
@endsection