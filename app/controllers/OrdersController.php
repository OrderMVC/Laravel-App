<?php

class OrdersController extends BaseController {

	protected $addressRules = array(
		'street' => 'required',
		'city' => 'required',
		'state' => 'required',
		'zip' => 'required',
	);

	public function create()
	{
		$cart = $this->getCart();
		$user = $this->getUser();
		$order = new Order();
		$order->address = new Address();

		return View::make('orders.create', compact('cart', 'user', 'order'));
	}

	public function store()
	{
		$input = Input::get('address');
		$addressValidator = Validator::make($input, $this->addressRules);

		if($addressValidator->fails()) {
			Session::flash('error', 'Fill in a Valid Address.');
			return Redirect::back()->withInput()->withErrors($addressValidator);
		}

		// $address = Address::create($input);
		$items = $this->getCart()->getItems();
		return $items;
	}

}