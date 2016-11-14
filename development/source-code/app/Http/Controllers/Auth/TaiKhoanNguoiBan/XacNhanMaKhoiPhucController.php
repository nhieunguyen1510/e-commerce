<?php

namespace App\Http\Controllers\Auth\TaiKhoanNguoiBan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TaiKhoanNguoiBan;

class XacNhanMaKhoiPhucController extends Controller
{
    public function getXacNhanMaKhoiPhuc()
    {
        return view ('pages.auth.nguoi-ban.xac-nhan-ma-khoi-phuc');
    }
    public function postXacNhanMaKhoiPhuc(Request $request)
    {
        $email = $request->txtEmail;
        $maKhoiPhuc = $request->txtMaKhoiPhuc;
        $taiKhoanNguoiBan = TaiKhoanNguoiBan::where('email', $email)
                                            ->where('ma_khoi_phuc_mat_khau', $maKhoiPhuc)->first();
        if(empty($taiKhoanNguoiBan))
        {
            $request->session()->flash('thongbao','Email hoặc mã khôi phục không tồn tại');
            return back();
        }
        else
        {
            return redirect()->route('khoiphucmatkhau.nguoiban.index',['email'=>$email, 'maKhoiPhuc'=>$maKhoiPhuc]);
        }
    }
}
