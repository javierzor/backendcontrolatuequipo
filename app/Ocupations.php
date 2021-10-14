<?php

namespace App;
// use App\Local;
use Illuminate\Database\Eloquent\Model;

class Ocupations extends Model
{
    protected $table = 'professions';
    protected $fillable = ['id','name', 'description', 'status'];

    public function local()
    {
        return $this->hasMany('App\Local','id', 'id_local');
    }
    public function category()
    {
        return $this->hasMany('App\Local','id', 'id_category');
    }

}
