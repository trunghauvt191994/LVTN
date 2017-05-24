<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietTuyenTram extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_tuyen_tram', function (Blueprint $table) {
            $table->integer('id_tuyen_xe')->length(10)->unsigned();
            $table->integer('id_tram_dung')->length(10)->unsigned();
            $table->primary(['id_tuyen_xe', 'id_tram_dung']);           
            $table->foreign('id_tuyen_xe')->references('id')->on('tuyen_xe');           
            $table->foreign('id_tram_dung')->references('id')->on('tram_dung');
            $table->integer('gia_giam_diem_di')->length(11);
            $table->integer('gia_giam_diem_dung')->length(11);
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
        Schema::dropIfExists('chi_tiet_tuyen_tram');
    }
}
