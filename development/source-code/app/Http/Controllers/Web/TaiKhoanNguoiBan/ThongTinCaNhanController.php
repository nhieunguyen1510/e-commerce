<?php

namespace App\Http\Controllers\Web\TaiKhoanNguoiBan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SanPham;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ThongTinCaNhanController extends Controller
{
    
    public function index()
    {
        $taiKhoanNguoiBan = Auth::guard('nguoi_ban')->user();
        $anhDaiDien = Storage::url($taiKhoanNguoiBan->anh_dai_dien);
        $tenDangNhap = $taiKhoanNguoiBan->ten_dang_nhap;
        $email = $taiKhoanNguoiBan->email;
        $tenShop = $taiKhoanNguoiBan->ten_shop;
        $gioiTinh = $taiKhoanNguoiBan->gioi_tinh;
        $ho = $taiKhoanNguoiBan->ho;
        $ten = $taiKhoanNguoiBan->ten;
        $soDienThoai = $taiKhoanNguoiBan->so_dien_thoai;
        $diaChi = $taiKhoanNguoiBan->dia_chi;
        $ngayTao = $taiKhoanNguoiBan->ngay_tao;
        $ngayCapNhat = $taiKhoanNguoiBan->ngay_cap_nhat;
        return view('pages.auth.nguoi-ban.thong-tin.thong-tin-ca-nhan') 
                ->with('anhDaiDien', $anhDaiDien)
                ->with('tenDangNhap', $tenDangNhap)
                ->with('email', $email)
                ->with('tenShop', $tenShop)
                ->with('gioiTinh', $gioiTinh)
                ->with('ho', $ho)
                ->with('ten', $ten)
                ->with('soDienThoai', $soDienThoai)
                ->with('diaChi', $diaChi)
                ->with('ngayTao', $ngayTao)
                ->with('ngayCapNhat', $ngayCapNhat);
    }

    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idSanPham)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($idSanPham)
    {
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
