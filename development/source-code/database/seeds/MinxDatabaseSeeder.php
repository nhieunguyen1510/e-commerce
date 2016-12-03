<?php

use Illuminate\Database\Seeder;
use App\SanPham;
use App\GiaoDich;
use App\ChiTietGiaoDich;

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
        //    self::seedTinhTrangTable();
           self::seedDanhMucSanPhamTable();
        // self::seedSanPhamTable($randomString, $quantityOfSanPhamRecords);
        // self::seedGiaoDichTable($randomString, $quantityOfSanPhamRecords);
        // self::seedTaiKhoanTable($randomString, $quantityOfSanPhamRecords);
        // self::seedChiTietGiaoDichTable($quantityOfSanPhamRecords);
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

    private function seedTinhTrangTable()
    {
        
            DB::table('tinh_trang')->insert([
                ['tinh_trang' => 'Còn hàng','bang_lien_quan' => 'san_pham'],
                ['tinh_trang' => 'Hết hàng','bang_lien_quan' => 'san_pham']  
                 ]);
    
    }

    private function seedDanhMucSanPhamTable()
    {
        // $tenDanhMucSanPhamArray=array('Quần', 'Áo', 'Giày', 'Túi xách', 
        // 'Giày búp bê', 'Giày bít', 'Giày Sandals', 'Áo thun', 'Áo sơ mi', 'Balo', 'Túi xách'
        // 'Ví', 'Quần Jeans', 'Quần Shorts');
        //for($i=0;$i<count($tenDanhMucSanPhamArray);$i++){
            //$randomInteger= rand(1202055681,1362055681);
            //$randomDate = date("Y-m-d H:i:s",$randomInteger);
            DB::table('danh_muc_san_pham')->insert([
                ['ten' => 'Quần',
                'id_danh_muc_san_pham_cha' => 0,
                // 'slug' => str_slug('Quần', '-'),
                'id_tinh_trang' => 1,
                'ngay_tao' => date("Y-m-d H:i:s"),
                'ngay_cap_nhat' => date("Y-m-d H:i:s")],

                ['ten' => 'Áo',
                'id_danh_muc_san_pham_cha' => 0,
                // 'slug' => str_slug('Áo', '-'),
                'id_tinh_trang' => 1,
                'ngay_tao' => date("Y-m-d H:i:s"),
                'ngay_cap_nhat' => date("Y-m-d H:i:s")],

                ['ten' => 'Giày',
                'id_danh_muc_san_pham_cha' => 0,
                // 'slug' => str_slug('Giày', '-'),
                'id_tinh_trang' => 1,
                'ngay_tao' => date("Y-m-d H:i:s"),
                'ngay_cap_nhat' => date("Y-m-d H:i:s")],

                ['ten' => 'Túi xách',
                'id_danh_muc_san_pham_cha' => 0,
                // 'slug' => str_slug('Túi xách', '-'),
                'id_tinh_trang' => 1,
                'ngay_tao' => date("Y-m-d H:i:s"),
                'ngay_cap_nhat' => date("Y-m-d H:i:s")],

                ['ten' => 'Khác',
                'id_danh_muc_san_pham_cha' => 0,
                // 'slug' => str_slug('Khác', '-'),
                'id_tinh_trang' => 1,
                'ngay_tao' => date("Y-m-d H:i:s"),
                'ngay_cap_nhat' => date("Y-m-d H:i:s")],

                ['ten' => 'Quần Jeans',
                'id_danh_muc_san_pham_cha' => 1,
                // 'slug' => str_slug('Quần Jeans', '-'),
                'id_tinh_trang' => 1,
                'ngay_tao' => date("Y-m-d H:i:s"),
                'ngay_cap_nhat' => date("Y-m-d H:i:s")],

                ['ten' => 'Quần Shorts',
                'id_danh_muc_san_pham_cha' => 1,
                // 'slug' => str_slug('Quần Shorts', '-'),
                'id_tinh_trang' => 1,
                'ngay_tao' => date("Y-m-d H:i:s"),
                'ngay_cap_nhat' => date("Y-m-d H:i:s")],

                ['ten' => 'Áo khoác',
                'id_danh_muc_san_pham_cha' => 2,
                // 'slug' => str_slug('Áo khoác', '-'),
                'id_tinh_trang' => 1,
                'ngay_tao' => date("Y-m-d H:i:s"),
                'ngay_cap_nhat' => date("Y-m-d H:i:s")],

                 ['ten' => 'Ví',
                 'id_danh_muc_san_pham_cha' => 5,
                // 'slug' => str_slug('Ví', '-'),
                'id_tinh_trang' => 1,
                'ngay_tao' => date("Y-m-d H:i:s"),
                'ngay_cap_nhat' => date("Y-m-d H:i:s")],

                ['ten' => 'Giày búp bê',
                'id_danh_muc_san_pham_cha' => 3,
                // 'slug' => str_slug('Giày búp bê', '-'),
                'id_tinh_trang' => 1,
                'ngay_tao' => date("Y-m-d H:i:s"),
                'ngay_cap_nhat' => date("Y-m-d H:i:s")],

                ['ten' => 'Giày bít',
                'id_danh_muc_san_pham_cha' => 3,
                // 'slug' => str_slug('Giày bít', '-'),
                'id_tinh_trang' => 1,
                'ngay_tao' => date("Y-m-d H:i:s"),
                'ngay_cap_nhat' => date("Y-m-d H:i:s")],

                ['ten' => 'Giày Sandals',
                'id_danh_muc_san_pham_cha' => 3,
                // 'slug' => str_slug('Giày Sandals', '-'),
                'id_tinh_trang' => 1,
                'ngay_tao' => date("Y-m-d H:i:s"),
                'ngay_cap_nhat' => date("Y-m-d H:i:s")],

                 ['ten' => 'Balo',
                 'id_danh_muc_san_pham_cha' => 4,
                // 'slug' => str_slug('Balo', '-'),
                'id_tinh_trang' => 1,
                'ngay_tao' => date("Y-m-d H:i:s"),
                'ngay_cap_nhat' => date("Y-m-d H:i:s")],

                 ['ten' => 'Túi xách',
                'id_danh_muc_san_pham_cha' => 4,
                // 'slug' => str_slug('Túi xách', '-'),
                'id_tinh_trang' => 1,
                'ngay_tao' => date("Y-m-d H:i:s"),
                'ngay_cap_nhat' => date("Y-m-d H:i:s")]
            ]);
        //}
    }

    private function seedSanPhamTable($randomString, $quantityOfSanPhamRecords)
    {
        for($i=0;$i<$quantityOfSanPhamRecords;$i++){
            $randomInteger= rand(1202055681,1362055681);
            $randomDate = date("Y-m-d H:i:s",$randomInteger);
            $ten=substr($randomString,0,rand(20,100));

            $randomString=str_shuffle($randomString);
            DB::table('san_pham')->insert([
                'id_danh_muc_san_pham' => rand(1,9),
                'ten' => $ten,
                'anh_dai_dien' => str_random(10),
                'anh_chi_tiet_1' => str_random(10),
                'anh_chi_tiet_2' => str_random(10),
                'anh_chi_tiet_3' => str_random(10),
                'mo_ta' => $randomString,
                'so_luong_ton_kho' => rand(0,200),
                'don_gia_ban' => rand(100,700)*1000,
                'nha_san_xuat' => substr($randomString,0,rand(20,30)),
                'slug' => str_slug($ten),
                'id_tinh_trang' => rand(0,2),
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate,
            ]);
        }
    }

    private function seedGiaoDichTable($randomString, $quantityOfSanPhamRecords)
    {
        for($i=0;$i<$quantityOfSanPhamRecords;$i++){
            $randomInteger= rand(1202055681,1362055681);
            $randomDate = date("Y-m-d H:i:s",$randomInteger);
            $randomString=str_shuffle($randomString);
            $randomPhone ='0'.rand(1000000000,1290000000);
            DB::table('giao_dich')->insert([
                'id_tai_khoan' => rand(1,100000),
                'giao_dich_cod' => rand(0,1),
                'giao_dich_truc_tuyen' => rand(0,1),
                'id_giao_dich_truc_tuyen' => rand(0,20),
                'id_tai_khoan_giao_dich_truc_tuyen' => str_random(10),
                'thoi_gian_giao_dich' => $randomDate,
                'dia_chi_giao_hang' => substr($randomString,0,rand(20,30)),
                'so_dien_thoai_giao_hang' => $randomPhone,
                'ten_nguoi_nhan' => substr($randomString,0,rand(20,30)),
                'ma_khuyen_mai' => str_random(5),
                'tong_tien' => 0,
                'id_tinh_trang' => rand(0,2),
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate,
            ]);
        }
    }

    private function seedChiTietGiaoDichTable($quantityOfSanPhamRecords)
    {
        for($i=0;$i<$quantityOfSanPhamRecords;$i++){
            $idGiaoDich=rand(1,$quantityOfSanPhamRecords-1);
            $idSanPham=rand(1,$quantityOfSanPhamRecords-1);
            $sanPham=SanPham::find($idSanPham);
            $soLuong=rand(1,$sanPham->so_luong_ton_kho);
            DB::table('chi_tiet_giao_dich')->insert([
                'id_giao_dich' => $idGiaoDich,
                'id_san_pham' => $idSanPham,
                'so_luong' => $soLuong,
                'don_gia_san_pham' => $sanPham->don_gia_ban,
                'tong_tien' => $soLuong*$sanPham->don_gia_ban,
            ]);
            $sanPham->so_luong_ton_kho=$sanPham->so_luong_ton_kho-$soLuong;
            $sanPham->save();
            $giaoDich=GiaoDich::find($idGiaoDich);
            $giaoDich->tong_tien=$giaoDich->tong_tien+$soLuong*$sanPham->don_gia_ban;
            $giaoDich->save();
        }
    }

    private function seedTaiKhoanTable($randomString, $quantityOfSanPhamRecords)
    {
        for($i=0;$i<$quantityOfSanPhamRecords;$i++){
            $randomInteger= rand(1202055681,1362055681);
            $randomDate = date("Y-m-d H:i:s",$randomInteger);
            $randomString=str_shuffle($randomString);
            DB::table('tai_khoan')->insert([
                'ten_dang_nhap' => strtolower(str_random(10)),
                'anh_dai_dien' => str_random(10),
                'email' => str_random(10),
                'mat_khau' =>  bcrypt('root'),
                'gioi_tinh' => rand(0,1),
                'ho' => str_random(10),
                'ten' => str_random(10),
                'so_dien_thoai' => '0'.rand(1000000000,129000000),
                'dia_chi' => str_random(10),
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => rand(0,2),
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate,
            ]);
        }
    }    
}
