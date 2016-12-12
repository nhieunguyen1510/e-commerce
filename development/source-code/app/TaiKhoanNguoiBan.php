<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Storage;

class TaiKhoanNguoiBan extends Authenticatable
{
    //
    protected $table = "tai_khoan_nguoi_ban";

    const CREATED_AT = "ngay_tao";
    const UPDATED_AT = "ngay_cap_nhat";

    protected $fillable = [
        'ten_dang_nhap', 'mat_khau', 'email', 'ten_shop', 'anh_dai_dien', 'gioi_tinh', 
        'ho', 'ten', 'so_dien_thoai', 'dia_chi', 'ma_kich_hoat', 'id_tinh_trang'
    ];

    protected $hidden = [
        'mat_khau', 'remember_token'
    ];


    public function tinh_trang()
    {
        return $this->hasOne('App\TinhTrang', 'id', 'id_tinh_trang');
    }
    
    public function getAnhDaiDien()
    {
        $anhDaiDienURL = Storage::url($this->anh_dai_dien);
        return $anhDaiDienURL;
    }

    public function getAuthPassword()
    {
        return $this->mat_khau;
    }

    public function getNgayTaoAttribute($value)
    {
        return date("d-m-Y", strtotime($value));
    }

    public function getNgayCapNhatAttribute($value)
    {
        return date("d-m-Y", strtotime($value));
    }
}
