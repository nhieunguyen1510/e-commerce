<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_pham', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_danh_muc_san_pham');
            $table->integer('id_nguoi_ban');
            $table->string('ten');
            $table->string('anh_dai_dien');
            $table->string('anh_chi_tiet_1');
            $table->string('anh_chi_tiet_2');
            $table->string('anh_chi_tiet_3');
            $table->mediumText('mo_ta');
            $table->integer('so_luong_ton_kho');
            $table->integer('don_gia_goc');
            $table->integer('phan_tram_khuyen_mai')->default(0);
            $table->string('nha_san_xuat');
            $table->string('slug');
            $table->integer('id_tinh_trang');
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
        Schema::dropIfExists('san_pham');
    }
}
