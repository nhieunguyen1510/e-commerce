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
        // factory(SanPham::class, 40)->create()->each(function($u) {
        //     $u->posts()->save(factory(App\Post::class)->make());
        // });
        $randomString=self::createRandomString();
        self::seedSanPhamTable($randomString);
    }

    private function createRandomString()
    {
        $randomString='';
        $randomStringArray=[];
        for($i=0;$i<100;$i++){
            array_push($randomStringArray,str_random(rand(2,12)));
        }
        $randomString=implode(' ',$randomStringArray);
        return $randomString;
    }

    private function seedSanPhamTable($randomString)
    {
        for($i=0;$i<3;$i++){
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
}
