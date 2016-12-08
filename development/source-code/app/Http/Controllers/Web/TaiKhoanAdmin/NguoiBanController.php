<?php

namespace App\Http\Controllers\Web\TaiKhoanAdmin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TaiKhoanNguoiBan;
use App\TinhTrang;

class NguoiBanController extends Controller
{
    //

    public function getDanhSach ()
    {
        $danhsach_nguoiban = TaiKhoanNguoiBan::orderBy('id', 'desc')->paginate(4);
        $status = TinhTrang::where('bang', 'tai_khoan_nguoi_ban')->where('thuoc_tinh', 'id_tinh_trang')->get();

        if(isset($_GET['status']) && isset($_GET['key']))
        {
            $s_status = $_GET['status'];
            $s_key = $_GET['key'];
            if($s_status!="" && $s_key =="")
            {
                $danhsach_nguoiban = TaiKhoanNguoiBan::where('id_tinh_trang', $s_status)->orderBy('id', 'desc')->paginate(1);
            }

            if($s_status =="" && $s_key !="")
            {
                $danhsach_nguoiban = TaiKhoanNguoiBan::where('ten_shop', 'like', '%'.$s_key.'%')->orwhere('ho', 'like', '%'.$s_key.'%')->orwhere('ten', 'like', '%'.$s_key.'%')->orwhere('dia_chi', 'like', '%'.$s_key.'%')->orderBy('id', 'desc')->paginate(1);
            }

            if($s_status !="" && $s_key !="")
            {
                $danhsach_nguoiban = TaiKhoanNguoiBan::where(function ($query) use ($s_status) {
                                                $query->where('id_tinh_trang', $s_status);
                                            })
                                            ->where(function ($query) use($s_key) {
                                                $query->orwhere('ten_shop', 'like', '%'.$s_key.'%')
                                                ->orwhere('ho', 'like', '%'.$s_key.'%')
                                                ->orwhere('ten', 'like', '%'.$s_key.'%')
                                                ->orwhere('dia_chi', 'like', '%'.$s_key.'%');
                                            })->paginate(2);
            }
        
        }
       return view('pages.auth.admin.nguoiban.danhsach', ['danhsach_nguoiban' => $danhsach_nguoiban, 'status' => $status]);
    }


    public function getChiTiet ($id)
    {
         $chi_tiet_nguoi_ban = DB::table('tai_khoan_nguoi_ban')->where ('id',$id)->get();
         $id_tinh_trang = $chi_tiet_nguoi_ban[0]->id_tinh_trang;
         $tinh_trang = DB::table('tinh_trang')->where('id', $id_tinh_trang)->get();
        return view('pages.auth.admin.nguoiban.chitiet', ['chi_tiet_nguoi_ban' => $chi_tiet_nguoi_ban, 'tinh_trang' => $tinh_trang]);
    }
}
