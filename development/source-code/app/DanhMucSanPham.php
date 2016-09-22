<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhMucSanPham extends Model
{
    protected $table = 'danh_muc_san_pham';
    protected $appends = array('slug');

    public function getSlugAttribute()
    {
        return str_slug($this->ten.' '.dechex($this->id));  
    }
}
