@extends('layouts.main')

@section('title','Laravel')

@section('sidebar')
    @parent
        @if (count($dsDanhMucSanPham) > 0)
            <ul>
            @foreach ($dsDanhMucSanPham as $danhMucSanPham)
                <li><a href="{{ $danhMucSanPham->slug }}">{{ $danhMucSanPham->ten }}</a></li>
            @endforeach
            </ul>
        @else
            I don't have any records!
        @endif
        @if (count($dsSanPham) > 0)
            <ul>
            @foreach ($dsSanPham as $sanPham)
                <li><a href="/">{{ $sanPham->ten }}</a></li>
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
    <button type="button" class="btn btn-primary">Cancel</button>
@endsection