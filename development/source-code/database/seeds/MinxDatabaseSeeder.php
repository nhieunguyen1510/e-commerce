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
        // self::seedGiaoDichTable($randomString, $quantityOfSanPhamRecords);
        // self::seedGiaoDichNguoiBanTable($randomString, $quantityOfSanPhamRecords);
        // self::seedHoaDonTaiKhoanTable($randomString, $quantityOfSanPhamRecords);
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
            ['id' => 3, 'tinh_trang' => 'Chưa liên lạc', 'bang' => 'chi_tiet_giao_dich', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 4, 'tinh_trang' => 'Chưa giao', 'bang' => 'chi_tiet_giao_dich', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 5, 'tinh_trang' => 'Giao thành công', 'bang' => 'chi_tiet_giao_dich', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 6, 'tinh_trang' => 'Giao không thành công', 'bang' => 'chi_tiet_giao_dich', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 7, 'tinh_trang' => 'Hủy', 'bang' => 'chi_tiet_giao_dich', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 8, 'tinh_trang' => 'Chưa kích hoạt', 'bang' => 'tai_khoan_nguoi_ban', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 9, 'tinh_trang' => 'Đã kích hoạt', 'bang' => 'tai_khoan_nguoi_ban', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 10, 'tinh_trang' => 'Bị khóa', 'bang' => 'tai_khoan_nguoi_ban', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 11, 'tinh_trang' => 'Chưa kích hoạt', 'bang' => 'tai_khoan_nguoi_mua', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 12, 'tinh_trang' => 'Đã kích hoạt', 'bang' => 'tai_khoan_nguoi_mua', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 13, 'tinh_trang' => 'Bị khóa', 'bang' => 'tai_khoan_nguoi_mua', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 14, 'tinh_trang' => 'Chuyển khoản', 'bang' => 'hoa_don_tai_khoan', 'thuoc_tinh' => 'hinh_thuc_thanh_toan'],
            ['id' => 15, 'tinh_trang' => 'Chưa liên lạc', 'bang' => 'giao_dich_nguoi_ban', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 16, 'tinh_trang' => 'Chưa giao', 'bang' => 'giao_dich_nguoi_ban', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 17, 'tinh_trang' => 'Giao thành công', 'bang' => 'giao_dich_nguoi_ban', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 18, 'tinh_trang' => 'Giao không thành công', 'bang' => 'giao_dich_nguoi_ban', 'thuoc_tinh' => 'id_tinh_trang'],
            ['id' => 19, 'tinh_trang' => 'Hủy', 'bang' => 'giao_dich_nguoi_ban', 'thuoc_tinh' => 'id_tinh_trang'],
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
            'ngay_giao_hang' => $randomDate,
            'dia_chi_giao_hang' => substr($randomString,0,rand(20,30)),
            'so_dien_thoai_giao_hang' => $randomPhone,
            'ten_nguoi_nhan' => 'Nghia',
            'ma_khuyen_mai' => str_random(5),
            'tong_tien' => 0,
            'ngay_tao' => $randomDate,
            'ngay_cap_nhat' => $randomDate],
        [   'id' => 2,
            'id_tai_khoan' => rand(1,5),
            'giao_dich_cod' => 1,
            'giao_dich_truc_tuyen' => 0,
            'thoi_gian_giao_dich' => $randomDate,
            'ngay_giao_hang' => $randomDate,
            'dia_chi_giao_hang' => substr($randomString,0,rand(20,30)),
            'so_dien_thoai_giao_hang' => $randomPhone,
            'ten_nguoi_nhan' => 'Dung',
            'ma_khuyen_mai' => str_random(5),
            'tong_tien' => 0,
            'ngay_tao' => $randomDate,
            'ngay_cap_nhat' => $randomDate],
        [   'id' => 3,
            'id_tai_khoan' => rand(1,5),
            'giao_dich_cod' => 1,
            'giao_dich_truc_tuyen' => 0,
            'thoi_gian_giao_dich' => $randomDate,
            'ngay_giao_hang' => $randomDate,
            'dia_chi_giao_hang' => substr($randomString,0,rand(20,30)),
            'so_dien_thoai_giao_hang' => $randomPhone,
            'ten_nguoi_nhan' => 'Hung',
            'ma_khuyen_mai' => str_random(5),
            'tong_tien' => 0,
            'ngay_tao' => $randomDate,
            'ngay_cap_nhat' => $randomDate],
        [   'id' => 4,
            'id_tai_khoan' => rand(1,5),
            'giao_dich_cod' => 1,
            'giao_dich_truc_tuyen' => 0,
            'thoi_gian_giao_dich' => $randomDate,
            'ngay_giao_hang' => $randomDate,
            'dia_chi_giao_hang' => substr($randomString,0,rand(20,30)),
            'so_dien_thoai_giao_hang' => $randomPhone,
            'ten_nguoi_nhan' => 'Truong',
            'ma_khuyen_mai' => str_random(5),
            'tong_tien' => 0,
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
            'id_tinh_trang' => 15,
            'id_giao_dich' => rand(1,4),
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
            'id_tinh_trang' => 16,
            'id_giao_dich' => rand(1,4),
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
            'id_tinh_trang' => 17,
            'id_giao_dich' => rand(1,4),
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
            'id_tinh_trang' => 18,
            'id_giao_dich' => rand(1,4),
            'ngay_tao' => $randomDate,
            'ngay_cap_nhat' => $randomDate],
        [   'id' => 5,
            'id_tai_khoan_mua' => rand(1,5),
            'id_tai_khoan_ban' => rand(1,5),
            'giao_dich_cod' => 1,
            'giao_dich_truc_tuyen' => 0,
            'thoi_gian_giao_dich' => $randomDate,
            'ngay_giao_hang' => $randomDate,
            'dia_chi_giao_hang' => substr($randomString,0,rand(20,30)),
            'so_dien_thoai_giao_hang' => $randomPhone,
            'ten_nguoi_nhan' => 'Tuan',
            'ma_khuyen_mai' => str_random(5),
            'tong_tien' => 0,
            'id_tinh_trang' => 19,
            'id_giao_dich' => rand(1,4),
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
                'ten_dang_nhap' => 'merchantA', 
                'email' => 'kimxuanhuynh21@gmail.com',
                'ten_shop' => 'Shop xiaomi',
                'mat_khau' =>  bcrypt('merchant1'),
                'gioi_tinh' => 1,
                'ho' => 'Huỳnh',
                'ten' => 'Xuân',
                'so_dien_thoai' => '0121218563',
                'dia_chi' => '231 Phan Văn Khỏe p5 q2',
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => 9,
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 2, 
                'ten_dang_nhap' => 'merchantB', 
                'email' => 'nhieu@gmail.com',
                'ten_shop' => 'Shop oppo',
                'mat_khau' =>  bcrypt('merchant2'),
                'gioi_tinh' => 0,
                'ho' => 'Nguyễn',
                'ten' => 'Nhiều',
                'so_dien_thoai' => '0121218565',
                'dia_chi' => '3 Hậu Giang p6 q2',
                'ma_kich_hoat' => '',
                'id_tinh_trang' => 9,
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 3, 
                'ten_dang_nhap' => 'merchantC', 
                'email' => 'hieu@gmail.com',
                'ten_shop' => 'Son handmade',
                'mat_khau' =>  bcrypt('merchant3'),
                'gioi_tinh' => 1,
                'ho' => 'Nguyễn',
                'ten' => 'Hiếu',
                'so_dien_thoai' => '0909218565',
                'dia_chi' => '42 Lũy Bán Bích quận Bình Tân',
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => 10,
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 4, 
                'ten_dang_nhap' => 'merchantD', 
                'email' => 'quynhnhucheer@gmail.com',
                'ten_shop' => 'Shop đồ cũ',
                'mat_khau' =>  bcrypt('merchant4'),
                'gioi_tinh' => 1,
                'ho' => 'Tran',
                'ten' => 'Nhu',
                'so_dien_thoai' => '0909218323',
                'dia_chi' => '1 An Dương Vương q5',
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => 9,
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 5, 
                'ten_dang_nhap' => 'merchantE', 
                'email' => 'quan@gmail.com',
                'ten_shop' => 'Shop dầu dừa',
                'mat_khau' =>  bcrypt('merchant5'),
                'gioi_tinh' => 0,
                'ho' => 'Ha',
                'ten' => 'Quan',
                'so_dien_thoai' => '0121218323',
                'dia_chi' => '32 Bình Tiên q5',
                'ma_kich_hoat' => '',
                'id_tinh_trang' => 8,
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 6, 
                'ten_dang_nhap' => 'merchantF', 
                'email' => 'duyanh@gmail.com',
                'ten_shop' => 'Shop miu miu',
                'mat_khau' =>  bcrypt('merchant6'),
                'gioi_tinh' => 0,
                'ho' => 'Duy',
                'ten' => 'Anh',
                'so_dien_thoai' => '0909213456',
                'dia_chi' => '87 Bình Thới q5',
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => 9,
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 7, 
                'ten_dang_nhap' => 'merchantG', 
                'email' => 'baobinh@gmail.com',
                'ten_shop' => 'Shop Tinh Tinh',
                'mat_khau' =>  bcrypt('merchant7'),
                'gioi_tinh' => 1,
                'ho' => 'Bảo',
                'ten' => 'Bình',
                'so_dien_thoai' => '0908546565',
                'dia_chi' => '87 Lạc Long Quân q5',
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => 10,
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 8, 
                'ten_dang_nhap' => 'merchantH', 
                'email' => 'chung@gmail.com',
                'ten_shop' => 'Shop Hanna',
                'mat_khau' =>  bcrypt('merchant8'),
                'gioi_tinh' => 0,
                'ho' => 'Quốc',
                'ten' => 'Chung',
                'so_dien_thoai' => '0121212223',
                'dia_chi' => '32 Cao Đạt q5',
                'ma_kich_hoat' => '',
                'id_tinh_trang' => 8,
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 9, 
                'ten_dang_nhap' => 'merchantI', 
                'email' => 'quocdat@gmail.com',
                'ten_shop' => 'Shop beiu',
                'mat_khau' =>  bcrypt('merchant9'),
                'gioi_tinh' => 0,
                'ho' => 'Quốc',
                'ten' => 'Đạt',
                'so_dien_thoai' => '0909211236',
                'dia_chi' => '23 Cô Giang q1',
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => 9,
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 10, 
                'ten_dang_nhap' => 'merchantJ', 
                'email' => 'xuyen@gmail.com',
                'ten_shop' => 'Shop Ba Ba',
                'mat_khau' =>  bcrypt('merchant10'),
                'gioi_tinh' => 1,
                'ho' => 'Kim',
                'ten' => 'Xuyến',
                'so_dien_thoai' => '0121254656',
                'dia_chi' => '87 Lạc Long Quân q5',
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => 10,
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
        ]);
    }  

      private function seedQuanTriVienTable()
    {
        DB::table('quan_tri_vien')->insert([
            ['id' => 1, 'ten_dang_nhap' => 'admin', 'mat_khau' => bcrypt('admin123'), 'email' => 'quynhnhu@gmail.com', 'ho'=>'Phạm Lê', 'ten' =>'Quỳnh Như', 'id_tinh_trang'=>'11', 'phan_quyen'=>'0', 'anh_dai_dien'=>'img.jpg'],
            
        ]);
    }


    private function seedTaiKhoanNguoiMuaTable()  
    {
         $randomInteger= rand(1202055681,1362055681);
        $randomDate = date("Y-m-d H:i:s",$randomInteger);
        DB::table('tai_khoan_nguoi_mua')->insert([
            [   'id' => 1, 
                'ten_dang_nhap' => 'customerX', 
                'email' => 'kimxuanhuynh21@gmail.com',
                'mat_khau' =>  bcrypt('customer1'),
                'gioi_tinh' => 1,
                'ho' => 'Huỳnh',
                'ten' => 'Xuân',
                'so_dien_thoai' => '0121218563',
                'dia_chi' => '231 Phan Văn Khỏe p5 q2',
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => 12,
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 2, 
                'ten_dang_nhap' => 'customerY', 
                'email' => 'nhung@gmail.com',
                'mat_khau' =>  bcrypt('customer2'),
                'gioi_tinh' => 0,
                'ho' => 'Phạm',
                'ten' => 'Tín',
                'so_dien_thoai' => '0121218565',
                'dia_chi' => '3 Hậu Giang p6 q2',
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => 12,
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 3, 
                'ten_dang_nhap' => 'customerA', 
                'email' => 'nhan@gmail.com',
                'mat_khau' =>  bcrypt('customer3'),
                'gioi_tinh' => 0,
                'ho' => 'Nguyễn',
                'ten' => 'Nhân',
                'so_dien_thoai' => '0909218565',
                'dia_chi' => '42 Lũy Bán Bích quận Bình Tân',
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => 12,
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 4, 
                'ten_dang_nhap' => 'customerB', 
                'email' => 'hung@gmail.com',
                'mat_khau' =>  bcrypt('customer4'),
                'gioi_tinh' => 0,
                'ho' => 'Lê',
                'ten' => 'Hùng',
                'so_dien_thoai' => '0909218323',
                'dia_chi' => '1 An Dương Vương q5',
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => 12,
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 5, 
                'ten_dang_nhap' => 'customerC', 
                'email' => 'tram@gmail.com',
                'mat_khau' =>  bcrypt('customer5'),
                'gioi_tinh' => 1,
                'ho' => 'Phạm',
                'ten' => 'Trâm',
                'so_dien_thoai' => '0121218323',
                'dia_chi' => '32 Bình Tiên q5',
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => 12,
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 6, 
                'ten_dang_nhap' => 'customerD', 
                'email' => 'anhtuan@gmail.com',
                'mat_khau' =>  bcrypt('customer6'),
                'gioi_tinh' => 0,
                'ho' => 'Anh',
                'ten' => 'Tuấn',
                'so_dien_thoai' => '0909219898',
                'dia_chi' => '98 An Dương Vương q5',
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => 12,
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 7, 
                'ten_dang_nhap' => 'customerE', 
                'email' => 'xuyen@gmail.com',
                'mat_khau' =>  bcrypt('customer7'),
                'gioi_tinh' => 1,
                'ho' => 'Phạm',
                'ten' => 'Xuyến',
                'so_dien_thoai' => '0909218323',
                'dia_chi' => '32 An Lạc q5',
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => 12,
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 8, 
                'ten_dang_nhap' => 'customerF', 
                'email' => 'phucluong@gmail.com',
                'mat_khau' =>  bcrypt('customer8'),
                'gioi_tinh' => 0,
                'ho' => 'Phúc',
                'ten' => 'Lương',
                'so_dien_thoai' => '0121219820',
                'dia_chi' => '98 Nguyễn Trãi q5',
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => 12,
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 9, 
                'ten_dang_nhap' => 'customerG', 
                'email' => 'yen@gmail.com',
                'mat_khau' =>  bcrypt('customer9'),
                'gioi_tinh' => 1,
                'ho' => 'Phạm',
                'ten' => 'Yến',
                'so_dien_thoai' => '0909212323',
                'dia_chi' => '32 Âu Cơ q5',
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => 12,
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
            [   'id' => 10, 
                'ten_dang_nhap' => 'customerH', 
                'email' => 'truc@gmail.com',
                'mat_khau' =>  bcrypt('customer10'),
                'gioi_tinh' => 1,
                'ho' => 'Phạm',
                'ten' => 'Trúc',
                'so_dien_thoai' => '0909223456',
                'dia_chi' => '90 Âu Cơ q5',
                'ma_kich_hoat' => str_random(20),
                'id_tinh_trang' => 12,
                'ngay_tao' => $randomDate,
                'ngay_cap_nhat' => $randomDate],
        ]);
    }
    
    private function seedHoaDonTaiKhoanTable($randomString, $quantityOfSanPhamRecords)
    {
        $randomInteger= rand(1202055681,1362055681);
        $randomDate = date("Y-m-d H:i:s",$randomInteger);
        DB::table('hoa_don_tai_khoan')->insert([
        [   'id' => 1,
            'id_tai_khoan_ban' => rand(1,5),
            'so_tien_chuyen_khoan' => 300000,
            'hinh_thuc_thanh_toan' => 14,
            'ngay_tao' => $randomDate,
            'ngay_cap_nhat' => $randomDate],
        [   'id' => 2,
            'id_tai_khoan_ban' => rand(1,5),
            'so_tien_chuyen_khoan' => 300000,
            'hinh_thuc_thanh_toan' => 14,
            'ngay_tao' => $randomDate,
            'ngay_cap_nhat' => $randomDate],
        [   'id' => 3,
            'id_tai_khoan_ban' => rand(1,5),
            'so_tien_chuyen_khoan' => 300000,
            'hinh_thuc_thanh_toan' => 14,
            'ngay_tao' => $randomDate,
            'ngay_cap_nhat' => $randomDate],
        [   'id' => 4,
            'id_tai_khoan_ban' => rand(1,5),
            'so_tien_chuyen_khoan' => 300000,
            'hinh_thuc_thanh_toan' => 14,
            'ngay_tao' => $randomDate,
            'ngay_cap_nhat' => $randomDate],
        ]);
    }

}
