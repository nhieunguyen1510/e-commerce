<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietGiaoDichTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_giao_dich', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_giao_dich');
            $table->integer('id_san_pham');
            $table->integer('so_luong');
            $table->integer('don_gia_san_pham');
            $table->integer('tong_tien');
            $table->integer('id_tinh_trang')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_giao_dich');
    }
}
