<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xe', function (Blueprint $table) {
            $table->string('bien_so',50);
            $table->primary('bien_so');
            $table->integer('id_loai_xe')->length(10)->unsigned();
            $table->foreign('id_loai_xe')->references('id')->on('loai_xe');
            $table->string('mau_xe',50);
            $table->string('thong_tin_xe',50);
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
        Schema::dropIfExists('xe');
    }
}
