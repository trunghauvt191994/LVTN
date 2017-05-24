<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiXe extends Model
{
    //
    protected $table = "loai_xe";

    public function sodoghe()
    {
    	return $this->hasMany('App\SoDoGhe','id_loai_xe','id');
    }

    public function tuyenxe()
    {
    	return $this->hasMany('App\TuyenXe','id_loai_xe','id');
    }

    public function taixe()
    {
    	return $this->hasMany('App\TaiXe','id_loai_xe','id');
    }

    public function xe()
    {
    	return $this->hasMany('App\Xe','id_loai_xe','id');
    }
}
