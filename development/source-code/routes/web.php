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
Route::get('sanphamchitiet', $baseFolder.'SanPhamController@getCTSP',['name' => 'getCTSP']);
Route::get('dangnhap', 'admin\DangNhapController@getDangNhap')->name('getDangNhap');
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

Route::group(['prefix'=>'nguoiban'], function(){
    Route::get('dang-ky','Auth\TaiKhoanNguoiBan\DangKyController@getDangKy')->name('dangky.nguoiban.index');
    Route::post('dang-ky','Auth\TaiKhoanNguoiBan\DangKyController@postDangKy')->name('dangky.nguoiban.post');
    Route::get('dang-nhap','Auth\TaiKhoanNguoiBan\DangNhapController@getDangNhap')->name('dangnhap.nguoiban.index');
    Route::post('dang-nhap','Auth\TaiKhoanNguoiBan\DangNhapController@postDangNhap')->name('dangnhap.nguoiban.post');
    Route::get('dang-xuat','Auth\TaiKhoanNguoiBan\DangNhapController@getDangXuat')->name('dangxuat.nguoiban.index');
    Route::get('quen-mat-khau','Auth\TaiKhoanNguoiBan\QuenMatKhauController@getQuenMatKhau')->name('quenmatkhau.nguoiban.index');
    Route::post('quen-mat-khau','Auth\TaiKhoanNguoiBan\QuenMatKhauController@postQuenMatKhau')->name('quenmatkhau.nguoiban.post');
    Route::get('xac-nhan-ma-khoi-phuc','Auth\TaiKhoanNguoiBan\XacNhanMaKhoiPhucController@getXacNhanMaKhoiPhuc')->name('xacnhanmakhoiphuc.nguoiban.index');
    Route::post('xac-nhan-ma-khoi-phuc','Auth\TaiKhoanNguoiBan\XacNhanMaKhoiPhucController@postXacNhanMaKhoiPhuc')->name('xacnhanmakhoiphuc.nguoiban.post');
    Route::get('khoi-phuc-mat-khau','Auth\TaiKhoanNguoiBan\KhoiPhucMatKhauController@getKhoiPhucMatKhau')->name('khoiphucmatkhau.nguoiban.index');
    Route::post('khoi-phuc-mat-khau','Auth\TaiKhoanNguoiBan\KhoiPhucMatKhauController@postKhoiPhucMatKhau')->name('khoiphucmatkhau.nguoiban.post');

});


Route::group(['prefix'=>'nguoiban','middleware'=>'nguoiban'], function(){
   //nguoiban/sanpham/
    Route::group(['prefix'=>'sanpham'], function(){
        Route::get('them', 'Web\TaiKhoanNguoiBan\SanPhamController@create')->name('nguoiban-sanpham.create');
        Route::get('danhsach', 'Web\TaiKhoanNguoiBan\SanPhamController@index')->name('nguoiban-sanpham.index');
        Route::get('{idSanPham}/sua', 'Web\TaiKhoanNguoiBan\SanPhamController@update')->name('nguoiban-sanpham.update');
        Route::get('{idSanPham}', 'Web\TaiKhoanNguoiBan\SanPhamController@show')->name('nguoiban-sanpham.show');
        Route::post('them', 'Web\TaiKhoanNguoiBan\SanPhamController@store')->name('nguoiban-sanpham.store');
        Route::delete('{idSanPham}', 'Web\TaiKhoanNguoiBan\SanPhamController@destroy')->name('nguoiban-sanpham.destroy');
    });
   //nguoiban/donhang/
    Route::group(['prefix'=>'donhang'], function(){
        Route::get('danhsach', 'Web\TaiKhoanNguoiBan\DonHangController@index')->name('nguoiban-donhang.index');
        Route::get('{idDonHang}/sua/{idTinhTrang}', 'Web\TaiKhoanNguoiBan\DonHangController@update')->name('nguoiban-donhang.update');
        Route::get('{idSanPham}', 'Web\TaiKhoanNguoiBan\DonHangController@show')->name('nguoiban-donhang.show');
    });
});