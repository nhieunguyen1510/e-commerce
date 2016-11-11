<?php

namespace App\Http\Controllers\Auth\TaiKhoanNguoiMua;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TaiKhoanNguoiMua;

class XacNhanMaKhoiPhucController extends Controller
{
    public function getXacNhanMaKhoiPhuc()
    {
        return view('pages.auth.nguoi-mua.xac-nhan-ma-khoi-phuc');
    }
    public function postXacNhanMaKhoiPhuc(Request $request)
    {
        $email = $request->txtEmail;
        $maKhoiPhuc = $request->txtMaKhoiPhuc;
        $taiKhoanNguoiMua = TaiKhoanNguoiMua::where('email', $email)
                                            ->where('ma_khoi_phuc_mat_khau', $maKhoiPhuc)->first();
        
        if(empty($taiKhoanNguoiMua)){
            $request->session()->flash('thongbao', 'Email hoặc mã khôi phục không tồn tại');
            return back();
        }
        else{
            return redirect('khoi-phuc-mat-khau?email='.$email.'&maKhoiPhuc='.$maKhoiPhuc);  
        }                     
    }
}
