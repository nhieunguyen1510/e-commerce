<?php

namespace App\Http\Controllers\Web\TaiKhoanAdmin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\TaiKhoanNguoiMua;
use App\TinhTrang;

class NguoiMuaController extends Controller
{
    //

    public function getDanhSach ()
    {
        $danhsach_nguoimua = TaiKhoanNguoiMua::orderBy('id', 'desc')->paginate(10);
        //$status = TinhTrang::where('bang', 'tai_khoan_nguoi_mua')->where('thuoc_tinh', 'id_tinh_trang')->get();


         if(isset($_GET['key']))
        {
           
            $s_key = $_GET['key'];
           

            if($s_key !="")
            {
                $danhsach_nguoimua = TaiKhoanNguoiMua::where('ho', 'like', '%'.$s_key.'%')->orwhere('ten', 'like', '%'.$s_key.'%')->orwhere('dia_chi', 'like', '%'.$s_key.'%')->orderBy('id', 'desc')->paginate(10);
            }

            
        
        }
        
       return view('pages.auth.admin.nguoimua.danhsach', ['danhsach_nguoimua' => $danhsach_nguoimua]);
    }


    public function getChiTiet ($id)
    {
         

        $chi_tiet_nguoi_mua= TaiKhoanNguoiMua::find($id);
        $anhDaiDienURL = $chi_tiet_nguoi_mua->getAnhDaiDien();
        return view('pages.auth.admin.nguoimua.chitiet', ['chi_tiet_nguoi_mua' => $chi_tiet_nguoi_mua, 'anhDaiDienURL' => $anhDaiDienURL]);

    }
}
