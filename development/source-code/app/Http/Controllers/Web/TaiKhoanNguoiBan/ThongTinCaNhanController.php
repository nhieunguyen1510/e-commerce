<?php

namespace App\Http\Controllers\Web\TaiKhoanNguoiBan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SanPham;
use App\TaiKhoanNguoiBan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash; 

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
        $idNguoiBan = Auth::guard('nguoi_ban')->user()->id;
        $taiKhoanNguoiBanIns = TaiKhoanNguoiBan::find($idNguoiBan);
        $taiKhoanNguoiBanIns['ten_dang_nhap'] = $request->txt_ten_dang_nhap;
        $taiKhoanNguoiBanIns['email'] = $request->txt_email;
        $taiKhoanNguoiBanIns['ten_shop'] = $request->txt_ten_shop;
        $taiKhoanNguoiBanIns['gioi_tinh'] = $request->txt_gioi_tinh;
        $taiKhoanNguoiBanIns['ho'] = $request->txt_ho;
        $taiKhoanNguoiBanIns['ten'] = $request->txt_ten;
        $taiKhoanNguoiBanIns['so_dien_thoai'] = $request->txt_sdt;
        $taiKhoanNguoiBanIns['dia_chi'] = $request->txt_diachi;
        $taiKhoanNguoiBanIns['ngay_cap_nhat'] = date("Y-m-d H:i:s");

        //Kiểm tra xem người bán có up ảnh mới hay không
        if($request->hasFile('anh_dai_dien'))
        {
            // Lưu file vào folder storage/app/public/img/tai_khoan_nguoi_ban và lưu lại đường dẫn
            $anhDaiDienPath = $request->file('anh_dai_dien')->store('public/img/tai_khoan_nguoi_ban');
            $taiKhoanNguoiBanIns['anh_dai_dien'] = $anhDaiDienPath;
        }

        $taiKhoanNguoiBanIns->save();
        return redirect()->route('nguoiban-thongtin.index');
    }

    public function post_mat_khau(Request $request)
    {
        $idNguoiBan = Auth::guard('nguoi_ban')->user()->id;
        $taiKhoanNguoiBanIns = TaiKhoanNguoiBan::find($idNguoiBan);

        //Kiểm tra xem người bán có đổi mật khẩu hay không
        if($request->has('txtMatKhau') && $request->has('txtMatKhauNhapLai'))
        {
            $matKhau = $request->txtMatKhau;
            $matKhauNhapLai = $request->txtMatKhauNhapLai;
            if($matKhau!=$matKhauNhapLai)
            {
                $request->session()->flash('thongbao','Mật khẩu không trùng khớp');
                return back();
            }
            else
            {
                $matKhau = Hash::make($matKhau);
                $taiKhoanNguoiBanIns['mat_khau'] = $matKhau;
                $taiKhoanNguoiBanIns->save();
                $request->session()->flash('thongbao','Mật khẩu thay đổi thành công');
                return redirect()->route('nguoiban-thongtin.index');    
            }
            
        }

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
