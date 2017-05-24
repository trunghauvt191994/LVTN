<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tin_tuc')->length(10)->unsigned();
            $table->foreign('id_tin_tuc')->references('id')->on('tin_tuc');
            $table->integer('id_user')->length(10)->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('noi_dung',50);
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
        Schema::dropIfExists('comment');
    }
}
