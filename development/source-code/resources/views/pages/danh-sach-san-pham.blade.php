@extends('layouts.main')

@section('title','Laravel')

@section('sidebar')
        @if (count($dsDanhMucSanPham) > 0)
            <ul>
            @foreach ($dsDanhMucSanPham as $danhMucSanPham)
                <li><a href="{{  URL::route('danhmuc.show', $danhMucSanPham->slug) }}">{{ $danhMucSanPham->ten }}</a></li>
            @endforeach
            </ul>
        @else
            I don't have any records!
        @endif
    <p></p>
    <div>
    
    </div>
@endsection
@section('content')
    @if (count($dsSanPham) > 0)
        @foreach ($dsSanPham as $sanPham)
            <div class="product-box">
                <div class="content">
                    <div class="inner-content product-image">
                        <img src="{{ $sanPham->anh_dai_dien }}" alt="product-image" />
                    </div>
                    <div class="inner-content product-name">
                        <a href="{{  URL::route('sanpham.show', $sanPham->slug) }}">{{ $sanPham->ten }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>I don't have any records!</p>
    @endif
@endsection