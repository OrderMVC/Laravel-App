<?php

class OrdersController extends BaseController {

	public function create()
	{
		$cart = $this->getCart();
		$user = $this->getUser();

		return View::make('orders.create', compact('cart', 'user'));
	}

}