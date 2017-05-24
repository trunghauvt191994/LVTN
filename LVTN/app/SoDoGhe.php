<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SoDoGhe extends Model
{
    //
    protected $table = "so_do_ghe";

    public function loaixe()
    {
    	return $this->belongsTo('App\LoaiXe','id_loai_xe',['so_ghe','tang_ghe','id_loai_xe']);
    }
}
