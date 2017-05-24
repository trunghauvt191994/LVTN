<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTramDung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tram_dung', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten',50);
            $table->string('ten_khong_dau',50);
            $table->text('thong_tin');
            $table->string('vi_tri',50);
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
        Schema::dropIfExists('tram_dung');
    }
}
