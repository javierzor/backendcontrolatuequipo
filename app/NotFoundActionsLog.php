<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotFoundActionsLog extends Model
{
    protected $table = 'not_found_actions_log';
    public $timestamps = false;
    protected $fillable = ['id','function_name', 'date', 'stacks',
];
}
