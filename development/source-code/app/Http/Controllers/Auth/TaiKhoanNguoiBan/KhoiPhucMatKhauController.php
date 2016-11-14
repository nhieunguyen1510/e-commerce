<?php

namespace App\Http\Controllers\Auth\TaiKhoanNguoiBan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TaiKhoanNguoiBan;
use Illuminate\Support\Facades\Hash; 

class KhoiPhucMatKhauController extends Controller
{
    public function getKhoiPhucMatKhau(Request $request)
    {
        $email = $request->email;
        $maKhoiPhuc = $request->maKhoiPhuc;
        return view ('pages.auth.nguoi-ban.khoi-phuc-mat-khau')
                    ->with('email', $email)
                    ->with('maKhoiPhuc', $maKhoiPhuc);
    }
    public function postKhoiPhucMatKhau(Request $request)
    {
        $matKhau = $request->txtMatKhau;
        $matKhauNhapLai = $request->txtMatKhauNhapLai;
        $email = $request->txtEmail;
        $maKhoiPhuc = $request->txtMaKhoiPhuc;
        if($matKhau!=$matKhauNhapLai)
        {
            $request->session()->flash('thongbao','Mật khẩu không trùng khớp');
            return back();
        }
        else
        {
            $taiKhoanNguoiBan = TaiKhoanNguoiBan::where('email', $email)
                                                ->where('ma_khoi_phuc_mat_khau', $maKhoiPhuc)->first();
            if(empty($taiKhoanNguoiBan))
            {
                $request->session()->flash('thongbao','Email hoặc mã khôi phục mật khẩu không tồn tại');
                return back();
            }
            else
            {
                $matKhau = Hash::make($matKhau);
                $taiKhoanNguoiBan['mat_khau'] = $matKhau;
                $taiKhoanNguoiBan['ma_khoi_phuc_mat_khau'] = '';
                $taiKhoanNguoiBan->save();
                return redirect()->route('dangnhap.nguoiban.index');
            }
        }
    }
}
