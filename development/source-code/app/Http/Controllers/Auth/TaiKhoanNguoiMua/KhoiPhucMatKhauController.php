<?php

namespace App\Http\Controllers\Auth\TaiKhoanNguoiMua;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TaiKhoanNguoiMua;
use Illuminate\Support\Facades\Hash;  

class KhoiPhucMatKhauController extends Controller
{
    public function getKhoiPhucMatKhau(Request $request)
    {
        $email = $request->email;
        $maKhoiPhuc = $request->maKhoiPhuc;
        return view ('pages.auth.nguoi-mua.khoi-phuc-mat-khau')
                    ->with('email', $email)
                    ->with('maKhoiPhuc', $maKhoiPhuc);
    }
    public function postKhoiPhucMatKhau(Request $request)
    {
        $matKhau = $request->txtMatKhau;
        $matKhauNhapLai = $request->txtMatKhauNhapLai; 
        $email = $request->txtEmail;
        $maKhoiPhuc = $request->txtMaKhoiPhuc;
        if ($matKhau!=$matKhauNhapLai)
        {
            $request->session()->flash('thongbao', 'Mật khẩu không trùng khớp');
            return back();
        }
        else
        {
            $taiKhoanNguoiMua = TaiKhoanNguoiMua::where('email', $email)
                                            ->where('ma_khoi_phuc_mat_khau', $maKhoiPhuc)->first();
            if(empty($taiKhoanNguoiMua)){
                $request->session()->flash('thongbao', 'Email hoặc mã khôi phục mật khẩu không tồn tại');
                return back();
            }
            else{
                $matKhau = Hash::make($matKhau);
                $taiKhoanNguoiMua['mat_khau'] = $matKhau;
                $taiKhoanNguoiMua['ma_khoi_phuc_mat_khau'] = '';
                $taiKhoanNguoiMua->save();
                return redirect('dang-nhap');
            }
        }
    }
}
