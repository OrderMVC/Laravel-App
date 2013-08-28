<?php

abstract class Item extends Eloquent
{
	public function getTypeAttribute()
	{
		return str_replace('Item', '', class_basename($this));
	}

	public function orders()
	{
		return $this->morphToMany('Order', 'item', 'item_order')->withPivot('amount');
	}

	public function getTotalPriceAttribute()
	{
		return $this->attributes['price'] * $this->attributes['amount'];
	}
}