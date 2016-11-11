<?php

namespace App\Http\Controllers\Auth\TaiKhoanNguoiMua;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TaiKhoanNguoiMua;

class QuenMatKhauController extends Controller
{
    public function getQuenMatKhau()
    {
        return view('pages.auth.nguoi-mua.quen-mat-khau');
    }
    public function postQuenMatKhau(Request $request)
    {
        $email = $request->txtEmail;
        $taiKhoanNguoiMua = TaiKhoanNguoiMua::where('email', $email)->first();
        if(empty($taiKhoanNguoiMua)){
            $request->session()->flash('thongbao', 'Email không tồn tại');
            return back();
        }
        else{
            $maKhoiPhuc = str_random(10);
            $taiKhoanNguoiMua['ma_khoi_phuc_mat_khau'] = $maKhoiPhuc;
            $taiKhoanNguoiMua->save();
            return redirect('xac-nhan-ma-khoi-phuc');
        }
    }
}
