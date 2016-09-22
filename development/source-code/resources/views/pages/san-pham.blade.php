@extends('layouts.san-pham')

@section('title','Laravel')

@section('content')
    <div class="product-header">
        <h4>{{ $sanPham->ten }}</h4>
    </div>
    <div class="product-media">
        <img src="{{ $sanPham->anh_dai_dien }}" alt="anh_dai_dien" />
    </div>
    <div class="product-short-detail">
        <span>Giá: {{ number_format($sanPham->don_gia_ban) }} vnđ</span>
    </div>
    <div class="product-description">
        <h5>Mô tả:</h5>
        <p>{{ $sanPham->mo_ta }}</p>
    </div>
@endsection