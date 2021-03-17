<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	protected $guarded = [];

	public function scopeActiveStatus($query)
	{
		return $query->where('status', 2);
	}

	public function scopeDescending($query)
	{
		return $query->orderBy('id', 'DESC');
	}

	public function scopeLimitFour($query)
	{
		return $query->limit(4);
	}
}
