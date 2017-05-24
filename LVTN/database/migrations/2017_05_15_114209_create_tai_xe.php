<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaiXe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tai_xe', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_loai_xe')->length(10)->unsigned();
            $table->foreign('id_loai_xe')->references('id')->on('loai_xe');
            $table->string('bang_lai',50);
            $table->string('ten',50);
            $table->string('dia_chi',50);
            $table->integer('sdt')->length(10);
            $table->integer('gioitinh')->length(10);
            $table->string('hinh',50);
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
        Schema::dropIfExists('tai_xe');
    }
}
