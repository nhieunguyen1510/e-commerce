<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuanTriVienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quan_tri_vien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_dang_nhap')->unique();
            $table->string('mat_khau');
            $table->string('email')->unique();
            $table->string('ho');
            $table->string('ten');
            $table->string('anh_dai_dien')->default('no-avatar');
            $table->integer('id_tinh_trang');
            $table->tinyInteger('phan_quyen');
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
        Schema::dropIfExists('quan_tri_vien');
    }
}
