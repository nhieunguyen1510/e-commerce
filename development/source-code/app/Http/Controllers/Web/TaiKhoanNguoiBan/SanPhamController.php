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
        $dsSanPham = SanPham::orderBy('ngay_tao', 'desc')
                        ->paginate(15);
        return view ('pages.auth.nguoi-ban.san-pham.danh-sach')
                    ->with('dsSanPham', $dsSanPham);
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
        // return json_encode(Auth::guard('nguoi_ban')->user()->id);
        $sanPhamIns = new SanPham();
        $sanPhamIns['id_danh_muc_san_pham'] = $request->txt_loaidanhmuc;
        $sanPhamIns['id_nguoi_ban'] = Auth::guard('nguoi_ban')->user()->id;
        $sanPhamIns['ten'] = $request->txt_tensp;
        // Do chưa làm up ảnh nên để giá trị fake
        $sanPhamIns['anh_dai_dien'] = '';
        $sanPhamIns['anh_chi_tiet_1'] = '';
        $sanPhamIns['anh_chi_tiet_2'] = '';
        $sanPhamIns['anh_chi_tiet_3'] = '';
        $sanPhamIns['mo_ta'] = $request->txt_mota;
        $sanPhamIns['so_luong_ton_kho'] = $request->txt_soluongton;
        $sanPhamIns['don_gia_goc'] = $request->txt_giaban;
        $sanPhamIns['phan_tram_khuyen_mai'] = $request->txt_phantramKM;
        $sanPhamIns['nha_san_xuat'] = $request->txt_nsx;
        // Slug được tự tạo ra từ tên của sản phẩm
        $sanPhamIns['slug'] = str_slug($request->txt_tensp);
        $sanPhamIns['id_tinh_trang'] = 1;
        // $sanPhamIns['ngay_tao'] = date("Y-m-d H:i:s");
        // $sanPhamIns['ngay_cap_nhat'] = date("Y-m-d H:i:s");
        $sanPhamIns->save();
        return redirect()->route('nguoiban-sanpham.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idSanPham)
    {
        $sanPham = SanPham::find($idSanPham);
        return view ('pages.auth.nguoi-ban.san-pham.chi-tiet')
                    ->with('sanPham', $sanPham);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view ('pages.auth.nguoi-ban.san-pham.sua');
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
