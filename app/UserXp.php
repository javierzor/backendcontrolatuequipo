<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserXp extends Model
{
    protected $table = 'user_experience';
    // protected $primaryKey;
    protected $fillable = ['id', 'id_user', 'id_level', 'total_experience'];
}
