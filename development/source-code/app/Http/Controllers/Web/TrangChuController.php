<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\DanhMucSanPham;

class TrangChuController extends Controller
{
    public function getTrangChu ()
    {
       // $dsDanhMucSanPham = DanhMucSanPham::all();
       $dsDanhMucSanPham = DanhMucSanPham::where('id_danh_muc_san_pham_cha', 0)->get();
      //$idDanhMucSanPhamCha = DB::table('danh_muc_san_pham')->select(id);
      // $dsDanhMucSanPhamCon = DanhMucSanPham::where('id_danh_muc_san_pham_cha', //$idDanhMucSanPhamCha)->get();
        return view('pages.trang-chu', ['danhmuc' => $dsDanhMucSanPham]);
    }
}
