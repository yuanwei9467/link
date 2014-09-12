<?php

class UserController extends Controller {


	public function index()
	{
		return View::make('Admin::User.index');
	}

}