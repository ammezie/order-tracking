<?php

namespace tracking;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = ['id'];

    public function comments()
	{
		return $this->hasMany('tracking\Comment');
	}
}