<?php

class CartController extends BaseController
{
	public function index()
	{
		$cart = $this->getCart();
		$user = $this->getUser();

		return View::make('cart.index', compact('cart', 'user'));
	}

	public function destroy()
	{
		Session::forget('cart');
		$cart = new Cart;

		return Redirect::back();
	}
}