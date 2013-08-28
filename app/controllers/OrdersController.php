<?php

class OrdersController extends BaseController {

	protected $addressRules = array(
		'street' => 'required',
		'city' => 'required',
		'state' => 'required',
		'zip' => 'required',
	);

	public function index()
	{
		$cart = $this->getCart();
		$user = $this->getUser();
		$orders = Order::with('address')->get();

		return View::make('orders.index', compact('cart', 'user', 'orders'));
	}

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

		$address = Address::create($input);
		$cart = $this->getCart();

		$user = $this->getUser();

		$attributes = $user->toArray();
		$attributes['shipped_at'] = new Carbon\Carbon;

		$order = Order::create($attributes);
		$order->address()->associate($address)->save();
		$cart->saveToOrder($order);
		new Cart;

		Session::flash('success', 'Successfully Submitted Order');
		return Redirect::route('orders.index');
	}

	public function show($id)
	{
		$cart = $this->getCart();
		$user = $this->getUser();
		$order = Order::find($id);

		return View::make('orders.show', compact('cart', 'user', 'order'));
	}

}