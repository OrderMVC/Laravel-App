<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	public function getUser($createUser = false)
	{
		if (Session::has('user')) {
			return new User(Session::get('user'));
		} elseif ($createUser) {
			return new User();
		}
	}

	public function getCart()
	{
		if (Session::has('cart')) {
			return new Cart(Session::get('cart'));
		} else {
			return new Cart;
		}
	}

}