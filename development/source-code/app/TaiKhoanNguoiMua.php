<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class TaiKhoanNguoiMua extends Authenticatable
{
    //
    protected $table = "tai_khoan_nguoi_mua";

    const CREATED_AT = "ngay_tao";
    const UPDATED_AT = "ngay_cap_nhat";

    protected $fillable = [
        'ten_dang_nhap', 'mat_khau', 'email', 'anh_dai_dien', 'gioi_tinh', 
        'ho', 'ten', 'so_dien_thoai', 'dia_chi', 'ma_kich_hoat', 'id_tinh_trang'
    ];

    protected $hidden = [
        'mat_khau', 'remember_token'
    ];

    public function getAuthPassword()
    {
        return $this->mat_khau;
    }

    public function tinh_trang_nguoi_mua()
    {
        return $this->hasOne('App\TinhTrang', 'id', 'id_tinh_trang');
    }
}
