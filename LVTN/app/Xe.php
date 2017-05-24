<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Xe extends Model
{
    //
    protected $table = "xe";

    public function loaixe()
    {
    	return $this->belongsTo('App\LoaiXe','id_loai_xe','bien_so');
    }

    public function phancongtaixe()
    {
    	return $this->hasMany('App\PhanCongTaiXe','bien_so_xe','bien_so');
    }
}
