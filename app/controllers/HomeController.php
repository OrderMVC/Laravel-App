<?php

class HomeController extends BaseController {

	public function index()
	{
		$user = $this->getUser();

		return View::make('index', compact('user'));
	}

}