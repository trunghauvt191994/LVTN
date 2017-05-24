<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comment()
    {
        return $this->hasMany('App\Comment','id_user','id');
    }

    public function benxe()
    {
        return $this->belongsTo('App\BenXe','id_ben_xe','id');
    }

    public function lienhe()
    {
        return $this->hasMany('App\LienHe','id_user','id');
    }

    public function datve()
    {
        return $this->hasMany('App\DatVe','id_user','id');
    }
}
