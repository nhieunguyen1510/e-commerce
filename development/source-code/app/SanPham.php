<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SanPham extends Model
{
    protected $table = 'san_pham';
    const CREATED_AT = 'ngay_tao';
    const UPDATED_AT = 'ngay_cap_nhat';

    public function tinh_trang()
    {
        return $this->hasOne('App\TinhTrang', 'id', 'id_tinh_trang');
    }

    public function ten_shop()
    {
        return $this->hasOne('App\TaiKhoanNguoiBan','id','id_nguoi_ban');
    }

    public function getSlugAttribute($value)
    {
        return $value.'-'.$this->id;  
    }

    public function getAnh()
    {
        $anh = Storage::url($this->anh_dai_dien);
        
        return $anh;
    }
}
