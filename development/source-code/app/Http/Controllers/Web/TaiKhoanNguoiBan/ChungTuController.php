<?php

namespace App\Http\Controllers\Web\TaiKhoanNguoiBan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\HoaDonTaiKhoan;
use Illuminate\Support\Facades\Auth;

class ChungTuController extends Controller
{
    public function index(Request $request)
    {
        $id_nguoi_ban = Auth::guard('nguoi_ban')->user()->id;
        $query = HoaDonTaiKhoan::orderBy('ngay_tao','desc')
                                ->where('id_tai_khoan_ban','=',$id_nguoi_ban);
        $locTheo = 'thang';
        $thang = null;
        $nam = null;
        $quy = null;

        if($request->has('loc_theo'))
        {
            $locTheo = $request->loc_theo;
        }

        if($request->has('thang_txt') && $request->has('nam_txt') && $locTheo == 'thang')
        {
            $thang = $request->thang_txt;
            $nam = $request->nam_txt;
            $query->whereMonth('ngay_tao','=',$thang)
                    ->whereYear('ngay_tao','=',$nam);
        }

        if($request->has('quy_txt') && $request->has('nam_txt') && $locTheo == 'quy')
        {
            $quy = $request->quy_txt;
            $nam = $request->nam_txt;
            $query->whereMonth('ngay_tao','>=',$quy*3-2)
                    ->whereMonth('ngay_tao','<=',$quy*3)
                    ->whereYear('ngay_tao','=',$nam);
        }

        $dsChungTu = $query->paginate(10);
        return view('pages.auth.nguoi-ban.thong-tin.chung-tu')
                ->with('dsChungTu', $dsChungTu)
                ->with('Thang',$thang)
                ->with('Quy',$quy)
                ->with('Nam',$nam)
                ->with('locTheo',$locTheo);
    }
}
