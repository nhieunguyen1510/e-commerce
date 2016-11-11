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

Route::get('/', $baseFolder.'TrangChuController@getTrangChu',['name' => 'trangchu.index']);

Route::resource('san-pham',$baseFolder.'SanPhamController', ['names' => [
    'index' => 'sanpham.index',
    'show' => 'sanpham.show'
]]);

Route::resource('danh-muc',$baseFolder.'DanhMucController', ['names' => [
    'index' => 'danhmuc.index',
    'show' => 'danhmuc.show',
    'edit' => 'danhmuc.edit'
]]);

Route::resource('giao-dich',$baseFolder.'GiaoDichController',['names' => [
    'index'=> 'giaodich.index',
    'show'=> 'giaodich.show'
]]);

Route::resource('tai-khoan',$baseFolder.'TaiKhoanController',['names' => [
    'index' => 'taikhoan.index'
]]);

Route::get('dang-ky','Auth\TaiKhoanNguoiMua\DangKyController@getDangKy')->name('dangky.index');
Route::post('dang-ky','Auth\TaiKhoanNguoiMua\DangKyController@postDangKy')->name('dangky.post');
Route::get('dang-nhap','Auth\TaiKhoanNguoiMua\DangNhapController@getDangNhap')->name('dangnhap.index');
Route::post('dang-nhap','Auth\TaiKhoanNguoiMua\DangNhapController@postDangNhap')->name('dangnhap.post');
Route::get('dang-xuat','Auth\TaiKhoanNguoiMua\DangNhapController@getdangxuat')->name('dangxuat.get');
Route::get('quen-mat-khau','Auth\TaiKhoanNguoiMua\QuenMatKhauController@getQuenMatKhau')->name('quenmatkhau.index');
Route::post('quen-mat-khau','Auth\TaiKhoanNguoiMua\QuenMatKhauController@postQuenMatKhau')->name('quenmatkhau.post');
Route::get('xac-nhan-ma-khoi-phuc','Auth\TaiKhoanNguoiMua\XacNhanMaKhoiPhucController@getXacNhanMaKhoiPhuc')->name('xacnhanmakhoiphuc.index');
Route::post('xac-nhan-ma-khoi-phuc','Auth\TaiKhoanNguoiMua\XacNhanMaKhoiPhucController@postXacNhanMaKhoiPhuc')->name('xacnhanmakhoiphuc.post');
Route::get('khoi-phuc-mat-khau','Auth\TaiKhoanNguoiMua\KhoiPhucMatKhauController@getKhoiPhucMatKhau')->name('khoiphucmatkhau.index');
Route::post('khoi-phuc-mat-khau','Auth\TaiKhoanNguoiMua\KhoiPhucMatKhauController@postKhoiPhucMatKhau')->name('khoiphucmatkhau.post');





// User authenticate route
// Route::get('dang-nhap','TaiKhoanAuth\DangNhapController@getDangNhap')->name('dangnhap.index');
// Route::post('dang-nhap','TaiKhoanAuth\DangNhapController@postDangNhap')->name('dangnhap.post');
// Route::post('dang-xuat','TaiKhoanAuth\DangNhapController@postDangXuat')->name('dangxuat.post');
// Route::get('dang-ky','TaiKhoanAuth\DangKyController@getDangKy')->name('dangky.index');
// Route::post('dang-ky','TaiKhoanAuth\DangKyController@postDangKy')->name('dangky.post');
// Route::get('quen-mat-khau','TaiKhoanAuth\QuenMatKhauController@getQuenMatKhau')->name('quenmatkhau.index');
// Route::post('quen-mat-khau','TaiKhoanAuth\QuenMatKhauController@postQuenMatKhau')->name('quenmatkhau.post');
// Route::get('khoi-phuc-mat-khau','TaiKhoanAuth\KhoiPhucMatKhauController@getKhoiPhucMatKhau')->name('khoiphucmatkhau.index');
// Route::post('khoi-phuc-mat-khau','TaiKhoanAuth\KhoiPhucMatKhauController@postKhoiPhucMatKhau')->name('khoiphucmatkhau.post');


// Route::resource('dang-nhap','TaiKhoanAuth\DangNhapController',['names'=>[
//     'index' => 'dangnhap.index',
//     'store' => 'dangnhap.store'
// ]]);
// Route::resource('dang-ky','TaiKhoanAuth\DangKyController',['names'=>[
//     'index' => 'dangky.index',
//     'store' => 'dangky.store'
// ]]);
// Route::resource('dang-xuat','TaiKhoanAuth\DangKyController',['names'=>[
//     'index' => 'dangky.index',
//     'store' => 'dangky.store'
// ]]);

// Route::group(['prefix' => 'admin'], function () {
//     Route::get('dang-nhap','QuanTriVienAuth\DangNhapController@getDangNhap')->name('admin.dangnhap.index');
//     Route::post('dang-nhap','QuanTriVienAuth\DangNhapController@postDangNhap')->name('admin.dangnhap.post');
// });
