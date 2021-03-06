<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TaiKhoanNguoiMua;
use Illuminate\Support\Facades\Auth;
use App\GiaoDich;
class UserController extends Controller
{
    
    public function get_nguoimua(){
   		

				 $idTaiKhoanNguoiMua = Auth::guard('web')
                                     ->user()
                                     ->id; 
        $userInfo= TaiKhoanNguoiMua::where('id', $idTaiKhoanNguoiMua)->get();
        $lichsuGiaoDich=GiaoDich::where('id_tai_khoan',$idTaiKhoanNguoiMua)->get();
        return view('pages.user-detail')->with('userInfo', $userInfo)
                                        ->with('lichsuGiaoDich',$lichsuGiaoDich); 

    }
    public function lich_su_chi_tiet($id)
    {
        $idTaiKhoanNguoiMua = Auth::guard('web')
                                ->user()
                                ->id;
        $donHang = GiaoDich::find($id);
        if($donHang->id_tai_khoan == $idTaiKhoanNguoiMua)
        {
            return view ('pages.lich-su-chi-tiet-giao-dich')
                        ->with('donHang', $donHang);
        }
        else
        {
            abort(404);
        }
    }

    public function sua_diachi_muahang(Request $request){
      $idTaiKhoanNguoiMua = Auth::guard('web')
                                     ->user()
                                     ->id; 
      $diaChiIns = TaiKhoanNguoiMua::findOrFail($idTaiKhoanNguoiMua);
       $diaChiIns->dia_chi = $request->diachimoi;
       $diaChiIns->save();
        return redirect()->route('thongtin.index');
    }
}


