<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qr extends Model
{
    protected $table = 'users';
    // protected $primaryKey;
    protected $fillable = ['name', 'last_name', 'email', 'phone','qr_token'];
}
