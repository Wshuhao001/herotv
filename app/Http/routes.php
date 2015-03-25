<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Home\IndexController@index');



Route::Group(['namespace'=>'Admin','prefix' => 'admin'],function(){
	//登陆地址
	Route::get('login','LoginController@Login');
	//登陆地址进来之后post
	Route::post('login','LoginController@PostLogin');
	//退出的uri
	Route::get('logout','LoginController@logout');
	
});

Route::Group(['namespace'=>'Admin','prefix' => 'admin','middleware' => 'isadmin'],function(){
	//登陆地址
	Route::get('index','IndexController@index');
	
	//users 管理资源uri
	Route::resource('users','user\UsersController');
	
	//auth权限管理 管理资源uri
	Route::resource('auth','Auth\AuthController');
	
	//auth权限管理 管理资源uri
	Route::resource('group','Auth\GroupController');
	
	//admins 管理资源uri
	Route::resource('admins','user\AdminController');
	
	//system 系统管理uri
	Route::resource('system','system\SystemController');
});