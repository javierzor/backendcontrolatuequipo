<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocalReviews extends Model
{
    protected $table = 'professions_user';
    protected $fillable = ['id','id_user', 'id_profession', 'id_promotions', 'name', 'status', 'shared'];
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
