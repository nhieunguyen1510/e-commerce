<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiaoDichTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('giao_dich', function (Blueprint $table) {
            $table->increments('id')->primarykey();
            $table->integer('id_tai_khoan');
            $table->tinyInteger('giao_dich_cod');
            $table->tinyInteger('giao_dich_truc_tuyen');
            $table->tinyInteger('id_giao_dich_truc_tuyen')->nullable();
            $table->string('id_tai_khoan_giao_dich_truc_tuyen')->nullable();
            $table->datetime('thoi_gian_giao_dich')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->datetime('ngay_giao_hang')->nullable();
            $table->string('dia_chi_giao_hang', 200);
            $table->string('so_dien_thoai_giao_hang', 15);
            $table->string('ten_nguoi_nhan', 200);
            $table->string('ma_khuyen_mai', 200)->nullable();
            $table->integer('tong_tien');
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
        Schema::dropIfExists('giao_dich');
    }
}
