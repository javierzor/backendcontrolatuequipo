<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insertmediciones extends Model
{
    protected $table = 'medicion_user';
    protected $fillable = ['id','id_user', 'id_medicion', 'valor_medicion_user'];
    public $timestamps = false;

}
