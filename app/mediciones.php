<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mediciones extends Model
{
    protected $table = 'mediciones';
    protected $fillable = ['id','id_medicion','name','tipo'];

    public function local()
    {
        return $this->hasMany('App\Local','id', 'id_local');
    }
    public function category()
    {
        return $this->hasMany('App\Local','id', 'id_category');
    }

}
