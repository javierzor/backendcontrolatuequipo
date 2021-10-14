<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class detallesamarillaes extends Model

{

    protected $table = 'detalles_amarillaes';

    // aceptamos todas las columnas de la tabla para este modelo con un guarded vacio...
    protected $guarded = [];  

    public $timestamps = false;



}

