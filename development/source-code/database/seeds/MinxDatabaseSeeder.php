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
        self::seedDanhMucSanPhamTable();
        self::seedTinhTrangTable();
        self::seedTaiKhoanNguoiBanTable();
        self::seedQuanTriVienTable();
        self::seedGiaoDichTable($randomString, $quantityOfSanPhamRecords);
        self::seedGiaoDichNguoiBanTable($randomString, $quantityOfSanPhamRecords);
        self::seedTaiKhoanNguoiMuaTable();
        // self::seedSanPhamTable($randomString, $quantityOfSanPhamRecords);
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
            ['id' => 1, 'tinh_trang' => 'Còn hàng', 'bang' => 'san_pham', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 2, 'tinh_trang' => 'Hết hàng', 'bang' => 'san_pham', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 3, 'tinh_trang' => 'Chưa liên lạc', 'bang' => 'giao_dich', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 4, 'tinh_trang' => 'Chưa giao', 'bang' => 'giao_dich', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 5, 'tinh_trang' => 'Giao thành công', 'bang' => 'giao_dich', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 6, 'tinh_trang' => 'Giao không thành công', 'bang' => 'giao_dich', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 7, 'tinh_trang' => 'Hủy', 'bang' => 'giao_dich', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 8, 'tinh_trang' => 'Chưa kích hoạt', 'bang' => 'tai_khoan_nguoi_ban', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 9, 'tinh_trang' => 'Đã kích hoạt', 'bang' => 'tai_khoan_nguoi_ban', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 10, 'tinh_trang' => 'Bị khóa', 'bang' => 'tai_khoan_nguoi_ban', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 11, 'tinh_trang' => 'Chưa kích hoạt', 'bang' => 'tai_khoan_nguoi_mua', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 12, 'tinh_trang' => 'Đã kích hoạt', 'bang' => 'tai_khoan_nguoi_mua', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 13, 'tinh_trang' => 'Bị khóa', 'bang' => 'tai_khoan_nguoi_mua', 'thuoc_tinh' => 'id_tinh_trang']
        ]);
    }

    private function seedDanhMucSanPhamTable()
    {
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
        $randomInteger= rand(1202055681,1362055681);
        $randomDate = date("Y-m-d H:i:s",$randomInteger);
            $randomPhone ='0'.rand(1000000000,1290000000);
        DB::table('giao_dich')->insert([
        [   'id' => 1,
            'id_tai_khoan' => rand(1,5),
            'giao_dich_cod' => 1,
            'giao_dich_truc_tuyen' => 0,
            'thoi_gian_giao_dich' => $randomDate,
            'dia_chi_giao_hang' => substr($randomString,0,rand(20,30)),
            'so_dien_thoai_giao_hang' => $randomPhone,
            'ten_nguoi_nhan' => 'Nghia',
            'ma_khuyen_mai' => str_random(5),
            'tong_tien' => 0,
            'id_tinh_trang' => rand(3,7),
            'ngay_tao' => $randomDate,
            'ngay_cap_nhat' => $randomDate],
        [   'id' => 2,
            'id_tai_khoan' => rand(1,5),
            'giao_dich_cod' => 1,
            'giao_dich_truc_tuyen' => 0,
            'thoi_gian_giao_dich' => $randomDate,
            'dia_chi_giao_hang' => substr($randomString,0,rand(20,30)),
            'so_dien_thoai_giao_hang' => $randomPhone,
            'ten_nguoi_nhan' => 'Dung',
            'ma_khuyen_mai' => str_random(5),
            'tong_tien' => 0,
            'id_tinh_trang' => rand(3,7),
            'ngay_tao' => $randomDate,
            'ngay_cap_nhat' => $randomDate],
        [   'id' => 3,
            'id_tai_khoan' => rand(1,5),
            'giao_dich_cod' => 1,
            'giao_dich_truc_tuyen' => 0,
            'thoi_gian_giao_dich' => $randomDate,
            'dia_chi_giao_hang' => substr($randomString,0,rand(20,30)),
            'so_dien_thoai_giao_hang' => $randomPhone,
            'ten_nguoi_nhan' => 'Hung',
            'ma_khuyen_mai' => str_random(5),
            'tong_tien' => 0,
            'id_tinh_trang' => rand(3,7),
            'ngay_tao' => $randomDate,
            'ngay_cap_nhat' => $randomDate],
        [   'id' => 4,
            'id_tai_khoan' => rand(1,5),
            'giao_dich_cod' => 1,
            'giao_dich_truc_tuyen' => 0,
            'thoi_gian_giao_dich' => $randomDate,
            'dia_chi_giao_hang' => substr($randomString,0,rand(20,30)),
            'so_dien_thoai_giao_hang' => $randomPhone,
            'ten_nguoi_nhan' => 'Truong',
            'ma_khuyen_mai' => str_random(5),
            'tong_tien' => 0,
            'id_tinh_trang' => rand(3,7),
            'ngay_tao' => $randomDate,
            'ngay_cap_nhat' => $randomDate]
        ]);
    }

    private function seedGiaoDichNguoiBanTable($randomString, $quantityOfSanPhamRecords)
    {
        $randomInteger= rand(1202055681,1362055681);
        $randomDate = date("Y-m-d H:i:s",$randomInteger);
        $randomPhone ='0'.rand(1000000000,1290000000);
        DB::table('giao_dich_nguoi_ban')->insert([
        [   'id' => 1,
            'id_tai_khoan_mua' => rand(1,5),
            'id_tai_khoan_ban' => rand(1,5),
            'giao_dich_cod' => 1,
            'giao_dich_truc_tuyen' => 0,
            'thoi_gian_giao_dich' => $randomDate,
            'ngay_giao_hang' => $randomDate,
            'dia_chi_giao_hang' => substr($randomString,0,rand(20,30)),
            'so_dien_thoai_giao_hang' => $randomPhone,
            'ten_nguoi_nhan' => 'Nghia',
            'ma_khuyen_mai' => str_random(5),
            'tong_tien' => 0,
            'id_tinh_trang' => rand(3,7),
            'ngay_tao' => $randomDate,
            'ngay_cap_nhat' => $randomDate],
        [   'id' => 2,
            'id_tai_khoan_mua' => rand(1,5),
            'id_tai_khoan_ban' => rand(1,5),
            'giao_dich_cod' => 1,
            'giao_dich_truc_tuyen' => 0,
            'thoi_gian_giao_dich' => $randomDate,
            'ngay_giao_hang' => $randomDate,
            'dia_chi_giao_hang' => substr($randomString,0,rand(20,30)),
            'so_dien_thoai_giao_hang' => $randomPhone,
            'ten_nguoi_nhan' => 'Dung',
            'ma_khuyen_mai' => str_random(5),
            'tong_tien' => 0,
            'id_tinh_trang' => rand(3,7),
            'ngay_tao' => $randomDate,
            'ngay_cap_nhat' => $randomDate],
        [   'id' => 3,
            'id_tai_khoan_mua' => rand(1,5),
            'id_tai_khoan_ban' => rand(1,5),
            'giao_dich_cod' => 1,
            'giao_dich_truc_tuyen' => 0,
            'thoi_gian_giao_dich' => $randomDate,
            'ngay_giao_hang' => $randomDate,
            'dia_chi_giao_hang' => substr($randomString,0,rand(20,30)),
            'so_dien_thoai_giao_hang' => $randomPhone,
            'ten_nguoi_nhan' => 'Hung',
            'ma_khuyen_mai' => str_random(5),
            'tong_tien' => 0,
            'id_tinh_trang' => rand(3,7),
            'ngay_tao' => $randomDate,
            'ngay_cap_nhat' => $randomDate],
        [   'id' => 4,
            'id_tai_khoan_mua' => rand(1,5),
            'id_tai_khoan_ban' => rand(1,5),
            'giao_dich_cod' => 1,
            'giao_dich_truc_tuyen' => 0,
            'thoi_gian_giao_dich' => $randomDate,
            'ngay_giao_hang' => $randomDate,
            'dia_chi_giao_hang' => substr($randomString,0,rand(20,30)),
            'so_dien_thoai_giao_hang' => $randomPhone,
            'ten_nguoi_nhan' => 'Truong',
            'ma_khuyen_mai' => str_random(5),
            'tong_tien' => 0,
            'id_tinh_trang' => rand(3,7),
            'ngay_tao' => $randomDate,
            'ngay_cap_nhat' => $randomDate],
        ]);
    }

    private function seedTaiKhoanNguoiBanTable()
    {
        $randomInteger= rand(1202055681,1362055681);
        $randomDate = date("Y-m-d H:i:s",$randomInteger);
        DB::table('tai_khoan_nguoi_ban')->insert([
            [   'id' => 1, 
                'ten_dang_nhap' => 'xuan', 
                'anh_dai_dien' => str_random(10),
                'email' => 'xuan@gmail.com',
                'ten_shop' => 'Shop xiaomi',
                'mat_khau' =>  bcrypt('123456'),
                'gioi_tinh' => rand(0,1),
                'ho' => 'Huynh',
                'ten' => 'Xuan',
                'so_dien_thoai' => '0'.rand(1000000000,129000000),
                'dia_chi' => str_random(10),
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => rand(8,10),
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 2, 
                'ten_dang_nhap' => 'nhieu', 
                'anh_dai_dien' => str_random(10),
                'email' => 'nhieu@gmail.com',
                'ten_shop' => 'Shop oppo',
                'mat_khau' =>  bcrypt('123456'),
                'gioi_tinh' => rand(0,1),
                'ho' => 'Nguyen',
                'ten' => 'Nhieu',
                'so_dien_thoai' => '0'.rand(1000000000,129000000),
                'dia_chi' => str_random(10),
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => rand(8,10),
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 3, 
                'ten_dang_nhap' => 'hieu', 
                'anh_dai_dien' => str_random(10),
                'email' => 'hieu@gmail.com',
                'ten_shop' => 'Son handmade',
                'mat_khau' =>  bcrypt('123456'),
                'gioi_tinh' => rand(0,1),
                'ho' => 'Nguyen',
                'ten' => 'Hieu',
                'so_dien_thoai' => '0'.rand(1000000000,129000000),
                'dia_chi' => str_random(10),
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => rand(8,10),
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 4, 
                'ten_dang_nhap' => 'nhu', 
                'anh_dai_dien' => str_random(10),
                'email' => 'nhu@gmail.com',
                'ten_shop' => 'Shop đồ cũ',
                'mat_khau' =>  bcrypt('123456'),
                'gioi_tinh' => rand(0,1),
                'ho' => 'Tran',
                'ten' => 'Nhu',
                'so_dien_thoai' => '0'.rand(1000000000,129000000),
                'dia_chi' => str_random(10),
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => rand(8,10),
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 5, 
                'ten_dang_nhap' => 'quan', 
                'anh_dai_dien' => str_random(10),
                'email' => 'quan@gmail.com',
                'ten_shop' => 'Shop dầu dừa',
                'mat_khau' =>  bcrypt('123456'),
                'gioi_tinh' => rand(0,1),
                'ho' => 'Ha',
                'ten' => 'Quan',
                'so_dien_thoai' => '0'.rand(1000000000,129000000),
                'dia_chi' => str_random(10),
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => rand(8,10),
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
        ]);
    }  

      private function seedQuanTriVienTable()
    {
        DB::table('quan_tri_vien')->insert([
            ['id' => 1, 'ten_dang_nhap' => 'nhu', 'mat_khau' => bcrypt('123456'), 'email' => 'quynhnhu@gmail.com', 'ho'=>'Phạm Lê', 'ten' =>'Quỳnh Như', 'id_tinh_trang'=>'11', 'phan_quyen'=>'0'],
            
        ]);
    }


    private function seedTaiKhoanNguoiMuaTable()  
    {
         $randomInteger= rand(1202055681,1362055681);
        $randomDate = date("Y-m-d H:i:s",$randomInteger);
        DB::table('tai_khoan_nguoi_mua')->insert([
            [   'id' => 1, 
                'ten_dang_nhap' => 'xuan', 
                'anh_dai_dien' => 'cropper.jpg',
                'email' => 'xuan@gmail.com',
                'mat_khau' =>  bcrypt('123456'),
                'gioi_tinh' => rand(0,2),
                'ho' => 'Huynh',
                'ten' => 'Xuan',
                'so_dien_thoai' => '0'.rand(1000000000,129000000),
                'dia_chi' => str_random(10),
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => rand(11,13),
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 2, 
                'ten_dang_nhap' => 'nhu', 
                'anh_dai_dien' => 'cropper.jpg',
                'email' => 'nhu@gmail.com',
                'mat_khau' =>  bcrypt('123456'),
                'gioi_tinh' => rand(0,2),
                'ho' => 'Phạm',
                'ten' => 'Như',
                'so_dien_thoai' => '0'.rand(1000000000,129000000),
                'dia_chi' => str_random(10),
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => rand(11,13),
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 3, 
                'ten_dang_nhap' => 'nhieu', 
                'anh_dai_dien' => 'cropper.jpg',
                'email' => 'nhieu@gmail.com',
                'mat_khau' =>  bcrypt('123456'),
                'gioi_tinh' => rand(0,2),
                'ho' => 'Nguyễn',
                'ten' => 'Nhiều',
                'so_dien_thoai' => '0'.rand(1000000000,129000000),
                'dia_chi' => str_random(10),
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => rand(11,13),
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 4, 
                'ten_dang_nhap' => 'hieu', 
                'anh_dai_dien' => 'cropper.jpg',
                'email' => 'hieu@gmail.com',
                'mat_khau' =>  bcrypt('123456'),
                'gioi_tinh' => rand(0,2),
                'ho' => 'Lê',
                'ten' => 'Hiếu',
                'so_dien_thoai' => '0'.rand(1000000000,129000000),
                'dia_chi' => str_random(10),
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => rand(11,13),
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 5, 
                'ten_dang_nhap' => 'tram', 
                'anh_dai_dien' => 'cropper.jpg',
                'email' => 'tram@gmail.com',
                'mat_khau' =>  bcrypt('123456'),
                'gioi_tinh' => rand(0,2),
                'ho' => 'Phạm',
                'ten' => 'Trâm',
                'so_dien_thoai' => '0'.rand(1000000000,129000000),
                'dia_chi' => str_random(10),
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => rand(11,13),
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
        ]);
    }
}
