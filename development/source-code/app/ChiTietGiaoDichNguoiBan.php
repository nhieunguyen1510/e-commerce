<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietGiaoDichNguoiBan extends Model
{
    protected $table = 'chi_tiet_giao_dich_nguoi_ban';
    /**
     * Get product.
     */
    public function san_pham()
    {
        return $this->hasOne('App\SanPham', 'id', 'id_san_pham');
    }
}
