<?php

namespace App\Http\Controllers\Web\TaiKhoanNguoiBan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SanPham;
use Illuminate\Support\Facades\Auth;

class SanPhamController extends Controller
{
    
    public function index()
    {
        return view ('pages.auth.nguoi-ban.san-pham.danh-sach');
    }

    public function create()
    {
        return view ('pages.auth.nguoi-ban.san-pham.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sanPhamIns = new SanPham();
        $sanPhamIns['id_danh_muc_san_pham'] = $request->txt_loaidanhmuc;
        $sanPhamIns['id_nguoi_ban'] = Auth::user()->id;
        $sanPhamIns['ten'] = $request->txt_tensp;
        $sanPhamIns['anh_dai_dien'] = $request->anh_dai_dien;
        $sanPhamIns['anh_chi_tiet_1'] = $request->anh_ct_1;
        $sanPhamIns['anh_chi_tiet_2'] = $request->anh_ct_2;
        $sanPhamIns['anh_chi_tiet_3'] = $request->anh_ct_3;
        $sanPhamIns['mo_ta'] = $request->txt_mota;
        $sanPhamIns['so_luong_ton_kho'] = $request->txt_soluongton;
        $sanPhamIns['don_gia_goc'] = $request->txt_giaban;
        $sanPhamIns['phan_tram_khuyen_mai'] = $request->txt_phantramKM;
        $sanPhamIns['nha_san_xuat'] = $request->txt_nsx;
        // $sanPhamIns['slug'] = $request->txt_mota;
        $sanPhamIns['id_tinh_trang'] = 1;
        $sanPhamIns['ngay_tao'] = date("Y-m-d H:i:s");
        $sanPhamIns['ngay_cap_nhat'] = date("Y-m-d H:i:s");   

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
