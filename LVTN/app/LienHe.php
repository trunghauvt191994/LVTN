<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LienHe extends Model
{
    //
    protected $table = "lien_he";

    public function user()
    {
    	return $this->belongsTo('App\User','id_user','id');
    }
    
}
