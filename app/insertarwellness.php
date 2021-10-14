<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insertarwellness extends Model

{

    protected $table = 'quizzes_willness';

    // aceptamos todas las columnas de la tabla para este modelo con un guarded vacio...
    protected $guarded = [];  

    public $timestamps = false;



}

