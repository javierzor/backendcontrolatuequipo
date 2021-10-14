<?php

namespace App;
// use App\Local;
use Illuminate\Database\Eloquent\Model;

class medicionsintitulo extends Model
{
    protected $table = 'mediciones';
    protected $fillable = ['id', 'id_medicion', 'name', 'name', 'tipo', 'medida'];

    public function locall()
    {
        return $this->hasMany('App\Locall','id_medicion');
    }


}
