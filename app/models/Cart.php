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
				'price' => $item->price,
				'item_id' => $item->id,
				'item_type' => get_class($item),
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
		foreach ($this->items as $cartItem) {
			$cartItem->order()->associate($order);
			$cartItem->save();
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

