<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\DanhMucSanPham;
use App\SanPham;
use App\ChiTietGiaoDich;

class TrangChuController extends Controller
{
    public function getTrangChu ()
    {
       // $dsDanhMucSanPham = DanhMucSanPham::all();
       $dsDanhMucSanPham = DanhMucSanPham::where('id_danh_muc_san_pham_cha', 0)->get();
       $spbanchay = ChiTietGiaoDich::orderBy('id','DESC')->take(5)->get();
       $spmoi=SanPham::orderBy('id','DESC')->take(5)->get();
       $spkhuyenmai=SanPham::where('phan_tram_khuyen_mai','>',0)->orderBy('id','DESC')->take(5)->get();
      // return json_encode($spkhuyenmai);
      //$idDanhMucSanPhamCha = DB::table('danh_muc_san_pham')->select(id);
      // $dsDanhMucSanPhamCon = DanhMucSanPham::where('id_danh_muc_san_pham_cha', //$idDanhMucSanPhamCha)->get();
        return view('pages.trang-chu', 
        ['danhmuc' => $dsDanhMucSanPham, 'spmoi' => $spmoi,'spbanchay'=>$spbanchay, 'spkhuyenmai'=>$spkhuyenmai]);
   
    }
}
