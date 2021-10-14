<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservation';
    protected $fillable = ['id', 'local_id', 'user_id', 'amount_person','status','reservate_date'];
}
