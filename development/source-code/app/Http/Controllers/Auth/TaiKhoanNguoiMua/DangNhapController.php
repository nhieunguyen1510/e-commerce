<?php
namespace App\Http\Controllers\Auth\TaiKhoanNguoiMua;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;           //Sử dụng đối tượng Authentication
use Illuminate\Support\Facades\DB;
use App\TinhTrang;
use Cart;

class DangNhapController extends Controller
{
    public function getDangNhap()
    {
        return view('pages.auth.nguoi-mua.dang-nhap');           
    }
    public function postDangNhap(Request $request)
    {
        $tenDangNhap = $request->txtTenDangNhap;
        $matKhau = $request->txtMatKhau;
        $credentials = ['ten_dang_nhap'=>$tenDangNhap, 'password'=>$matKhau];     //mặc định key phải là password
        if(Auth::guard('web')->attempt($credentials))       //đã mã hóa password
        {
            return redirect('/');
        }
        else
        {
            return redirect('dang-nhap')->with('thongbao','Đăng nhập không thành công');
        }
    }
    public function getdangxuat()
    {
        Auth::logout();
        Cart::destroy();
        return back();
    }
}
