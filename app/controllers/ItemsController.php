<?php

class ItemsController extends BaseController {

	public function index()
	{
		$user = $this->getUser();
		$cart = $this->getCart();

		$digitalItems = DigitalItem::all();
		$physicalItems = PhysicalItem::all();
		$items = $digitalItems->merge($physicalItems);

		return View::make('items.index', compact('user', 'cart', 'items'));
	}

}