<?php

namespace tracking;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];

    public function client()
	{
		return $this->belongsTo('tracking\Client');
	}
}