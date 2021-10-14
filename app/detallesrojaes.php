<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class detallesrojaes extends Model

{

    protected $table = 'detalles_rojaes';

    // aceptamos todas las columnas de la tabla para este modelo con un guarded vacio...
    protected $guarded = [];  

    public $timestamps = false;



}

