<?php


class Index1Controller extends Controller {


	public function index()
	{
		$title = '首页';
		return View::make('Index1.index',array('title'=>$title));
	}

}
