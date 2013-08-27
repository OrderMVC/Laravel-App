<?php

class Cart extends Illuminate\Support\Collection
{
	public function __construct(array $items = array())
	{
		parent::__construct($items);
		$this->save();
	}

	public function save()
	{
		Session::set('cart', $this->toArray());
	}

	public function add($item)
	{
		$found = false;

		foreach ($this->items as $key => $cartItem) {
			if ($cartItem['item'] == $item) {
				$found = true;
				$this->items[$key]['count'] ++;
			}
		}

		if (! $found) {
			$this->items[] = array(
				'count' => 1,
				'item' => $item
			);
		}

		$this->save();

		return $this;
	}

	public function count()
	{
		$count = 0;

		foreach ($this->items as $item) {
			$count += $item['count'];
		}

		return $count;
	}

	public function getItems()
	{
		$items = array();

		foreach ($this->items as $item) {
			$items[] = $item['item'];
		}

		return $items;
	}
}