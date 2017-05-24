<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheLoaiTin extends Model
{
    //
    protected $table = "the_loai_tin";
    //('App\MuonDen','khoaphuAppden','KhoachinhModel')
    public function loaitin()
    {
    	return $this->hasMany('App\LoaiTin','id_the_loai_tin','id');
    }
    //('App\MuonDen','App\TrungGian','KhoaphuTrungGian','KhoaPhuAppDen','khoachinhModel')
    public function tintuc()
    {
    	return $this->hasManyThrough('App\TinTuc','App\LoaiTin','id_the_loai_tin','id_loai_tin','id');
    }
}
