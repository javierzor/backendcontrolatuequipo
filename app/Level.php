<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'level';
    // protected $primaryKey;
    protected $fillable = ['id', 'name', 'level', 'necessary_experience','necessary_experience_for_next_level','insignia',
];
}
