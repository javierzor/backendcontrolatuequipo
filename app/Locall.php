<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locall extends Model
{
    protected $table = 'medicion_detalles';
    protected $fillable = ['id_medicion', 'valor'];


}
