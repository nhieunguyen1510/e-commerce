<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoaDonTaiKhoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('hoa_don_tai_khoan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tai_khoan_ban');
            $table->integer('id_tinh_trang')->default(0);
            $table->float('so_tien_chuyen_khoan');
            $table->string('hinh_thuc_thanh_toan');
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
        //
        Schema::dropIfExists('hoa_don_tai_khoan');
    }
}
