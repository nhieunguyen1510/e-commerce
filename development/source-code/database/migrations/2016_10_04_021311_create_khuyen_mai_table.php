<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhuyenMaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyen_mai', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('thoi_gian_bat_dau');
            $table->dateTime('thoi_gian_ket_thuc');
            $table->integer('so_luong_con_lai');
            $table->integer('giao_dich_toi_thieu');
            $table->integer('giao_dich_toi_da');
            $table->integer('gia_tri_tien_mat');
            $table->integer('gia_tri_phan_tram');
            $table->tinyInteger('tinh_trang')->default(0);
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
        Schema::dropIfExists('khuyen_mai');
    }
}
