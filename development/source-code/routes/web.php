<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
$baseFolder='Web\\';

Route::get('/', function () {
    return redirect()->route('danhmuc.show', ['danhMucSlug' => '1']);
});

Route::get('/list', function () {
    return view('pages.list');
});

Route::resource('san-pham',$baseFolder.'SanPhamController', ['names' => [
    'index' => 'sanpham.index',
    'show' => 'sanpham.show'
]]);

Route::resource('danh-muc',$baseFolder.'DanhMucController', ['names' => [
    'show' => 'danhmuc.show'
]]);

Route::resource('giao-dich','GiaoDichController',['names' => [
    'index'=> 'giaodich.index',
    'show'=> 'giaodich.show'
]]);