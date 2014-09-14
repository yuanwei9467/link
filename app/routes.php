<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*
Route::get('/', function()
{
	return View::make('hello');
});

 Route::get('users',function()
 {
 	//return View::make('user');
 	$users = User::all();
 	return View::make('user')->with('users',$users);
 });

Route::get('users', 'UserController@getIndex');
 */
Route::get('member/login','MemberController@login');
Route::get('member/register','MemberController@register');


