@extends('layouts.main')

@section('title','Danh sách sản phẩm')

@section('content')

    

    @include('partials.product-list', ['dsSanPham' => $dsSanPham])
    

     
    <scroll2top-btn></scroll2top-btn>
@endsection