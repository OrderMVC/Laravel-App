<?php

class User
{
	public function __construct(array $attributes = array())
	{
		$this->first_name = isset($attributes['first_name']) ? $attributes['first_name'] : null;
		$this->last_name = isset($attributes['last_name']) ? $attributes['last_name'] : null;
	}

	public function save()
	{
		Session::set('user', $this->toArray());
	}

	public function toArray()
	{
		return array(
			'first_name' => $this->first_name,
			'last_name' => $this->last_name,
		);
	}
}