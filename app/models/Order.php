<?php

class Order extends Eloquent
{
	public $guarded = [];

	public function dates()
	{
		return array('created_at', 'updated_at', 'shipped_at');
	}

	public function address()
	{
		return $this->belongsTo('Address');
	}
}