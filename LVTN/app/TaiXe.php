<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaiXe extends Model
{
    //
    protected $table = "tai_xe";

    public function loaixe()
    {
    	return $this->belongsTo('App\LoaiXe','id_loai_xe','id');
    }

    public function phancongtaixe()
    {
    	return $this->hasMany('App\PhanCongTaiXe','id_tai_xe','id');
    }
}
