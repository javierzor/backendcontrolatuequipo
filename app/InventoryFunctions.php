<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryFunctions extends Model
{
    protected $table = 'function_inventory';
    protected $fillable = ['id', 'function', 'experience_granted', 'point_granted','stacks',
];
}
