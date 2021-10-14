<?php

namespace App;
// use App\Local;
use Illuminate\Database\Eloquent\Model;

class Habilidadtipos extends Model
{
    protected $table = 'habilidades';
    protected $fillable = ['id', 'id_medicion', 'name', 'tipo', 'medida'];

    public function habilidadesdropsconfig()
    {
        return $this->hasMany('App\Habilidadesdropsconfig','id_medicion');
    }


}
