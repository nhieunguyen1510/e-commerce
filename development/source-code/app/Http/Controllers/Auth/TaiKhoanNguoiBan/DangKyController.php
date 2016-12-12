<?php

namespace App\Http\Controllers\Auth\TaiKhoanNguoiBan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TaiKhoanNguoiBan;
use Illuminate\Support\Facades\Hash; 

class DangKyController extends Controller
{
    public function getDangKy()
    {
        return view('pages.auth.nguoi-ban.dang-ky');
    } 
    public function postDangKy(Request $request)
    {

        $this ->validate($request, [
                            'txtTenDangNhap' => 'unique:tai_khoan_nguoi_ban,ten_dang_nhap',
                            'txtEmail' => 'unique:tai_khoan_nguoi_ban,email',
                            'txtTenShop' => 'unique:tai_khoan_nguoi_ban,ten_shop',
                            
                            ],
                            [
                             'txtTenDangNhap.unique'=>'Tên đăng nhập này đã tồn tại',
                             'txtEmail.unique'=>'Email này đã tồn tại',
                             'txtTenShop.unique'=>'Tên shop này đã tồn tại',

                            
                            ]);
        // Lấy dữ liệu đầu vào là mật khẩu và hash mật khẩu trươc khi lưu
        $matKhau = $request->txtMatKhau;
        $matKhau = Hash::make($matKhau);
        
        // Tạo instance TaiKhoanNguoiBan và lấy những dữ liệu đầu vào gán vào instance
        $taiKhoanIns = new TaiKhoanNguoiBan();
        $taiKhoanIns['ten_dang_nhap'] = $request->txtTenDangNhap;
        $taiKhoanIns['ten'] = $request->txtTen;
        $taiKhoanIns['ho'] = $request->txtHo;
        $taiKhoanIns['ten_shop'] = $request->txtTenShop;
        $taiKhoanIns['email'] = $request->txtEmail;
        $taiKhoanIns['gioi_tinh'] = $request->txtGioiTinh;
        $taiKhoanIns['so_dien_thoai'] = $request->txtSoDienThoai;
        $taiKhoanIns['dia_chi'] = $request->txtDiaChi;
        $taiKhoanIns['mat_khau'] = $matKhau;
        $taiKhoanIns['id_tinh_trang'] = 8;
        if($taiKhoanIns->save())
        {
            return redirect()->route('dangnhap.nguoiban.index');
        }else

        {
            return redirect()->route('dangky.nguoiban.index');
        }
    }
}
