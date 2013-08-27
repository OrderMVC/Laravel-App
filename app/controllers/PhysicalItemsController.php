<?php

class PhysicalItemsController extends BaseController {

	protected $physicalItem;

	public function __construct(PhysicalItem $physicalItem)
	{
		$this->physicalItem = $physicalItem;
	}

	public function add($id)
	{
		$physicalItem = $this->physicalItem->find($id);

		$this->getCart()->add($physicalItem);

		Session::flash('success', 'Item Added to Cart!');

		return Redirect::route('items.index');
	}

}