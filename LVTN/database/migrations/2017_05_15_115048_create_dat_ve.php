<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatVe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dat_ve', function (Blueprint $table) {
            $table->integer('tang_ghe')->length(10)->unsigned();
            $table->integer('so_ghe')->length(10)->unsigned();
            $table->date('ngay_di');
            $table->datetime('ngay_dat_ve');
            $table->integer('tinh_trang_dat')->length(11)->unsigned();
            $table->integer('tinh_trang_ve')->length(11)->unsigned();
            $table->string('ma_len_xe',50);
            $table->integer('id_chuyen_xe')->length(10)->unsigned();
            $table->foreign('id_chuyen_xe')->references('id')->on('chuyen_xe');
            $table->string('diem_xuong_xe',50);
            $table->string('ghi_chu',50)->nullable();
            $table->integer('id_user')->length(10)->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->primary(['tang_ghe','so_ghe','ngay_di','id_chuyen_xe']);
            $table->integer('gia_ve')->length(11)->default(0);
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
        Schema::dropIfExists('dat_ve');
    }
}
