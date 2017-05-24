<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BenXe extends Model
{
    //
    protected $table = "ben_xe";

    public function user()
    {
    	return $this->hasMany('App\User','id_ben_xe','id');
    }

    public function tuyenxe()
    {
    	return $this->hasMany('App\TuyenXe','id_ben_xe','id');
    }
}
