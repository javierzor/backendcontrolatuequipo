<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    protected $table = 'favorite';
    protected $fillable = ['id','id_user', 'id_local', 'id_promotion', 'like_promotion', 'like_local'];
    public $timestamps = false;

    public function promotions()
    {
        return $this->hasMany('App\Promotions','id', 'id_promotions');
    }
    public function user()
    {
        return $this->hasMany('App\User','id', 'id_user');
    }

    public function local()
    {
        return $this->hasMany('App\Local','id', 'id_local');
    }
}
