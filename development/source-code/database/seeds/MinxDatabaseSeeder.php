<?php

use Illuminate\Database\Seeder;

class MinxDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Declare variables and place them up top
        $randomString=self::createRandomString();
        $quantityOfSanPhamRecords=100;

        // Then we will execute functions
        self::seedSanPhamTable($randomString, $quantityOfSanPhamRecords);
        self::seedTaiKhoanTable($randomString, $quantityOfSanPhamRecords);
    }


    private function createRandomString()
    {
        $randomString='';
        $randomStringArray=[];
        for($i=0;$i<100;$i++){
            array_push($randomStringArray,str_random(rand(2,8)));
        }
        $randomString=implode(' ',$randomStringArray);
        return $randomString;
    }

    private function seedSanPhamTable($randomString, $quantityOfSanPhamRecords)
    {
        for($i=0;$i<$quantityOfSanPhamRecords;$i++){
            $randomString=str_shuffle($randomString);
            DB::table('san_pham')->insert([
                'id_danh_muc_san_pham' => rand(5,12),
                'ten' => substr($randomString,0,rand(20,100)),
                'anh_dai_dien' => str_random(10),
                'anh_chi_tiet_1' => str_random(10),
                'anh_chi_tiet_2' => str_random(10),
                'anh_chi_tiet_3' => str_random(10),
                'mo_ta' => $randomString,
                'so_luong_ton_kho' => rand(0,200),
                'don_gia_ban' => rand(100,700)*1000,
                'nha_san_xuat' => substr($randomString,0,rand(20,30)),
                'tinh_trang' => rand(0,2),
            ]);
        }
    }

    private function seedTaiKhoanTable($randomString, $quantityOfSanPhamRecords)
    {
        for($i=0;$i<$quantityOfSanPhamRecords;$i++){
            $randomInteger= rand(1202055681,1362055681);
            $randomDate = date("Y-m-d H:i:s",$randomInteger);
            $randomString=str_shuffle($randomString);
            DB::table('tai_khoan')->insert([
                'ten_dang_nhap' => substr($randomString,0,rand(20,100)),
                'anh_dai_dien' => str_random(10),
                'email' => str_random(10),
                'mat_khau' => str_random(10),
                'gioi_tinh' => rand(0,1),
                'ho' => str_random(10),
                'ten' => str_random(10),
                'so_dien_thoai' => '0'.rand(1000000000,129000000),
                'dia_chi' => str_random(10),
                'ma_kich_hoat' => str_random(20),
                'tinh_trang' => rand(0,2),
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate,
            ]);
        }
    }    
}
