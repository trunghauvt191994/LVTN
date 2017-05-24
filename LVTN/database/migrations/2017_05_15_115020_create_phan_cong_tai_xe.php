<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhanCongTaiXe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phan_cong_tai_xe', function (Blueprint $table) {
            $table->integer('id_chuyen_xe')->length(10)->unsigned();
            $table->foreign('id_chuyen_xe')->references('id')->on('chuyen_xe');
            $table->integer('id_tai_xe')->length(10)->unsigned();
            $table->foreign('id_tai_xe')->references('id')->on('tai_xe');
            $table->string('bien_so_xe',50);
            $table->foreign('bien_so_xe')->references('bien_so')->on('xe');
            $table->primary(['id_chuyen_xe','id_tai_xe','bien_so_xe']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phan_cong_tai_xe');
    }
}
