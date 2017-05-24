<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTinTuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tin_tuc', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_loai_tin')->length(10)->unsigned();
            $table->foreign('id_loai_tin')->references('id')->on('loai_tin');
            $table->string('tieu_de',50);
            $table->string('tieu_de_khong_dau',50);
            $table->text('tom_tat');
            $table->longText('noi_dung');
            $table->string('hinh',50);
            $table->integer('noi_bat')->length(11)->default(0);
            $table->integer('so_luot_xem')->length(11)->default(0);            
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
        Schema::dropIfExists('tin_tuc');
    }
}
