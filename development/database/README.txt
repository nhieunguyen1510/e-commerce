Thực hiện các bước sau để tạo database:
1. Tạo database tmdt (nếu chưa có)
2. Chạy lệnh "php artisan migrate:refresh --seed"
3. Mở MySQL Workbench, chọn File > Run SQL Script
4. Chọn file sanpham_table_seeder.sql
5. Chọn schema là tmdt, encoding là utf8, chọn Run
6. Chạy lệnh "php artisan db:seed --class=ChiTietGiaoDichSeeder"