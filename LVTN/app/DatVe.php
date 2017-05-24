<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatVe extends Model
{
    //
    protected $table = "dat_ve";

    public function user()
    {
    	return $this->belongsTo('App\User','id_user',['so_ghe','tang_ghe','ngay_di','id_chuyen_xe']);
    }
    public function chuyenxe()
    {
    	return $this->belongsTo('App\ChuyenXe','id_chuyen_xe',['so_ghe','tang_ghe','ngay_di','id_chuyen_xe']);
    }
    public function tuyenxe()
    {
        return $this->hasManyThrough('App\TuyenXe','App\ChuyenXe','id_tuyen_xe','id_chuyen_xe','id');
    }
}
