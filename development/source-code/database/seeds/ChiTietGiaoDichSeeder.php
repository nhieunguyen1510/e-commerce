<?php

use Illuminate\Database\Seeder;
use App\SanPham;
use App\GiaoDich;
use App\ChiTietGiaoDich;

class ChiTietGiaoDichSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<60;$i++){
            $idGiaoDich=rand(1,4);
            $idSanPham=rand(282,530);
            $sanPham=SanPham::find($idSanPham);
            $isExist = ChiTietGiaoDich::where('id_san_pham', '=', $idSanPham)->first();
            if($sanPham->so_luong_ton_kho>0 && $isExist == null){
                $soLuong=rand(1,$sanPham->so_luong_ton_kho);
                DB::table('chi_tiet_giao_dich')->insert([
                    'id_giao_dich' => $idGiaoDich,
                    'id_san_pham' => $idSanPham,
                    'so_luong' => $soLuong,
                    'don_gia_san_pham' => $sanPham->gia_ban_hien_tai,
                    'tong_tien' => $soLuong*$sanPham->gia_ban_hien_tai,
                ]);
                $sanPham->so_luong_ton_kho=$sanPham->so_luong_ton_kho-$soLuong;
                $sanPham->save();
                $giaoDich=GiaoDich::find($idGiaoDich);
                $giaoDich->tong_tien=$giaoDich->tong_tien+$soLuong*$sanPham->gia_ban_hien_tai;
                $giaoDich->save();
            }
        }
    }
}
