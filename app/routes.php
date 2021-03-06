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

Route::pattern('id', '[0-9]+');
Route::get('/', 'Index1Controller@index');
Route::any('member/login','MemberController@login');
Route::any('member/register','MemberController@register');
Route::get('member/error','MemberController@showerror');
Route::get('member/index','MemberController@index');
Route::get('member/profile','MemberController@profile');
Route::get('website/index','WebsiteController@index');
Route::any('website/add','WebsiteController@add');
Route::any('website/edit/{id}','WebsiteController@edit');
Route::get('website/del','WebsiteController@del');


