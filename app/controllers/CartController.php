<?php

class CartController extends BaseController
{
	public function index()
	{
		var_dump($this->getCart());
	}

	public function destroy()
	{
		Session::forget('cart');
		$cart = new Cart;

		return Session::get('cart');
	}
}