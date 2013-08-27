<?php

class Address extends Eloquent
{
	public $guarded = [];

	public function order()
	{
		return $this->hasOne('Oder');
	}
}