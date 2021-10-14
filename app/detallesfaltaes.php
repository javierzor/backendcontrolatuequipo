<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class detallesfaltaes extends Model

{

    protected $table = 'detalles_faltaes';

    // aceptamos todas las columnas de la tabla para este modelo con un guarded vacio...
    protected $guarded = [];  

    public $timestamps = false;



}

