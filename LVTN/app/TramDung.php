<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TramDung extends Model
{
    //
    protected $table = "tram_dung";

    public function chitiettuyentram()
    {
    	return $this->hasMany('App\ChiTietTuyenTram','id_tram_dung','id');
    }
}
