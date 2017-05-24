<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTuyenXe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuyen_xe', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ben_xe')->length(10)->unsigned();
            $table->foreign('id_ben_xe')->references('id')->on('ben_xe');
            $table->integer('id_loai_xe')->length(10)->unsigned();
            $table->foreign('id_loai_xe')->references('id')->on('loai_xe');
            $table->integer('gia_ve')->length(11)->unsigned();
            $table->string('ben_den',50);
            $table->integer('trang_thai')->length(11)->default(0);
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
        Schema::dropIfExists('tuyen_xe');
    }
}
