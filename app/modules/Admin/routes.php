<?php 

Route::get('/admincp', array('before' => 'auth'));
Route::get('admincp/login','PublicController@login');
Route::post('admincp/checklogin','PublicController@checklogin');
Route::get('/admincp/index', 'IndexController@Index');
Route::get('/admincp/User/index', 'UserController@Index');

?>