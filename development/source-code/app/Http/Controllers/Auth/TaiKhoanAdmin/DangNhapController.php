<?php

namespace App\Http\Controllers\Auth\TaiKhoanAdmin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DangNhapController extends Controller
{
    //

    public function getDangNhap()
    {
        return view ('pages.auth.admin.dangnhap');
    }

    public function postDangNhap(Request $request)
    {
        $tenDangNhap = $request->txtUser;
        $matKhau = $request->txtPass;
        $credentials = ['ten_dang_nhap'=>$tenDangNhap, 'password'=>$matKhau];     //mặc định key phải là password
        if(Auth::guard('nguoi_ban')->attempt($credentials))       //đã mã hóa password
        {
            return redirect('admin/sanpham/danhsach');
        }
       
    }
}
