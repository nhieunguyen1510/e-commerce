@extends('layouts.main')

@section('title','404')

@section('content')


	<div class="container text-center">
		<div class="logo-404">
			<a href="{{ URL::Route('trangchu.index') }}"><img src="{{ URL::asset('assets/img/4040.png') }}" alt="MINX" width="520px" height="300px" /></a>
		</div>
		<div class="content-404">
			<h1><b>Xin lỗi!</b> Chúng tôi không tìm thấy trang bạn yêu cầu !</h1>
			<h2><a href="{{ URL::Route('trangchu.index') }}">Trở lại trang chủ</a></h2>
		</div>
	</div>
@endsection