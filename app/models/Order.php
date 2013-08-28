<?php

class Order extends Eloquent
{
	public $guarded = [];

	public function dates()
	{
		return array('created_at', 'updated_at', 'shipped_at');
	}

	public function address()
	{
		return $this->belongsTo('Address');
	}

	public function getItemsAttribute()
	{
		$id = $this->getKey();

		$builder = $this->newBaseQueryBuilder();

		$items = $builder->from('item_order')
			->where('order_id', $id)
			->get();

		$collection = $this->newCollection();
		$instances = array();

		foreach($items as $item)
		{
			$type = $item->item_type;
			if (!isset($instances[$type])) {
				$instances[$type] = new $type;
			}

			$collection->add($instances[$type]->find($item->item_id));
		}

		return $collection;
	}

	public function getTotalAttribute()
	{
		$items = $this->getItemsAttribute();

		$total = 0;

		foreach ($items as $item) {
			$total += $item->price;
		}

		return $total;
	}
}