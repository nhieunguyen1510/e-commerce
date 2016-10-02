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

Route::get('/', 'TrangChuController@getTrangChu',['name' => 'trangchu.index']);

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

Route::resource('tai-khoan','TaiKhoanController',['names' => [
    'index' => 'taikhoan.index'
]]);

