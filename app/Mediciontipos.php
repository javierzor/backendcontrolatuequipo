<?php

namespace App;
// use App\Local;
use Illuminate\Database\Eloquent\Model;

class Mediciontipos extends Model
{
    protected $table = 'mediciones';
    protected $fillable = ['id', 'id_medicion', 'name', 'tipo', 'medida'];

    public function locall()
    {
        return $this->hasMany('App\Locall','id_medicion');
    }


}
