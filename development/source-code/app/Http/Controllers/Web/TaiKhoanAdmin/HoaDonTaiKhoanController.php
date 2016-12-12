<?php

namespace App\Http\Controllers\Web\TaiKhoanAdmin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\HoaDonTaiKhoan;
use DB;
use App\TinhTrang;
use App\TaiKhoangNguoiBan;
use DateTime;

class HoaDonTaiKhoanController extends Controller
{
    //
     public function getDanhSach ()
    {
        $danhsach_hoadon_taikhoan = HoaDonTaiKhoan::orderBy('id', 'desc')->paginate(4);
       
        $sort_year = DB::select("CALL GiaoDich_TaiKhoan_GetYear()");
        $thongbao_loi = "";
        if((isset($_GET['year']) && isset($_GET['month']) && isset($_GET['key'])) && $_GET['year']== "" && $_GET['month']!= "")
        
         {
             $thongbao_loi = "Vui lòng xem lại thông tin lọc";
         }


        $danhsach_hoadon_taikhoan = DB::table('hoa_don_tai_khoan')
        ->join('tai_khoan_nguoi_ban', 'hoa_don_tai_khoan.id_tai_khoan_ban', '=', 'tai_khoan_nguoi_ban.id')
        ->select('hoa_don_tai_khoan.*', 'tai_khoan_nguoi_ban.ten_shop', 'tai_khoan_nguoi_ban.so_tai_khoan')
        ->paginate(10);

        if(isset($_GET['key']) && isset($_GET['month']) && isset($_GET['year']))
        {
            $s_key = $_GET['key'];
            $s_year = $_GET['year'];
            $s_month = $_GET['month'];
            if($s_key !="" && $s_year == "" && $s_month =="")
            {                
                $danhsach_hoadon_taikhoan = DB::table('hoa_don_tai_khoan')
                ->join('tai_khoan_nguoi_ban', 'hoa_don_tai_khoan.id_tai_khoan_ban', '=', 'tai_khoan_nguoi_ban.id')
                    ->where('tai_khoan_nguoi_ban.ten_shop', 'like', '%'.$s_key.'%')
                    ->select('hoa_don_tai_khoan.*', 'tai_khoan_nguoi_ban.ten_shop', 'tai_khoan_nguoi_ban.so_tai_khoan')
                    ->paginate(10);
             
            }

            if($s_key =="" && $s_year != "" && $s_month =="")
            {
                $danhsach_hoadon_taikhoan = DB::table('hoa_don_tai_khoan')
                ->join('tai_khoan_nguoi_ban', 'hoa_don_tai_khoan.id_tai_khoan_ban', '=', 'tai_khoan_nguoi_ban.id')
                    ->whereYear('hoa_don_tai_khoan.ngay_tao', $s_year)
                    ->select('hoa_don_tai_khoan.*', 'tai_khoan_nguoi_ban.ten_shop', 'tai_khoan_nguoi_ban.so_tai_khoan')
                    ->paginate(10);
            }

            if($s_key =="" && $s_year != "" && $s_month !="")
            {
               
                $danhsach_hoadon_taikhoan = DB::table('hoa_don_tai_khoan')
                ->join('tai_khoan_nguoi_ban', 'hoa_don_tai_khoan.id_tai_khoan_ban', '=', 'tai_khoan_nguoi_ban.id')
                    ->whereYear('hoa_don_tai_khoan.ngay_tao', $s_year)
                    ->whereMonth('hoa_don_tai_khoan.ngay_tao', $s_month)
                    ->select('hoa_don_tai_khoan.*', 'tai_khoan_nguoi_ban.ten_shop', 'tai_khoan_nguoi_ban.so_tai_khoan')
                    ->paginate(10);
            }

           

            if($s_key !="" && $s_year != "" && $s_month =="")
            {
                  $danhsach_hoadon_taikhoan = DB::table('hoa_don_tai_khoan')
                ->join('tai_khoan_nguoi_ban', 'hoa_don_tai_khoan.id_tai_khoan_ban', '=', 'tai_khoan_nguoi_ban.id')
                    ->whereYear('hoa_don_tai_khoan.ngay_tao', $s_year)
                    ->where('tai_khoan_nguoi_ban.ten_shop', 'like', '%'.$s_key.'%')
                    ->select('hoa_don_tai_khoan.*', 'tai_khoan_nguoi_ban.ten_shop', 'tai_khoan_nguoi_ban.so_tai_khoan')
                    ->paginate(10);
            }

            if($s_key !="" && $s_year != "" && $s_month !="")
            {
                 $danhsach_hoadon_taikhoan = DB::table('hoa_don_tai_khoan')
                ->join('tai_khoan_nguoi_ban', 'hoa_don_tai_khoan.id_tai_khoan_ban', '=', 'tai_khoan_nguoi_ban.id')
                    ->whereYear('hoa_don_tai_khoan.ngay_tao', $s_year)
                    ->whereMonth('hoa_don_tai_khoan.ngay_tao', $s_month)
                    ->where('tai_khoan_nguoi_ban.ten_shop', 'like', '%'.$s_key.'%')
                     ->select('hoa_don_tai_khoan.*', 'tai_khoan_nguoi_ban.ten_shop', 'tai_khoan_nguoi_ban.so_tai_khoan')
                    ->paginate(10);
            }

            
        }
       return view('pages.auth.admin.hoadon_taikhoan.danhsach', ['danhsach_hoadon_taikhoan' => $danhsach_hoadon_taikhoan, 'sort_year' => $sort_year, 'thongbao_loi' => $thongbao_loi]);
    }


     public function getThongKe ()
    {

        $sort_year = DB::select("CALL GiaoDich_TaiKhoan_GetYear");
      
        $baocao_doanhthu_thang = array();

            $baocao_doanhthu_thang = [];
            for($i = 1; $i <= 12; $i++)
            {
                $year =date("Y");
                $ThongKe_DoanhThu_Thang = DB::select("CALL ThongKe_LoiNhuan_Nam(".$year.", ".$i.")");
                array_push($baocao_doanhthu_thang, $ThongKe_DoanhThu_Thang[0]->TongTien);
                
            }  
       
        
        if(isset($_GET['s_year']) && $_GET['s_year']!="")
        {
            $year = $_GET['s_year'];
            $baocao_doanhthu_thang = [];
            for($i = 1; $i <= 12; $i++)
            {
                $ThongKe_DoanhThu_Thang = DB::select("CALL ThongKe_LoiNhuan_Nam(".$year.", ".$i.")");
                array_push($baocao_doanhthu_thang, $ThongKe_DoanhThu_Thang[0]->TongTien);
                
            }  
        }

         
        return view('pages.auth.admin.hoadon_taikhoan.thongke_loinhuan')->with('sort_year',$sort_year)
        ->with('baocao_doanhthu_thang', $baocao_doanhthu_thang)
        ;
        // //return $baocao_doanhthu_thang;
    }

    
}
