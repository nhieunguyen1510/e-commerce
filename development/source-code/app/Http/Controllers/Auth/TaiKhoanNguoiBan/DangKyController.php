<?php

namespace App\Http\Controllers\Auth\TaiKhoanNguoiBan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TaiKhoanNguoiBan;
use Illuminate\Support\Facades\Hash; 

class DangKyController extends Controller
{
    public function getDangKy()
    {
        return view('pages.auth.nguoi-ban.dang-ky');
    } 
    public function postDangKy(Request $request)
    {
        // Lấy dữ liệu đầu vào là mật khẩu và hash mật khẩu trươc khi lưu
        $matKhau = $request->txtMatKhau;
        $matKhau = Hash::make($matKhau);
        
        // Tạo instance TaiKhoanNguoiBan và lấy những dữ liệu đầu vào gán vào instance
        $taiKhoanIns = new TaiKhoanNguoiBan();
        $taiKhoanIns['ten_dang_nhap'] = $request->txtTenDangNhap;
        $taiKhoanIns['ten'] = $request->txtTen;
        $taiKhoanIns['ho'] = $request->txtHo;
        $taiKhoanIns['ten_shop'] = $request->txtTenShop;
        $taiKhoanIns['email'] = $request->txtEmail;
        $taiKhoanIns['gioi_tinh'] = $request->txtGioiTinh;
        $taiKhoanIns['mat_khau'] = $matKhau;
        $taiKhoanIns->save();
        return redirect()->route('dangnhap.nguoiban.index');
    }
}
