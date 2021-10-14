<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inserthabilidades extends Model
{
    protected $table = 'habilidad_user';
    protected $fillable = ['id','id_user', 'id_medicion', 'valor_medicion_user'];
    public $timestamps = false;

}
