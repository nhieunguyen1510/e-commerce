<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDonTaiKhoan extends Model
{
    protected $table ="hoa_don_tai_khoan";
    const CREATED_AT = 'ngay_tao';
    const UPDATED_AT = 'ngay_cap_nhat';
    /**
     * Get tranasction status.
     */
    public function tinh_trang()
    {
        return $this->hasOne('App\TinhTrang', 'id', 'hinh_thuc_thanh_toan');
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
