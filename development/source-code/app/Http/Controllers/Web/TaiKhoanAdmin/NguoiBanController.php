<?php

namespace App\Http\Controllers\Web\TaiKhoanAdmin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TaiKhoanNguoiBan;
use App\TinhTrang;
use App\HoaDonTaiKhoan;
use App\Mail\ThongBaoKichHoat;
use App\Mail\ThongBaoKhoa;
use Illuminate\Support\Facades\Mail;

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
                $danhsach_nguoiban = TaiKhoanNguoiBan::where('ten_shop', 'like', '%'.$s_key.'%')->orwhere('ho', 'like', '%'.$s_key.'%')->orwhere('ten', 'like', '%'.$s_key.'%')->orwhere('dia_chi', 'like', '%'.$s_key.'%')->orderBy('id', 'desc')->paginate(10);
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
                                            })->paginate(10);
            }
        
        }
       return view('pages.auth.admin.nguoiban.danhsach', ['danhsach_nguoiban' => $danhsach_nguoiban, 'status' => $status]);
    }


    public function getChiTiet ($id)
    {
        $chi_tiet_nguoi_ban= TaiKhoanNguoiBan::find($id);
        // $id_tinh_trang = $chi_tiet_nguoi_ban->id_tinh_trang;
        $tinh_trang = $chi_tiet_nguoi_ban->tinh_trang;
        $anhDaiDienURL = $chi_tiet_nguoi_ban->getAnhDaiDien();
        return view('pages.auth.admin.nguoiban.chitiet', ['chi_tiet_nguoi_ban' => $chi_tiet_nguoi_ban, 'tinh_trang' => $tinh_trang, 'anhDaiDienURL' => $anhDaiDienURL]);
    }

    public function getKichHoat ($id)
    {


        $chi_tiet_nguoi_ban= TaiKhoanNguoiBan::find($id);
        $id_tinh_trang = $chi_tiet_nguoi_ban->{'id_tinh_trang'};
        $thongbao_kichhoat ="";
        if($id_tinh_trang == 8 || $id_tinh_trang == 10)
        {
            $chi_tiet_nguoi_ban->id_tinh_trang = 9;
            $chi_tiet_nguoi_ban->save();

            //Thêm hóa đơn tài khoản
        $hoadon_taikhoan= new HoaDonTaiKhoan;
        $hoadon_taikhoan->id_tai_khoan_ban = $id;
        $hoadon_taikhoan->so_tien_chuyen_khoan = 300000;
        $hoadon_taikhoan->hinh_thuc_thanh_toan = 14;
        $hoadon_taikhoan->ngay_tao = date("Y-m-d H:i:s");
        $hoadon_taikhoan->ngay_cap_nhat = date("Y-m-d H:i:s");
        $hoadon_taikhoan->save();

        //End thêm hoa_don_tai_khoan
        
            $thongbao_kichhoat ="Kích hoạt tài khoản thành công";
            $email = $chi_tiet_nguoi_ban->{'email'};
            $ten = $chi_tiet_nguoi_ban->{'ten'};
            $tenShop = $chi_tiet_nguoi_ban->{'ten_shop'};
            $link = "http://localhost:8000/nguoiban/dang-nhap";
            $tongTien = "300000 VND";
            $chuyenKhoan = "Chuyển khoản";
            $ngayGiaoDich = $chi_tiet_nguoi_ban->{'ngay_cap_nhat'};
            $thongbao_mail = new ThongBaoKichHoat($tenShop, $link, $tongTien, $chuyenKhoan, $ngayGiaoDich);
            Mail::to($email)->send($thongbao_mail);
        }


        if($id_tinh_trang == 9)
        {
            $chi_tiet_nguoi_ban->id_tinh_trang = 10;
            $chi_tiet_nguoi_ban->save();
            $thongbao_kichhoat ="Khóa tài khoản thành công";
            $email = $chi_tiet_nguoi_ban->{'email'};
            $tenShop = $chi_tiet_nguoi_ban->{'ten_shop'};
            $thongbao_mail = new ThongBaoKhoa($tenShop);
            Mail::to($email)->send($thongbao_mail);
        }
        

        
        $danhsach_nguoiban = TaiKhoanNguoiBan::orderBy('id', 'desc')->paginate(4);
        $status = TinhTrang::where('bang', 'tai_khoan_nguoi_ban')->where('thuoc_tinh', 'id_tinh_trang')->get();

        if(isset($_GET['status']) && isset($_GET['key']))
        {
            $s_status = $_GET['status'];
            $s_key = $_GET['key'];
            if($s_status!="" && $s_key =="")
            {
                $danhsach_nguoiban = TaiKhoanNguoiBan::where('id_tinh_trang', $s_status)->orderBy('id', 'desc')->paginate(10);
            }

            if($s_status =="" && $s_key !="")
            {
                $danhsach_nguoiban = TaiKhoanNguoiBan::where('ten_shop', 'like', '%'.$s_key.'%')->orwhere('ho', 'like', '%'.$s_key.'%')->orwhere('ten', 'like', '%'.$s_key.'%')->orwhere('dia_chi', 'like', '%'.$s_key.'%')->orderBy('id', 'desc')->paginate(10);
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
                                            })->paginate(10);
            }
        
        }
      return redirect('admin/nguoiban/danhsach')->with('danhsach_nguoiban', $danhsach_nguoiban)
      ->with('status',$status)->with('thongbao_kichhoat',$thongbao_kichhoat);
    }
}
