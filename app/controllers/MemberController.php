<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 14-9-13
 * Time: 下午4:02
 */
class MemberController extends BaseController{
    /**
    *登陆
    */
    public function login(){
        $title = '用户登录';
        return View::make('Member.login',array('title'=>$title));
    }
    /**
    *注册
    */
    public function register(){
        Log::info('This is some useful information.');
    	if(Request::isMethod('post')){
    		 $input = Input::all();
    		 
    		 $validator = Validator::make(
    		 	array(
    		 		'username'	=>	$input['username'],
    		 		'password'	=>	$input['password'],
    		 		 'email'	=>	$input['email']
    		 		),
    		 	array(
    		 		'username'	=> 'required|unique:members',
    		 		 'password' => 'required',
    		 		 'email'	=>  'required|email|unique:members'
    		 		)
    		 );
    		 if($validator->fails()){
    		 	$messages = $validator->messages();
    		 	return View::make('error',array('error'=>$messages));
    		 }

             $member = new Member();
             if($member->insert($input)){
                return 'aaa';
             }else{
                return Response::View('errors',array('msg'=>'注册错误'));
             }	 
    		 
    	}else{
    		$title = '用户注册';
        	return View::make('Member.register',array('title'=>$title));
    	}
        
    }
    public function showerror(){
    	return View::make('error');
    }
    /**
    *个人首页
    */
    public function index(){
        
    }

}