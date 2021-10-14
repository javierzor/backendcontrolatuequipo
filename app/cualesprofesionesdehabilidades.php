<?php

namespace App;
// use App\Local;
use Illuminate\Database\Eloquent\Model;

class cualesprofesionesdehabilidades extends Model
{
    protected $table = 'posiciones_por_deporte';
    protected $fillable = ['deporte', 'posicion'];




}
