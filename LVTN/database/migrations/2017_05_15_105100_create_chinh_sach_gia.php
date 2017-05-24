<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChinhSachGia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chinh_sach_gia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_chuong_trinh',50);
            $table->integer('phan_tram')->length(11);
            $table->integer('trang_thai')->length(11);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chinh_sach_gia');
    }
}
