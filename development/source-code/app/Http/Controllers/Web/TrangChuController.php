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
        $dsDanhMucSanPham = DanhMucSanPham::all();
        return view('pages.trang-chu', ['danhmuc' => $dsDanhMucSanPham]);
    }
}
