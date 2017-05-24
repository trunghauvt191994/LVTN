<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaiTin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loai_tin', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_the_loai_tin')->length(10)->unsigned();
            $table->foreign('id_the_loai_tin')->references('id')->on('the_loai_tin');
            $table->string('ten',50);
            $table->string('ten_khong_dau',50);
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
        Schema::dropIfExists('loai_tin');
    }
}
