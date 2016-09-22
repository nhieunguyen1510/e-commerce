<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table = 'san_pham';
    protected $appends = array('slug');

    public function getSlugAttribute()
    {
        return str_slug($this->ten.' '.$this->id);  
    }
}
