<?php

namespace App\Http\Controllers\Auth\TaiKhoanAdmin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;           //Sử dụng đối tượng Authentication
use Illuminate\Support\Facades\DB;
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
        if(Auth::guard('admin')->attempt($credentials))       //đã mã hóa password
        {
            return redirect('admin/nguoiban/danhsach');
        }
        else
        {
             return redirect('admin/dang-nhap')->with('thongbao', 'Đăng nhập không thành công');
        };  
    }

     public function getDangXuat()
    {
        Auth::logout();
        return redirect('admin/dang-nhap');
    }

}
