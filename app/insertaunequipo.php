<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class insertaunequipo extends Model

{

    protected $table = 'equipos';

    protected $fillable = ['id_equipo','nombre_equipo', 'apodo_equipo', 'descripcion_equipo', 'correo_creador', 'escudo'];

    public $timestamps = false;



}

