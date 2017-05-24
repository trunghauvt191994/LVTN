<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ben_xe')->length(10)->unsigned()->nullable();
            $table->foreign('id_ben_xe')->references('id')->on('ben_xe');
            $table->string('ten',50);
            $table->string('email',50)->unique();
            $table->integer('quyen')->length(11)->default(0);
            $table->string('password',50);
            $table->string('sdt',50); 
            $table->string('cmnd',50);
            $table->string('dia_chi',50)->nullable();  
            $table->integer('diem_tich_luy')->length(11)->default(0)->unsigned();         
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
