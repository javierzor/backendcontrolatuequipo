<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Getcode extends Model
{
    protected $table = 'verificationcode';
    protected $fillable = ['id','code'];

    public function local()
    {
        return $this->hasMany('App\Local','id', 'id_local');
    }
    public function category()
    {
        return $this->hasMany('App\Local','id', 'id_category');
    }

}
