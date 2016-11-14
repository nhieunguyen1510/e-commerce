<?php

namespace App\Http\Controllers\Auth\TaiKhoanNguoiBan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TaiKhoanNguoiBan;

class QuenMatKhauController extends Controller
{
    public function getQuenMatKhau()
    {
        return view('pages.auth.nguoi-ban.quen-mat-khau');
    }
    public function postQuenMatKhau(Request $request)
    {
        $email = $request->txtEmail;
        $taiKhoanNguoiBan = TaiKhoanNguoiBan::where('email',$email)->first();
        if(empty($taiKhoanNguoiBan))
        {
            $request->session()->flash('thongbao','Email không tồn tại');
            return back();
        }
        else
        {
            $maKhoiPhuc = str_random(10);
            $taiKhoanNguoiBan['ma_khoi_phuc_mat_khau'] = $maKhoiPhuc;
            $taiKhoanNguoiBan->save();
            return redirect()->route('xacnhanmakhoiphuc.nguoiban.index');
        }
    }
}
