<?php 
	
class PublicController extends Controller{
	public function login(){
		return View::make('Admin::Public.login');
	}
/**
*验证登陆
*/
	public function checklogin(){
		$input = Input::all();

		$validator = Validator::make(
	    array(
	        'username' => $input['username'],
	        'password' => $input['password'],
	        
	    ),
	    array(
	        'username' => 'required',
	        'password' => 'required',
	    )
		);

		if($validator->fails()){
			$messages = $validator->messages();
		}
		
		
	}
}
?>