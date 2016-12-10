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
        $status = TinhTrang::where('bang', 'giao_dich')->where('thuoc_tinh', 'id_tinh_trang')->get();
        $sort_year = DB::select("CALL Giao_Dich_GetYear()");

        $thongbao_loi = "";
        if((isset($_GET['s_year']) && isset($_GET['s_month']) && isset($_GET['status']) && isset($_GET['key'])) && $_GET['s_year']== "" && $_GET['s_month']!= "")
        
         {
             $thongbao_loi = "Vui lòng xem lại thông tin lọc";
         }


        $danhsach_hoadon_mua = DB::table('giao_dich')
        ->join('tinh_trang', 'giao_dich.id_tinh_trang', '=', 'tinh_trang.id')
        ->join('tai_khoan_nguoi_mua', 'giao_dich.id_tai_khoan', '=', 'tai_khoan_nguoi_mua.id')
        ->select('giao_dich.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_mua.ho', 'tai_khoan_nguoi_mua.ten')
        ->paginate(2);


        if(isset($_GET['status']) && isset($_GET['key']) && isset($_GET['s_year']) && isset($_GET['s_month']))
        {
            $s_status = $_GET['status'];
            $s_key = $_GET['key'];
            $s_year = $_GET['s_year']; 
            $s_month = $_GET['s_month'];
            if($s_status!="" && $s_key =="" && $s_year == "" && $s_month =="")
            {

                $danhsach_hoadon_mua = DB::table('giao_dich')
                    ->join('tinh_trang', 'giao_dich.id_tinh_trang', '=', 'tinh_trang.id')
                    ->join('tai_khoan_nguoi_mua', 'giao_dich.id_tai_khoan', '=', 'tai_khoan_nguoi_mua.id')
                    ->where('giao_dich.id_tinh_trang', $s_status)
                    ->select('giao_dich.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_mua.ho', 'tai_khoan_nguoi_mua.ten')
                    ->paginate(2);
                
            }

            if($s_status =="" && $s_key !="" && $s_year == "" && $s_month =="")
            {

                 $danhsach_hoadon_mua = DB::table('giao_dich')
                    ->join('tinh_trang', 'giao_dich.id_tinh_trang', '=', 'tinh_trang.id')
                    ->join('tai_khoan_nguoi_mua', 'giao_dich.id_tai_khoan', '=', 'tai_khoan_nguoi_mua.id')
                    ->where('tai_khoan_nguoi_mua.ho', 'like', '%'.$s_key.'%')
                    ->orwhere('tai_khoan_nguoi_mua.ten', 'like', '%'.$s_key.'%')
                    ->select('giao_dich.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_mua.ho', 'tai_khoan_nguoi_mua.ten')
                    ->paginate(2);
             
            }


            if($s_status !="" && $s_key !="" && $s_year == "" && $s_month =="")
            {

                 $danhsach_hoadon_mua = DB::table('giao_dich')
                    ->join('tinh_trang', 'giao_dich.id_tinh_trang', '=', 'tinh_trang.id')
                    ->join('tai_khoan_nguoi_mua', 'giao_dich.id_tai_khoan', '=', 'tai_khoan_nguoi_mua.id')
                     ->where(function ($query) use ($s_status) {
                                                $query->where('giao_dich.id_tinh_trang', $s_status);
                                            })
                                            ->where(function ($query) use($s_key) {
                                                $query->orwhere('tai_khoan_nguoi_mua.ho', 'like', '%'.$s_key.'%')
                                                ->orwhere('tai_khoan_nguoi_mua.ten', 'like', '%'.$s_key.'%');
                                            })
                    ->select('giao_dich.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_mua.ho', 'tai_khoan_nguoi_mua.ten')
                    ->paginate(2);


                   
             
            }

            if($s_status =="" && $s_key =="" && $s_year != "" && $s_month =="")
            {
                $danhsach_hoadon_mua = DB::table('giao_dich')
                    ->join('tinh_trang', 'giao_dich.id_tinh_trang', '=', 'tinh_trang.id')
                    ->join('tai_khoan_nguoi_mua', 'giao_dich.id_tai_khoan', '=', 'tai_khoan_nguoi_mua.id')
                    ->whereYear('thoi_gian_giao_dich', $s_year)
                    ->select('giao_dich.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_mua.ho', 'tai_khoan_nguoi_mua.ten')
                     ->paginate(2);
            }

            if($s_status =="" && $s_key =="" && $s_year != "" && $s_month !="")
            {
                $danhsach_hoadon_mua = DB::table('giao_dich')
                    ->join('tinh_trang', 'giao_dich.id_tinh_trang', '=', 'tinh_trang.id')
                    ->join('tai_khoan_nguoi_mua', 'giao_dich.id_tai_khoan', '=', 'tai_khoan_nguoi_mua.id')
                    ->whereYear('thoi_gian_giao_dich', $s_year)
                    ->whereMonth('thoi_gian_giao_dich', $s_month)
                    ->select('giao_dich.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_mua.ho', 'tai_khoan_nguoi_mua.ten')
                     ->paginate(2);
            }

            if($s_status !="" && $s_key =="" && $s_year != "" && $s_month =="")
            {
                $danhsach_hoadon_mua = DB::table('giao_dich')
                    ->join('tinh_trang', 'giao_dich.id_tinh_trang', '=', 'tinh_trang.id')
                    ->join('tai_khoan_nguoi_mua', 'giao_dich.id_tai_khoan', '=', 'tai_khoan_nguoi_mua.id')
                    ->whereYear('thoi_gian_giao_dich', $s_year)
                    ->where('giao_dich.id_tinh_trang', $s_status)
                    ->select('giao_dich.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_mua.ho', 'tai_khoan_nguoi_mua.ten')
                     ->paginate(2);
            }

            if($s_status =="" && $s_key !="" && $s_year != "" && $s_month =="")
            {
                $danhsach_hoadon_mua = DB::table('giao_dich')
                    ->join('tinh_trang', 'giao_dich.id_tinh_trang', '=', 'tinh_trang.id')
                    ->join('tai_khoan_nguoi_mua', 'giao_dich.id_tai_khoan', '=', 'tai_khoan_nguoi_mua.id')
                    ->whereYear('thoi_gian_giao_dich', $s_year)
                    ->where(function ($query) use($s_key) {
                                                $query->orwhere('tai_khoan_nguoi_mua.ho', 'like', '%'.$s_key.'%')
                                                ->orwhere('tai_khoan_nguoi_mua.ten', 'like', '%'.$s_key.'%');
                                            })
                    ->select('giao_dich.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_mua.ho', 'tai_khoan_nguoi_mua.ten')
                     ->paginate(2);
            }

            if($s_status =="" && $s_key !="" && $s_year != "" && $s_month !="")
            {
                $danhsach_hoadon_mua = DB::table('giao_dich')
                    ->join('tinh_trang', 'giao_dich.id_tinh_trang', '=', 'tinh_trang.id')
                    ->join('tai_khoan_nguoi_mua', 'giao_dich.id_tai_khoan', '=', 'tai_khoan_nguoi_mua.id')
                    ->whereYear('thoi_gian_giao_dich', $s_year)
                    ->whereMonth('thoi_gian_giao_dich', $s_month)
                    ->where(function ($query) use($s_key) {
                                                $query->orwhere('tai_khoan_nguoi_mua.ho', 'like', '%'.$s_key.'%')
                                                ->orwhere('tai_khoan_nguoi_mua.ten', 'like', '%'.$s_key.'%');
                                            })
                    ->select('giao_dich.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_mua.ho', 'tai_khoan_nguoi_mua.ten')
                     ->paginate(2);
            }

            if($s_status !="" && $s_key =="" && $s_year != "" && $s_month !="")
            {
                $danhsach_hoadon_mua = DB::table('giao_dich')
                    ->join('tinh_trang', 'giao_dich.id_tinh_trang', '=', 'tinh_trang.id')
                    ->join('tai_khoan_nguoi_mua', 'giao_dich.id_tai_khoan', '=', 'tai_khoan_nguoi_mua.id')
                    ->whereYear('thoi_gian_giao_dich', $s_year)
                    ->whereMonth('thoi_gian_giao_dich', $s_month)
                    ->where('giao_dich.id_tinh_trang', $s_status)
                    ->select('giao_dich.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_mua.ho', 'tai_khoan_nguoi_mua.ten')
                     ->paginate(2);
            }


            if($s_status !="" && $s_key !="" && $s_year != "" && $s_month =="")
            {
                $danhsach_hoadon_mua = DB::table('giao_dich')
                    ->join('tinh_trang', 'giao_dich.id_tinh_trang', '=', 'tinh_trang.id')
                    ->join('tai_khoan_nguoi_mua', 'giao_dich.id_tai_khoan', '=', 'tai_khoan_nguoi_mua.id')
                    ->whereYear('thoi_gian_giao_dich', $s_year)
                    ->where('giao_dich.id_tinh_trang', $s_status)
                    ->where(function ($query) use($s_key) {
                                                $query->orwhere('tai_khoan_nguoi_mua.ho', 'like', '%'.$s_key.'%')
                                                ->orwhere('tai_khoan_nguoi_mua.ten', 'like', '%'.$s_key.'%');
                                            })
                    ->select('giao_dich.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_mua.ho', 'tai_khoan_nguoi_mua.ten')
                     ->paginate(2);
            }

            if($s_status !="" && $s_key !="" && $s_year != "" && $s_month !="")
            {
                $danhsach_hoadon_mua = DB::table('giao_dich')
                    ->join('tinh_trang', 'giao_dich.id_tinh_trang', '=', 'tinh_trang.id')
                    ->join('tai_khoan_nguoi_mua', 'giao_dich.id_tai_khoan', '=', 'tai_khoan_nguoi_mua.id')
                    ->whereYear('thoi_gian_giao_dich', $s_year)
                    ->whereMonth('thoi_gian_giao_dich', $s_month)
                    ->where('giao_dich.id_tinh_trang', $s_status)
                    ->where(function ($query) use($s_key) {
                                                $query->orwhere('tai_khoan_nguoi_mua.ho', 'like', '%'.$s_key.'%')
                                                ->orwhere('tai_khoan_nguoi_mua.ten', 'like', '%'.$s_key.'%');
                                            })
                    ->select('giao_dich.*', 'tinh_trang.tinh_trang', 'tai_khoan_nguoi_mua.ho', 'tai_khoan_nguoi_mua.ten')
                     ->paginate(2);
            }

            

            
        
        }


        //return $danhsach_hoadon_mua;
        return view('pages.auth.admin.hoadonmua.danhsach')
        ->with('danhsach_hoadon_mua', $danhsach_hoadon_mua)->with('status', $status)
        ->with('sort_year', $sort_year)
        ->with('thongbao_loi', $thongbao_loi);
        

    }

    public function getChiTiet ($id)
    {
         $chi_tiet_hoadon_mua = DB::table('chi_tiet_giao_dich')
                                ->join('san_pham', 'chi_tiet_giao_dich.id_san_pham', '=', 'san_pham.id')
                                ->join('giao_dich', 'chi_tiet_giao_dich.id_giao_dich', '=', 'giao_dich.id')
                                ->where ('chi_tiet_giao_dich.id_giao_dich',$id)
                                 ->select('chi_tiet_giao_dich.*', 'san_pham.ten')->get();

        // $hoadon_mua = DB::table('giao_dich')
        //                         ->where ('id',$id)->get();
        // $id_taikhoan_mua = $hoadon_mua[0]->{'id_tai_khoan'};

        // $taikhoan_mua = DB::table('tai_khoan_nguoi_mua')
        //                         ->where ('id',$id_taikhoan_mua)->get(); 

        //$idsp =  

        // $taikhoan_ban = DB::table('tai_khoan_nguoi_mua')
        //                         ->where ('id',$id_taikhoan_mua)->get();

        
         //$id_tinh_trang = $chi_tiet_hoadon_mua[0]->id_tinh_trang;
         //$tinh_trang = DB::table('tinh_trang')->where('id', $id_tinh_trang)->get();
        return view('pages.auth.admin.hoadonmua.chitiet')
        ->with('chi_tiet_hoadon_mua', $chi_tiet_hoadon_mua);
        //return $chi_tiet_hoadon_mua;
    }
}
