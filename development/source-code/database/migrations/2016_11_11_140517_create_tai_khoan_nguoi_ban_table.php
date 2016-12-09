<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaiKhoanNguoiBanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tai_khoan_nguoi_ban', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_dang_nhap')->unique();
            $table->string('mat_khau');
            $table->string('email')->unique();
            $table->string('ten_shop')->unique();
            $table->string('anh_dai_dien')->default('public/img/tai_khoan_nguoi_mua/no-avatar.png');
            $table->tinyInteger('gioi_tinh');
            $table->string('ho');
            $table->string('ten');
            $table->string('so_dien_thoai')->nullable();
            $table->string('dia_chi')->nullable();
            $table->string('ma_kich_hoat')->nullable();
            $table->string('so_tai_khoan')->nullable();
            $table->string('ma_khoi_phuc_mat_khau')->nullable();
            $table->integer('id_tinh_trang')->default(0);
            $table->rememberToken();
            $table->timestamp('ngay_tao')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('ngay_cap_nhat')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tai_khoan_nguoi_ban');
    }
}
