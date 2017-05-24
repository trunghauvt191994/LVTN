<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLienHe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lien_he', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->length(10)->unsigned()->nullable();
            $table->foreign('id_user')->references('id')->on('users');
            $table->integer('sdt')->length(11);
            $table->text('noi_dung');
            $table->string('ten',50);
            $table->string('tieu_de',50);
            $table->string('dia_chi',50);
            $table->integer('tinh_trang')->length(11);
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
        Schema::dropIfExists('lien_he');
    }
}
