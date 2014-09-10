<?php 
Route::group(array('before' => 'auth'), function()
{
	Route::get('admin','IndexController@Index');
});
Route::get('admin/login','PublicController@login');
Route::post('admin/checklogin','PublicController@checklogin');

?>