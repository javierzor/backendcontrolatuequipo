<?php

namespace App;
// use App\Local;
use Illuminate\Database\Eloquent\Model;

class Promotions extends Model
{
    protected $table = 'promotions';
    protected $fillable = ['id','id_local', 'id_category', 'name', 'description', 'photo','views', 'promotion_qr'];

    public function local()
    {
        return $this->hasMany('App\Local','id', 'id_local');
    }
    public function category()
    {
        return $this->hasMany('App\Local','id', 'id_category');
    }

}
