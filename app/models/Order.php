<?php

class Order extends Eloquent
{
	public function address()
	{
		return $this->belongsTo('Address');
	}
}