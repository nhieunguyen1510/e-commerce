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
Route::get('mua-hang/{id}',$baseFolder.'ShoppingController@muahang')->name('muahang');
Route::get('gio-hang',$baseFolder.'ShoppingController@giohang')->name('giohang');
Route::get('/', $baseFolder.'TrangChuController@getTrangChu')->name('trangchu.index');
Route::get('dangnhap', 'admin\DangNhapController@getDangNhap')->name('getDangNhap');
Route::get('xoa-gio-hang/{id}',$baseFolder.'ShoppingController@xoagiohang')->name('xoagiohang');
Route::post('sua-gio-hang',$baseFolder.'ShoppingController@suagiohang')->name('suagiohang');
Route::get('thanh-toan',$baseFolder.'ShoppingController@thanhtoan')->name('thanhtoan');

Route::post('timkiem',$baseFolder.'TimKiemController@timkiem')->name('timkiem');
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


Route::group(['prefix'=>'nguoiban','middleware'=>'nguoiban_redirect_if_authenticated'], function(){
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
        Route::get('sua', 'Web\TaiKhoanNguoiBan\DonHangController@update')->name('nguoiban-donhang.update');
        Route::get('{idSanPham}', 'Web\TaiKhoanNguoiBan\DonHangController@show')->name('nguoiban-donhang.show');
    });

    //nguoiban/thongtin/
    Route::group(['prefix'=>'thongtin'], function(){
        Route::get('thongtincanhan', 'Web\TaiKhoanNguoiBan\ThongTinCaNhanController@index')->name('nguoiban-thongtin.index');
        Route::post('thongtincanhan', 'Web\TaiKhoanNguoiBan\ThongTinCaNhanController@store')->name('nguoiban-thongtin.post');
    });

    //nguoiban/chungtu/
    Route::group(['prefix'=>'chungtu'], function(){
        Route::get('chungtunaptien', 'Web\TaiKhoanNguoiBan\ChungTuController@index')->name('nguoiban-chungtu.index');
    });
});


// Admin-Như
Route::group(['prefix'=>'admin'], function(){
    Route::get('dang-nhap','Auth\TaiKhoanAdmin\DangNhapController@getDangNhap')->name('dangnhap.admin.index');
    Route::post('dang-nhap','Auth\TaiKhoanAdmin\DangNhapController@postDangNhap')->name('dangnhap.admin.post');
    Route::get('dang-xuat','Auth\TaiKhoanAdmin\DangNhapController@getDangXuat')->name('dangxuat.admin.get');
});


Route::group(['prefix'=>'admin', 'middleware'=>'admin_Middleware'], function(){
    Route::group(['prefix'=>'nguoiban'], function(){
            Route::get('danhsach', 'Web\TaiKhoanAdmin\NguoiBanController@getDanhSach')->name('admin.nguoiban.getdanhsach');

            Route::get('chitiet/{id}', 'Web\TaiKhoanAdmin\NguoiBanController@getChiTiet')->name('admin.nguoiban.getchitiet');
            
        });


    Route::group(['prefix'=>'nguoimua'], function(){
            Route::get('danhsach', 'Web\TaiKhoanAdmin\NguoiMuaController@getDanhSach')->name('admin.nguoimua.getdanhsach');

            Route::get('chitiet/{id}', 'Web\TaiKhoanAdmin\NguoiMuaController@getChiTiet')->name('admin.nguoimua.getchitiet');
            
        });
    Route::group(['prefix'=>'hoadonban'], function(){
            Route::get('danhsach', 'Web\TaiKhoanAdmin\HoaDonBanHangController@getDanhSach')->name('admin.hoadonban.getdanhsach');

            Route::get('chitiet/{id}', 'Web\TaiKhoanAdmin\HoaDonBanHangController@getChiTiet')->name('admin.hoadonban.getchitiet');
            
        });

    Route::group(['prefix'=>'hoadonmua'], function(){
            Route::get('danhsach', 'Web\TaiKhoanAdmin\HoaDonMuaHangController@getDanhSach')->name('admin.hoadonmua.getdanhsach');

            Route::get('chitiet/{id}', 'Web\TaiKhoanAdmin\HoaDonMuaHangController@getChiTiet')->name('admin.hoadonmua.getchitiet');
            
        });

    Route::group(['prefix'=>'hoadontaikhoan'], function(){
            Route::get('danhsach', 'Web\TaiKhoanAdmin\HoaDonTaiKhoanController@getDanhSach')->name('admin.hoadontaikhoan.getdanhsach');

            Route::get('chitiet/{id}', 'Web\TaiKhoanAdmin\HoaDonTaiKhoanController@getChiTiet')->name('admin.hoadontaikhoan.getchitiet');
            
        });
});
