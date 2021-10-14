<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inserocu extends Model
{
    protected $table = 'promo_reviews';
    protected $fillable = ['id','id_user', 'id_local', 'id_promotions', 'promo_or_local', 'promotions_stars', 'local_starts', 'review_text', 'shared'];
    public $timestamps = false;
    public function promotions()
    {
        return $this->hasMany('App\Promotions','id', 'id_promotions');
    }
    public function user()
    {
        return $this->hasMany('App\User','id', 'id_user');
    }

    public function local()
    {
        return $this->hasMany('App\Local','id', 'id_local');
    }
}
