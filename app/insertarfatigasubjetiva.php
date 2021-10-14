<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insertarfatigasubjetiva extends Model

{

    protected $table = 'quizzes_fatigasubjetiva';

    // aceptamos todas las columnas de la tabla para este modelo con un guarded vacio...
    protected $guarded = [];  

    public $timestamps = false;



}

