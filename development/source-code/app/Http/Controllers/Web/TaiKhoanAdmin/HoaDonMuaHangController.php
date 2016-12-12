<?php

namespace App\Http\Controllers\Web\TaiKhoanAdmin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\GiaoDich;
use App\TinhTrang;
use App\SanPham;

class HoaDonMuaHangController extends Controller
{
    //

    public function getDanhSach ()
    {
        //$danhsach_hoadon_mua= GiaoDich::orderBy('id', 'desc')->paginate(4);

        $sort_year = DB::select("CALL Giao_Dich_GetYear()");

        $thongbao_loi = "";
        if((isset($_GET['s_year']) && isset($_GET['s_month']) && isset($_GET['key'])) && $_GET['s_year']== "" && $_GET['s_month']!= "")
         {
             $thongbao_loi = "Vui lòng xem lại thông tin lọc";
         }


        $danhsach_hoadon_mua = DB::table('giao_dich')
        ->join('tai_khoan_nguoi_mua', 'giao_dich.id_tai_khoan', '=', 'tai_khoan_nguoi_mua.id')
        ->select('giao_dich.*','tai_khoan_nguoi_mua.ho', 'tai_khoan_nguoi_mua.ten')
        ->paginate(10);


        if(isset($_GET['key']) && isset($_GET['s_year']) && isset($_GET['s_month']))
        {
            $s_key = $_GET['key'];
            $s_year = $_GET['s_year'];
            $s_month = $_GET['s_month'];

            if($s_key !="" && $s_year == "" && $s_month =="")
            {

                 $danhsach_hoadon_mua = DB::table('giao_dich')
                    ->join('tai_khoan_nguoi_mua', 'giao_dich.id_tai_khoan', '=', 'tai_khoan_nguoi_mua.id')
                    ->where('tai_khoan_nguoi_mua.ho', 'like', '%'.$s_key.'%')
                    ->orwhere('tai_khoan_nguoi_mua.ten', 'like', '%'.$s_key.'%')
                    ->select('giao_dich.*', 'tai_khoan_nguoi_mua.ho', 'tai_khoan_nguoi_mua.ten')
                    ->paginate(10);

            }


            if($s_key =="" && $s_year != "" && $s_month =="")
            {
                $danhsach_hoadon_mua = DB::table('giao_dich')
                    ->join('tai_khoan_nguoi_mua', 'giao_dich.id_tai_khoan', '=', 'tai_khoan_nguoi_mua.id')
                    ->whereYear('thoi_gian_giao_dich', $s_year)
                    ->select('giao_dich.*', 'tai_khoan_nguoi_mua.ho', 'tai_khoan_nguoi_mua.ten')
                     ->paginate(10);
            }

            if($s_key =="" && $s_year != "" && $s_month !="")
            {
                $danhsach_hoadon_mua = DB::table('giao_dich')
                    ->join('tai_khoan_nguoi_mua', 'giao_dich.id_tai_khoan', '=', 'tai_khoan_nguoi_mua.id')
                    ->whereYear('thoi_gian_giao_dich', $s_year)
                    ->whereMonth('thoi_gian_giao_dich', $s_month)
                    ->select('giao_dich.*', 'tai_khoan_nguoi_mua.ho', 'tai_khoan_nguoi_mua.ten')
                     ->paginate(10);
            }



            if($s_key !="" && $s_year != "" && $s_month =="")
            {
                $danhsach_hoadon_mua = DB::table('giao_dich')
                    ->join('tai_khoan_nguoi_mua', 'giao_dich.id_tai_khoan', '=', 'tai_khoan_nguoi_mua.id')
                    ->whereYear('thoi_gian_giao_dich', $s_year)
                    ->where(function ($query) use($s_key) {
                                                $query->orwhere('tai_khoan_nguoi_mua.ho', 'like', '%'.$s_key.'%')
                                                ->orwhere('tai_khoan_nguoi_mua.ten', 'like', '%'.$s_key.'%');
                                            })
                    ->select('giao_dich.*','tai_khoan_nguoi_mua.ho', 'tai_khoan_nguoi_mua.ten')
                     ->paginate(10);
            }

            if($s_key !="" && $s_year != "" && $s_month !="")
            {
                $danhsach_hoadon_mua = DB::table('giao_dich')
                    ->join('tai_khoan_nguoi_mua', 'giao_dich.id_tai_khoan', '=', 'tai_khoan_nguoi_mua.id')
                    ->whereYear('thoi_gian_giao_dich', $s_year)
                    ->whereMonth('thoi_gian_giao_dich', $s_month)
                    ->where(function ($query) use($s_key) {
                                                $query->orwhere('tai_khoan_nguoi_mua.ho', 'like', '%'.$s_key.'%')
                                                ->orwhere('tai_khoan_nguoi_mua.ten', 'like', '%'.$s_key.'%');
                                            })
                    ->select('giao_dich.*', 'tai_khoan_nguoi_mua.ho', 'tai_khoan_nguoi_mua.ten')
                     ->paginate(10);
            }


        }


        //return $danhsach_hoadon_mua;
        return view('pages.auth.admin.hoadonmua.danhsach')
        ->with('danhsach_hoadon_mua', $danhsach_hoadon_mua)
        ->with('sort_year', $sort_year)
        ->with('thongbao_loi', $thongbao_loi);


    }

    public function getChiTiet ($id)
    {
        $giaoDich = GiaoDich::find($id);
        // $dsGiaoDichNguoiBan = $giaoDich->dsGiaoDichNguoiban;
        return view('pages.auth.admin.hoadonmua.chitiet')
                ->with('giaoDich', $giaoDich);
        // return json_encode($dsGiaoDichNguoiBan);
    }
}
