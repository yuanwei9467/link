<?php 
class WebsiteController extends BaseController{
	public function index(){
		$website = new Website();
		$websiteList = $website::all();
		return View::make('Website.index',array('websiteList',$websiteList));
	}

	public function add(){
		$website = new Website();
		
		if(Request::isMethod('post')){
			
			$input = Input::all();	
			$website->url = $input['url'];
			$website->name = $input['name'];
			$website->describe = $input['describe'];
			$website->category_id = $input['category_id'];
			$website->status = 0;
			$website->userid = Session::get('userid');
			$website->audit = 0;
			if($website->save()){
				return Redirect::to('website/index')->with('message', '添加成功');
			}
		}else{
			$websiteCategoryList = $website->getWebsiteCategory();
			return View::make('Website.add',array('websiteCategoryList'=>$websiteCategoryList));
		}
		
	}
}

?>