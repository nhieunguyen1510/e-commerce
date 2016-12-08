<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class TaiKhoanAdmin extends Authenticatable
{
    //

    protected $table = "quan_tri_vien";

    const CREATED_AT = "ngay_tao";
    const UPDATED_AT = "ngay_cap_nhat";

    protected $hidden = [
        'mat_khau', 'remember_token'
    ];

    public function getAuthPassword()
    {
        return $this->mat_khau;
    }
}
