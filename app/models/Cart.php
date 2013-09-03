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
		Session::set('cart', $this);
	}

	public function add($item)
	{
		$found = false;

		foreach ($this->items as $key => $cartItem) {
			if ($cartItem->item == $item) {
				$found = true;
				$cartItem->amount ++;
			}
		}

		if (! $found) {
			$orderItem = new OrderItem(array(
				'amount' => 1,
				'item' => $item,
				'price' => $item->price,
			));
			$this->items[] = $orderItem;
		}

		$this->save();

		return $this;
	}

	public function count()
	{
		$count = 0;

		foreach ($this->items as $item) {
			$count += $item['amount'];
		}

		return $count;
	}

	public function getItems()
	{
		return $this->items;
	}

	public function saveToOrder(Order $order)
	{
		foreach ($this->items as $item) {
			$item['item']->orders()->attach($order, array('amount' => $item['count']));
		}
	}

	public function getTotal()
	{
		$items = $this->getItems();

		$total = 0;

		foreach ($items as $item) {
			$total += $item->price * $item->amount;
		}

		return $total;
	}
}