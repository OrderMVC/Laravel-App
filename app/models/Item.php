<?php

abstract class Item extends Eloquent
{
	public function getTypeAttribute()
	{
		return str_replace('Item', '', class_basename($this));
	}

	public function orderItem()
	{
		return $this->morphOne('OrderItem', 'item');
	}
}