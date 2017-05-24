<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoDoGhe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('so_do_ghe', function (Blueprint $table) {
            $table->integer('tang_ghe')->length(10);
            $table->integer('so_ghe')->length(10);
            $table->integer('id_loai_xe')->length(10)->unsigned();
            $table->foreign('id_loai_xe')->references('id')->on('loai_xe');
            $table->primary(['tang_ghe','so_ghe','id_loai_xe']);
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
        Schema::dropIfExists('so_do_ghe');
    }
}
