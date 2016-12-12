@extends('layouts.main')

@section('title','Thanh toán')

@section('content')

    <section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Trang chủ</a></li>
				  <li class="active">Thanh toán</li>
				</ol>
			</div><!--/breadcrums-->

			@if (session('error'))
			    <div class="alert alert-warning">
			        {{ session('error') }}
			    </div>
			@endif
			<form method="POST" action="{{ URL::Route('thanhtoan.post') }}">
				{{csrf_field()}}
				<div class="shopper-informations">
					<div class="row">
						<div class="col-sm-5 clearfix">
							<div class="bill-to">
								<p>Thông tin giao hàng</p>
								<div class="form-one">
										<input type="text" name="customername" placeholder="Tên người nhận">
										<input type="text" name="customerphone" placeholder="Số điện thoại">
										<input type="text" name="customeraddress" placeholder="Địa chỉ giao hàng">
										
								</div>
							</div>
						</div>			
					</div>
				</div>
				<div class="review-payment">
					<h2>Thông tin giỏ hàng</h2>
				</div>

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
								<a href=""><img src="{{ $item->options->img }}" width="50px" height="50px" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{ $item->name }}</a></h4>
								<p>{{ $item->nha_san_xuat }}</p>
							</td>
							<td class="cart_price">
								<p>{{ number_format($item->price ,0,",",".")}}</p>
							</td>
							
						 
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<span>
										{{ $item->qty }}
									</span>
									 
								</div>
							</td>
							
							<td class="cart_total">
								<p class="cart_total_price">{{ number_format($item->price*$item->qty ,0,",",".")}}</p>
							</td>
							
						</tr>

						@endforeach
						
						
					</tbody>
				</table>
			</div>

				<div class="payment-options">

						<span style="float: right;">
							<center><button type="submit"  class="btn btn-default" >Thanh toán</button></center>
							
						</span>
						<span style="float: right;">
							<center><a href="{{ URL::Route('trangchu.index') }}"><button type="button" class="btn btn-default" >Quay về trang chủ</button></a></center>
						</span>
				</div>
			</form>
		</div>
	</section> <!--/#cart_items-->
    
   
@endsection