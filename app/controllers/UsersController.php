<?php

class UsersController extends BaseController {

	public function create()
	{
		$cart = $this->getCart();
		$user = $this->getUser(true);

		return View::make('users.create', compact('cart', 'user'));
	}

}