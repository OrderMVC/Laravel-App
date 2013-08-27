<?php

class Address extends Eloquent
{
	public function order()
	{
		return $this->hasOne('Oder');
	}
}