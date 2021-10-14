<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPoints extends Model
{
    protected $table = 'user_points';
    public $timestamps = false;
    protected $fillable = ['id', 'id_user', 'total_basic_points', 'total_gold_points',
];
}
