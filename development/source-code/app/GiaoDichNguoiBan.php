<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiaoDichNguoiBan extends Model
{
    protected $table ="giao_dich_nguoi_ban";
    const CREATED_AT = 'ngay_tao';
    const UPDATED_AT = 'ngay_cap_nhat';
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
    public function dsChiTietDonHang($itemsPerPage = 20)
    {
        return $this->hasMany('App\ChiTietGiaoDichNguoiBan', 'id_giao_dich', 'id')->paginate($itemsPerPage);
    }
    /**
     * Get buyer information.
     */
    public function tai_khoan_nguoi_mua()
    {
        return $this->hasOne('App\TaiKhoanNguoiMua', 'id', 'id_tai_khoan_mua');
    }
    /**
     * Get merchant information.
     */
    public function tai_khoan_nguoi_ban()
    {
        return $this->hasOne('App\TaiKhoanNguoiBan', 'id', 'id_tai_khoan_ban');
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
