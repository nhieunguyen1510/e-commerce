<?php

namespace App\Http\Controllers\Web\TaiKhoanAdmin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\GiaoDichNguoiBan;
use App\TinhTrang;
use App\SanPham;
use App\GiaoDich;


class HoaDonBanHangController extends Controller
{
    //
    public function getDanhSach ()
    {
        //$danhsach_hoadon_ban= GiaoDich::orderBy('id', 'desc')->paginate(4);
        $status = TinhTrang::where('bang', 'giao_dich_nguoi_ban')->where('thuoc_tinh', 'id_tinh_trang')->get();
        $sort_year = DB::select("CALL Giao_Dich_NguoiBan_GetYear()");

        $thongbao_loi = "";
        if((isset($_GET['s_year']) && isset($_GET['s_month']) && isset($_GET['status']) && isset($_GET['key'])) && $_GET['s_year']== "" && $_GET['s_month']!= "")
        
         {
             $thongbao_loi = "Vui lòng xem lại thông tin lọc";
         }


        $danhsach_hoadon_ban = DB::table('giao_dich_nguoi_ban')
        ->join('tinh_trang', 'giao_dich_nguoi_ban.id_tinh_trang', '=', 'tinh_trang.id')
        ->join('tai_khoan_nguoi_ban', 'giao_dich_nguoi_ban.id_tai_khoan_ban', '=', 'tai_khoan_nguoi_ban.id')
        ->select('giao_dich_nguoi_ban.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_ban.ten_shop')
        ->paginate(10);


        if(isset($_GET['status']) && isset($_GET['key']) && isset($_GET['s_year']) && isset($_GET['s_month']))
        {
            $s_status = $_GET['status'];
            $s_key = $_GET['key'];
            $s_year = $_GET['s_year']; 
            $s_month = $_GET['s_month'];
            if($s_status!="" && $s_key =="" && $s_year == "" && $s_month =="")
            {

                $danhsach_hoadon_ban = DB::table('giao_dich_nguoi_ban')
                    ->join('tinh_trang', 'giao_dich_nguoi_ban.id_tinh_trang', '=', 'tinh_trang.id')
                    ->join('tai_khoan_nguoi_ban', 'giao_dich_nguoi_ban.id_tai_khoan_ban', '=', 'tai_khoan_nguoi_ban.id')
                    ->where('giao_dich_nguoi_ban.id_tinh_trang', $s_status)
                    ->select('giao_dich_nguoi_ban.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_ban.ten_shop')
                    ->paginate(10);
                
            }

            if($s_status =="" && $s_key !="" && $s_year == "" && $s_month =="")
            {

                  $danhsach_hoadon_ban = DB::table('giao_dich_nguoi_ban')
                    ->join('tinh_trang', 'giao_dich_nguoi_ban.id_tinh_trang', '=', 'tinh_trang.id')
                    ->join('tai_khoan_nguoi_ban', 'giao_dich_nguoi_ban.id_tai_khoan_ban', '=', 'tai_khoan_nguoi_ban.id')
                    ->where('tai_khoan_nguoi_ban.ten_shop', 'like', '%'.$s_key.'%')
                    ->select('giao_dich_nguoi_ban.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_ban.ten_shop')
                    ->paginate(10);
             
            }


            if($s_status !="" && $s_key !="" && $s_year == "" && $s_month =="")
            {

                 $danhsach_hoadon_ban = DB::table('giao_dich_nguoi_ban')
                    ->join('tinh_trang', 'giao_dich_nguoi_ban.id_tinh_trang', '=', 'tinh_trang.id')
                    ->join('tai_khoan_nguoi_ban', 'giao_dich_nguoi_ban.id_tai_khoan_ban', '=', 'tai_khoan_nguoi_ban.id')
                     ->where(function ($query) use ($s_status) {
                                                $query->where('giao_dich_nguoi_ban.id_tinh_trang', $s_status);
                                            })
                                            ->where(function ($query) use($s_key) {
                                                $query->where('tai_khoan_nguoi_ban.ten_shop', 'like', '%'.$s_key.'%');
                                            })
                    ->select('giao_dich_nguoi_ban.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_ban.ten_shop')
                    ->paginate(10);


                   
             
            }

            if($s_status =="" && $s_key =="" && $s_year != "" && $s_month =="")
            {
                 $danhsach_hoadon_ban = DB::table('giao_dich_nguoi_ban')
                    ->join('tinh_trang', 'giao_dich_nguoi_ban.id_tinh_trang', '=', 'tinh_trang.id')
                    ->join('tai_khoan_nguoi_ban', 'giao_dich_nguoi_ban.id_tai_khoan_ban', '=', 'tai_khoan_nguoi_ban.id')
                    ->whereYear('thoi_gian_giao_dich', $s_year)
                   ->select('giao_dich_nguoi_ban.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_ban.ten_shop')
                     ->paginate(10);
            }

            if($s_status =="" && $s_key =="" && $s_year != "" && $s_month !="")
            {
               $danhsach_hoadon_ban = DB::table('giao_dich_nguoi_ban')
                    ->join('tinh_trang', 'giao_dich_nguoi_ban.id_tinh_trang', '=', 'tinh_trang.id')
                    ->join('tai_khoan_nguoi_ban', 'giao_dich_nguoi_ban.id_tai_khoan_ban', '=', 'tai_khoan_nguoi_ban.id')
                    ->whereYear('thoi_gian_giao_dich', $s_year)
                    ->whereMonth('thoi_gian_giao_dich', $s_month)
                    ->select('giao_dich_nguoi_ban.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_ban.ten_shop')
                     ->paginate(10);
            }

            if($s_status !="" && $s_key =="" && $s_year != "" && $s_month =="")
            {
               $danhsach_hoadon_ban = DB::table('giao_dich_nguoi_ban')
                    ->join('tinh_trang', 'giao_dich_nguoi_ban.id_tinh_trang', '=', 'tinh_trang.id')
                    ->join('tai_khoan_nguoi_ban', 'giao_dich_nguoi_ban.id_tai_khoan_ban', '=', 'tai_khoan_nguoi_ban.id')
                    ->whereYear('thoi_gian_giao_dich', $s_year)
                    ->where('giao_dich_nguoi_ban.id_tinh_trang', $s_status)
                    ->select('giao_dich_nguoi_ban.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_ban.ten_shop')
                     ->paginate(10);
            }

            if($s_status =="" && $s_key !="" && $s_year != "" && $s_month =="")
            {
                 $danhsach_hoadon_ban = DB::table('giao_dich_nguoi_ban')
                    ->join('tinh_trang', 'giao_dich_nguoi_ban.id_tinh_trang', '=', 'tinh_trang.id')
                    ->join('tai_khoan_nguoi_ban', 'giao_dich_nguoi_ban.id_tai_khoan_ban', '=', 'tai_khoan_nguoi_ban.id')
                    ->whereYear('thoi_gian_giao_dich', $s_year)
                    ->where('tai_khoan_nguoi_ban.ten_shop', 'like', '%'.$s_key.'%')
                    ->select('giao_dich_nguoi_ban.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_ban.ten_shop')
                     ->paginate(10);
            }

            if($s_status =="" && $s_key !="" && $s_year != "" && $s_month !="")
            {
                $danhsach_hoadon_ban = DB::table('giao_dich_nguoi_ban')
                    ->join('tinh_trang', 'giao_dich_nguoi_ban.id_tinh_trang', '=', 'tinh_trang.id')
                    ->join('tai_khoan_nguoi_ban', 'giao_dich_nguoi_ban.id_tai_khoan_ban', '=', 'tai_khoan_nguoi_ban.id')
                    ->whereYear('thoi_gian_giao_dich', $s_year)
                    ->whereMonth('thoi_gian_giao_dich', $s_month)
                    ->where('tai_khoan_nguoi_ban.ten_shop', 'like', '%'.$s_key.'%')
                    ->select('giao_dich_nguoi_ban.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_ban.ten_shop')
                     ->paginate(10);
            }

            if($s_status !="" && $s_key =="" && $s_year != "" && $s_month !="")
            {
                $danhsach_hoadon_ban = DB::table('giao_dich_nguoi_ban')
                    ->join('tinh_trang', 'giao_dich_nguoi_ban.id_tinh_trang', '=', 'tinh_trang.id')
                    ->join('tai_khoan_nguoi_ban', 'giao_dich_nguoi_ban.id_tai_khoan_ban', '=', 'tai_khoan_nguoi_ban.id')
                    ->whereYear('thoi_gian_giao_dich', $s_year)
                    ->whereMonth('thoi_gian_giao_dich', $s_month)
                    ->where('giao_dich_nguoi_ban.id_tinh_trang', $s_status)
                     ->select('giao_dich_nguoi_ban.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_ban.ten_shop')
                     ->paginate(10);
            }


            if($s_status !="" && $s_key !="" && $s_year != "" && $s_month =="")
            {
                $danhsach_hoadon_ban = DB::table('giao_dich_nguoi_ban')
                    ->join('tinh_trang', 'giao_dich_nguoi_ban.id_tinh_trang', '=', 'tinh_trang.id')
                    ->join('tai_khoan_nguoi_ban', 'giao_dich_nguoi_ban.id_tai_khoan_ban', '=', 'tai_khoan_nguoi_ban.id')
                    ->whereYear('thoi_gian_giao_dich', $s_year)
                    ->where('giao_dich_nguoi_ban.id_tinh_trang', $s_status)
                    ->where('tai_khoan_nguoi_ban.ten_shop', 'like', '%'.$s_key.'%')
                    ->select('giao_dich_nguoi_ban.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_ban.ten_shop')
                     ->paginate(10);
            }

            if($s_status !="" && $s_key !="" && $s_year != "" && $s_month !="")
            {
                $danhsach_hoadon_ban = DB::table('giao_dich_nguoi_ban')
                    ->join('tinh_trang', 'giao_dich_nguoi_ban.id_tinh_trang', '=', 'tinh_trang.id')
                    ->join('tai_khoan_nguoi_ban', 'giao_dich_nguoi_ban.id_tai_khoan_ban', '=', 'tai_khoan_nguoi_ban.id')
                    ->whereYear('thoi_gian_giao_dich', $s_year)
                    ->whereMonth('thoi_gian_giao_dich', $s_month)
                    ->where('giao_dich_nguoi_ban.id_tinh_trang', $s_status)
                    ->where('tai_khoan_nguoi_ban.ten_shop', 'like', '%'.$s_key.'%')
                    ->select('giao_dich_nguoi_ban.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_ban.ten_shop')
                     ->paginate(10);
            }

            

            
        
        }

        //return $danhsach_hoadon_ban;
        return view('pages.auth.admin.hoadonban.danhsach')
        ->with('danhsach_hoadon_ban', $danhsach_hoadon_ban)->with('status', $status)
        ->with('sort_year', $sort_year)
        ->with('thongbao_loi', $thongbao_loi);
        

    }

    public function getChiTiet ($id)
    {
        $giao_dich_nguoi_ban = GiaoDichNguoiBan::find($id);
        $id_gd = $giao_dich_nguoi_ban->{'id_giao_dich'};
        $giaoDich = GiaoDich::find($id_gd);
        //return $giaoDich;
        

        //$id_giao_dich_ban = 
        //return $giaoDichBanHang;
        //$giaoDich = GiaoDich::find($id);
        return view('pages.auth.admin.hoadonban.chitiet')
        ->with('giaoDich', $giaoDich)
        ->with('giao_dich_nguoi_ban', $giao_dich_nguoi_ban);
       
    }
}
