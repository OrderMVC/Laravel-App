<?php

class UsersController extends BaseController {

	protected $rules = array(
		'first_name' => 'required',
		'last_name' => 'required',
	);

	public function create()
	{
		$cart = $this->getCart();
		$user = $this->getUser(true);

		return View::make('users.create', compact('cart', 'user'));
	}

	public function store()
	{
		$input = Input::only('first_name', 'last_name');
		$validator = Validator::make($input, $this->rules);

		if ($validator->fails()) {
			Session::flash('error', 'Your User Credentials Were Not Valid.');
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$user = new User($input);

		Session::set('user', $user->toArray());

		return Redirect::route('index');
	}

}