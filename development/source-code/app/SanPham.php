<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table = 'san_pham';
    const CREATED_AT = 'ngay_tao';
    const UPDATED_AT = 'ngay_cap_nhat';

    public function tinh_trang()
    {
        return $this->hasOne('App\TinhTrang', 'id', 'id_tinh_trang');
    }

    public function getSlugAttribute($value)
    {
        return $value.'-'.$this->id;  
    }
}
