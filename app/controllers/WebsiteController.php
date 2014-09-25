<?php 
class WebsiteController extends BaseController{
	public function index(){
		return View::make('Website.index');
	}

	public function add(){
		return View::make('Website.add');
	}
}

?>