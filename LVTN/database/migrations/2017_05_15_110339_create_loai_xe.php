<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaiXe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loai_xe', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cho_ngoi')->length(11);
            $table->integer('loai_ghe')->length(11);
            $table->integer('so_tang')->length(11)->default(1)->unsigned();
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
        Schema::dropIfExists('loai_xe');
    }
}
