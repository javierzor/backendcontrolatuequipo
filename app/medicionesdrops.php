<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicionesdrops extends Model
{
    protected $table = 'medicion_detalles';
    protected $fillable = ['id','id_medicion','valor'];

    public function local()
    {
        return $this->hasMany('App\Local','id', 'id_local');
    }
    public function category()
    {
        return $this->hasMany('App\Local','id', 'id_category');
    }

}
