<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChuyenXe extends Model
{
    //
    protected $table = "chuyen_xe";

    public function tuyenxe()
    {
    	return $this->belongsTo('App\TuyenXe','id_tuyen_xe','id');
    }

    public function datve()
    {
    	return $this->hasMany('App\DatVe','id_chuyen_xe','id');
    }

    public function phancongtaixe()
    {
    	return $this->hasMany('App\PhanCongTaiXe','id_chuyen_xe','id');
    }
}
