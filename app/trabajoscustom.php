<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trabajoscustom extends Model
{
    protected $table = 'trabajoscustom';
    protected $fillable = ['id','id_user', 'custom1', 'custom2', 'custom3', 'custom4', 'custom5', 'custom6', 'custom7', 'custom8', 'custom9', 'custom10'];
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
