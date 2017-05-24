<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    //
    protected $table = "tin_tuc";

    public function loaitin()
    {
    	return $this->belongsTo('App\LoaiTin','id_loai_tin','id');
    }

    public function comment()
    {
    	return $this->hasMany('App\Comment','id_tin_tuc','id');
    }
}
