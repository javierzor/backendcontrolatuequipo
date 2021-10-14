<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Xp extends Model
{
    protected $table = 'user_granted_experience_functions';
    // const UPDATED_AT = null;
    // public $timestamps = false;
    // protected $primaryKey;
    protected $fillable = ['id', 'id_user', 'id_experience_inventory', 'earned_experience'];
}
