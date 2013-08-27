<?php

class DigitalItemsController extends BaseController {

	protected $digitalItem;

	public function __construct(DigitalItem $digitalItem)
	{
		$this->digitalItem = $digitalItem;
	}

	public function add($id)
	{
		$digitalItem = $this->digitalItem->find($id);

		$this->getCart()->add($digitalItem);

		Session::flash('success', 'Item Added to Cart!');

		return Redirect::route('items.index');
	}

}