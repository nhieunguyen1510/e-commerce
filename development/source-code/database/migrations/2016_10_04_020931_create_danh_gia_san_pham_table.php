<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDanhGiaSanPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danh_gia_san_pham', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tai_khoan');
            $table->integer('id_san_pham');
            $table->integer('diem_so');
            $table->text('binh_luan');
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
        Schema::dropIfExists('danh_gia_san_pham');
    }
}
