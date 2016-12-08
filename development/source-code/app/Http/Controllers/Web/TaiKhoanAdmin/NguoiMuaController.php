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
        $danhsach_nguoimua = TaiKhoanNguoiMua::orderBy('id', 'desc')->paginate(4);
        $status = TinhTrang::where('bang', 'tai_khoan_nguoi_mua')->where('thuoc_tinh', 'id_tinh_trang')->get();


         if(isset($_GET['status']) && isset($_GET['key']))
        {
            $s_status = $_GET['status'];
            $s_key = $_GET['key'];
            if($s_status!="" && $s_key =="")
            {
                $danhsach_nguoimua = TaiKhoanNguoiMua::where('id_tinh_trang', $s_status)->orderBy('id', 'desc')->paginate(1);
            }

            if($s_status =="" && $s_key !="")
            {
                $danhsach_nguoimua = TaiKhoanNguoiMua::where('ho', 'like', '%'.$s_key.'%')->orwhere('ten', 'like', '%'.$s_key.'%')->orwhere('dia_chi', 'like', '%'.$s_key.'%')->orderBy('id', 'desc')->paginate(1);
            }

            if($s_status !="" && $s_key !="")
            {
                $danhsach_nguoimua = TaiKhoanNguoiMua::where(function ($query) use ($s_status) {
                                                $query->where('id_tinh_trang', $s_status);
                                            })
                                            ->where(function ($query) use($s_key) {
                                                $query->orwhere('ho', 'like', '%'.$s_key.'%')
                                                ->orwhere('ten', 'like', '%'.$s_key.'%')
                                                ->orwhere('dia_chi', 'like', '%'.$s_key.'%');
                                            })->paginate(2);
            }
        
        }
        
       return view('pages.auth.admin.nguoimua.danhsach', ['danhsach_nguoimua' => $danhsach_nguoimua, 'status' => $status]);
    }


    public function getChiTiet ($id)
    {
         $chi_tiet_nguoi_mua = DB::table('tai_khoan_nguoi_mua')->where ('id',$id)->get();
         $id_tinh_trang = $chi_tiet_nguoi_mua[0]->id_tinh_trang;
         $tinh_trang = DB::table('tinh_trang')->where('id', $id_tinh_trang)->get();
        return view('pages.auth.admin.nguoimua.chitiet', ['chi_tiet_nguoi_mua' => $chi_tiet_nguoi_mua, 'tinh_trang' => $tinh_trang]);
    }
}
