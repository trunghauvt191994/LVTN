<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChuyenXe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuyen_xe', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tuyen_xe')->length(10)->unsigned();
            $table->foreign('id_tuyen_xe')->references('id')->on('tuyen_xe');
            $table->time('gio_di');
            $table->time('gio_den');
            $table->integer('chuyen_so')->length(11);
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
        Schema::dropIfExists('chuyen_xe');
    }
}
