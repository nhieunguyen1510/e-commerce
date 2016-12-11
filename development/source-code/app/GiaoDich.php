<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiaoDich extends Model
{
    protected $table ="giao_dich";
    const CREATED_AT = 'ngay_tao';
    const UPDATED_AT = 'ngay_cap_nhat';
    /**
     * Get merchant transactions.
     */
    public function dsGiaoDichNguoiban()
    {
        return $this->hasMany('App\GiaoDichNguoiBan', 'id_giao_dich', 'id');
    }
    /**
     * Get tranasction status.
     */
    public function tinh_trang()
    {
        return $this->hasOne('App\TinhTrang', 'id', 'id_tinh_trang');
    }
    /**
     * Get the details for the transaction.
     */
    public function dsChiTietDonHang($itemsPerPage = null)
    {
        if($itemsPerPage == null)
        {
            return $this->hasMany('App\ChiTietGiaoDich', 'id_giao_dich', 'id');
        }
        else
        {
            return $this->hasMany('App\ChiTietGiaoDich', 'id_giao_dich', 'id')->paginate($itemsPerPage);
        }
    }
    /**
     * Get buyer information.
     */
    public function tai_khoan_nguoi_mua()
    {
        return $this->hasOne('App\TaiKhoanNguoiMua', 'id', 'id_tai_khoan');
    }

    public function getNgayTaoAttribute($value)
    {
        return date("d-m-Y", strtotime($value));
    }

    public function getNgayCapNhatAttribute($value)
    {
        return date("d-m-Y", strtotime($value));
    }

    public function getNgayGiaoHangAttribute($value)
    {
        return date("d-m-Y", strtotime($value));
    }

    public function getThoiGianGiaoDichAttribute($value)
    {
        return date("d-m-Y", strtotime($value));
    }
}
