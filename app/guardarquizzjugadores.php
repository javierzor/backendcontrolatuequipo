<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guardarquizzjugadores extends Model

{

    protected $table = 'quizzes_jugadores';
    // aceptamos todas las columnas de la tabla para este modelo con un guarded vacio...
    protected $guarded = [];  

    public $timestamps = false;

}

