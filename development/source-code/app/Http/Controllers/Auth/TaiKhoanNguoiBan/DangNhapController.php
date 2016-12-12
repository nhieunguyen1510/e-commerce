<?php

namespace App\Http\Controllers\Auth\TaiKhoanNguoiBan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;           //Sử dụng đối tượng Authentication
use Illuminate\Support\Facades\DB;
use App\TaiKhoanNguoiBan;

class DangNhapController extends Controller
{
    public function getDangNhap()
    {
        return view ('pages.auth.nguoi-ban.dang-nhap');
    }
    public function postDangNhap(Request $request)
    {
        $tenDangNhap = $request->txtTenDangNhap;
        $matKhau = $request->txtMatKhau;
        $taiKhoanNguoiBan = TaiKhoanNguoiBan::where('ten_dang_nhap', $tenDangNhap)->first();
        if($taiKhoanNguoiBan == null)
        {
            return redirect('nguoiban/dang-nhap')->with('thongbao','Đăng nhập không thành công');
        }
        elseif($taiKhoanNguoiBan->id_tinh_trang == 8)
        {
            return redirect('nguoiban/dang-nhap')->with('thongbao','Đăng nhập không thành công');
        }

        $credentials = ['ten_dang_nhap'=>$tenDangNhap, 'password'=>$matKhau];     //mặc định key phải là password

        if(Auth::guard('nguoi_ban')->attempt($credentials))       //đã mã hóa password
        {
            return redirect('nguoiban/sanpham/danhsach');
        }
        else
        {
            return redirect('nguoiban/dang-nhap')->with('thongbao','Đăng nhập không thành công');
        }
    }
    public function getDangXuat()
    {
        Auth::guard('nguoi_ban')->logout();
        return back();
    }
}
