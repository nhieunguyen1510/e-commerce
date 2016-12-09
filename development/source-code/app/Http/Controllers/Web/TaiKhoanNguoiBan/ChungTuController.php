<?php

namespace App\Http\Controllers\Web\TaiKhoanNguoiBan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\HoaDonTaiKhoan;
use Illuminate\Support\Facades\Auth;

class ChungTuController extends Controller
{
    public function index()
    {
        $id_nguoi_ban = Auth::guard('nguoi_ban')->user()->id;
        $dsChungTu = HoaDonTaiKhoan::orderBy('ngay_tao','desc')
                                    ->where('id_tai_khoan_ban','=',$id_nguoi_ban)
                                    ->paginate(10);
        return view('pages.auth.nguoi-ban.thong-tin.chung-tu')
                ->with('dsChungTu', $dsChungTu);
    }
}
