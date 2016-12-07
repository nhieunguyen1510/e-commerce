<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhMucSanPham extends Model
{
    protected $table = 'danh_muc_san_pham';

    public function getSlugAttribute($value)
    {
        return $value.'-'.$this->id;
    }

    public function dsDanhMucSanPhamCon()
    {
        if($this->id_danh_muc_san_pham_cha==0)
        {
            return $this->hasMany('App\DanhMucSanPham', 'id_danh_muc_san_pham_cha', 'id');
        }
        else
        {
            return null;
        }
    }
}
