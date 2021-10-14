<?php

namespace App;
// use App\Local;
use Illuminate\Database\Eloquent\Model;

class cualeshabilidades extends Model
{
    protected $table = 'habilidades_de_profesiones';
    protected $fillable = ['id_profesion', 'id_medicion'];

}
