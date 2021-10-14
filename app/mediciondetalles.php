<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mediciondetalles extends Model
{
    protected $table = 'medicion_detalles';
    protected $fillable = ['id','id_medicion','valor'];

    public function detalladosmediciones()
    {
        return $this->hasMany('App\mediciones','id', 'id_medicion');
    }
    public function medicionesdetallados()
    {
        return $this->hasMany('App\Local','id', 'id_category');
    }

}
