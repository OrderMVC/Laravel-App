<?php

abstract class Item extends Eloquent
{

	public function orders()
	{
		return $this->morphOne('OrderItem', 'item');
	}
}