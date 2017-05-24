<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietTuyenTram extends Model
{
    //
    protected $table = "chi_tiet_tuyen_tram";

    public function tuyenxe(){
    	return $this->belongsTo('App\TuyenXe','id_tuyen_xe',['id_tuyen_xe','id_tram_dung']);
    }

    public function tramdung(){
    	return $this->belongsTo('App\TramDung','id_tram_dung',['id_tuyen_xe','id_tram_dung']);
    }
}
