<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietGiaoDich extends Model
{
    protected $table = 'chi_tiet_giao_dich';
    /**
     * Get product.
     */
    public function san_pham()
    {
        return $this->hasOne('App\SanPham', 'id', 'id_san_pham');
    }
}
