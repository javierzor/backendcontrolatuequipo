<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 'local';
    protected $fillable = ['id', 'enterprise_id', 'type_local', 'ruc','name','social_reason','description','local_coord','photo'];

    public function promotions()
    {
        return $this->hasMany('Promotions', 'id_local');
    }

    public function local()
	{
		return $this->hasMany(Local::class);
	}

}
