<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TuyenXe extends Model
{
    //
    protected $table = "tuyen_xe";

    public function benxe()
    {
    	return $this->belongsTo('App\BenXe','id_ben_xe','id');
    }

    public function chitiettuyentram()
    {
    	return $this->hasMany('App\ChiTietTuyenTram','id_tuyen_xe','id');
    }

    public function loaixe()
    {
    	return $this->belongsTo('App\LoaiXe','id_loai_xe','id');
    }

    public function chuyenxe()
    {
    	return $this->hasMany('App\ChuyenXe','id_tuyen_xe','id');
    }
}
