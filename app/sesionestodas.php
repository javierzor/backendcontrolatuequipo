<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sesionestodas extends Model

{

    protected $table = 'sesiones';

    // aceptamos todas las columnas de la tabla para este modelo con un guarded vacio...
    protected $guarded = [];  

    public $timestamps = false;



}

