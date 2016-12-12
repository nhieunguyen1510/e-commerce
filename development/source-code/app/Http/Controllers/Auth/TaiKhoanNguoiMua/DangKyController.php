<?php

namespace App\Http\Controllers\Auth\TaiKhoanNguoiMua;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TaiKhoanNguoiMua;
use Illuminate\Support\Facades\Hash;           //Sử dụng đối tượng Hash để mã hóa password

class DangKyController extends Controller
{
    //
    public function getDangKy()
    {
        return view('pages.auth.nguoi-mua.dang-ky');
    }

    public function postDangKy(Request $request)
    {
        // Lấy dữ liệu đầu vào là mật khẩu và hash mật khẩu trươc khi lưu
        $matKhau = $request->txtMatKhau;     
        $matKhau = Hash::make($matKhau);

        // Tạo instance TaiKhoanNguoiMua và lấy những dữ liệu đầu vào gán vào instance
        $taiKhoanIns = new TaiKhoanNguoiMua();
        $taiKhoanIns['ten_dang_nhap'] = $request->txtTenDangNhap;
        $taiKhoanIns['ten'] = $request->txtTen;
        $taiKhoanIns['ho'] = $request->txtHo;
        $taiKhoanIns['email'] = $request->txtEmail;
        $taiKhoanIns['so_dien_thoai'] = $request->txtSoDienThoai;
        $taiKhoanIns['dia_chi'] = $request->txtDiaChi;
        $taiKhoanIns['gioi_tinh'] = $request->txtGioiTinh;
        $taiKhoanIns['mat_khau'] = $matKhau;
        $taiKhoanIns->save();
        return redirect('dang-nhap');
    }
}
