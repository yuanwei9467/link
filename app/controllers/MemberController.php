<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 14-9-13
 * Time: 下午4:02
 */
class MemberController extends BaseController{
    public function login(){
        $title = '用户登录';
        return View::make('Member.login',array('title'=>$title));
    }
    public function register(){
        $title = '用户注册';
        return View::make('Member.register',array('title'=>$title));
    }

}