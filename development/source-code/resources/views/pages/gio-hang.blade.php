@extends('layouts.main')

@section('title','Giỏ Hàng')

@section('content')
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Trang chủ</a></li>
				  <li class="active">Giỏ hàng</li>
				</ol>
			</div>
			<img src="{{ URL::asset('assets/img/shopping-banner.jpg') }}" width="1140px" height="150px" alt="Giỏ hàng" border="1px">
			<br/>
			@if(sizeof(Cart::content())>0)
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Sản phẩm</td>
							<td class="description"></td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Thành tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					
					@foreach($content as $item)
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{ $item->name }}</a></h4>
								<p>{{ $item->nha_san_xuat }}</p>
							</td>
							<td class="cart_price">
								<p>{{ number_format($item->price ,0,",",".")}}</p>
							</td>
							<form method="POST" action="{{ URL::Route('suagiohang') }}">
						 <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<input class="cart_quantity_input" type="text" name="quantity" value="{{$item->qty}}" autocomplete="off" size="2">	
									 <input type="hidden" name="id" id="id" value="{{ $item->rowId }}">
									&nbsp &nbsp<button type="submit" class="btn btn-danger btn-xs">Cập nhật</button>
								</div>
							</td>
							</form>
							<td class="cart_total">
								<p class="cart_total_price">{{ number_format($item->price*$item->qty ,0,",",".")}}</p>
							</td>
							<td class="cart_delete">
							
							<a class="cart_quantity_delete" href="{!! url('xoa-gio-hang',['id'=>$item->rowId]) !!}">
							<i class="fa fa-times"></i></a>
							</td>
						</tr>

						@endforeach
						
						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action" >
	<div style="float: right">
		<div class="container">
			
			<div class="row" >
				
				<div class="col-sm-6" style="float:right">
				<h2 align="center">Tổng hóa đơn</h2>
					<div class="total_area">
						<ul>
							<li>Số sản phẩm: <span>{{ $count }}</span></li>
							<li>Tổng tiền <span>{{ $total }} VNĐ</span></li>
						</ul>
							<a class="btn btn-default update" href="{{ URL::Route('trangchu.index') }}">Tiếp tục mua hàng</a>
							<a class="btn btn-default check_out" href="{{ URL::Route('thanhtoan') }}">Thanh toán</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	@else
	<center><h2>Không có sản phẩm nào trong giỏ hàng ! !</h2></center>
	@endif
	</section><!--/#do_action-->
	@endsection