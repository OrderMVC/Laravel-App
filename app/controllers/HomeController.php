<?php

class HomeController extends BaseController {

	public function index()
	{
		$user = $this->getUser();
		$cart = $this->getCart();

		return View::make('index', compact('user', 'cart'));
	}

}