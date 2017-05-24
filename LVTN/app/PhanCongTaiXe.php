<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhanCongTaiXe extends Model
{
    //
    protected $table = "phan_cong_tai_xe";

    public function chuyenxe()
    {
    	return $this->belongsTo('App\ChuyenXe','id_chuyen_xe',['id_chuyen_xe','id_tai_xe','bien_so_xe']);
    }

    public function taixe()
    {
    	return $this->belongsTo('App\TaiXe','id_tai_xe',['id_chuyen_xe','id_tai_xe','bien_so_xe']);
    }

    public function xe()
    {
    	return $this->belongsTo('App\Xe','bien_so_xe',['id_chuyen_xe','id_tai_xe','bien_so_xe']);
    }
}
