<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrantedPoints extends Model
{
    protected $table = 'user_granted_points_functions';
    public $timestamps = false;
    // protected $primaryKey;
    protected $fillable = ['id', 'id_user', 'id_points_inventory', 'earned_basic_points', 'earned_gold_points'];
}
