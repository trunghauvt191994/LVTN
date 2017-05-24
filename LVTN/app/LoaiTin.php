<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    //
    protected $table = "loai_tin";
    //('App\Den','khoaphuModel','KhoaChinhModel')
    public function theloaitin()
    {
    	return $this->belongsTo('App\TheLoaiTin','id_the_loai_tin','id');
    }

    public function tintuc()
    {
    	return $this->hasMany('App\TinTuc','id_loai_tin','id');
    }
}
