<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sesiones extends Model

{

    protected $table = 'tempo_o_pretempo';

    // aceptamos todas las columnas de la tabla para este modelo con un guarded vacio...
    protected $guarded = [];  

    public $timestamps = false;



}

