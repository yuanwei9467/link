<?php 
class WebsiteController extends BaseController{
	public function index(){
		return View::make('Website.index');
	}

	public function add(){
		if(Request::isMethod('post')){
			$input = Input::all();
			$website = new Website();
			$website->url = $input['url'];
			$website->name = $input['name'];
			$website->describe = $input['describe'];
			$website->category_id = $input['category_id'];
			$website->status = 1;
			$website->userid = Session::get('userid');
			$website->audit = 0;

		}else{
			return View::make('Website.add');
		}
		
	}
}

?>