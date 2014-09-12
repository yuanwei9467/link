<?php

class IndexController extends Controller {


	public function index()
	{
		//return View::make('Admin::Public.login');
		return View::make('Admin::Index.index');
	}

}
