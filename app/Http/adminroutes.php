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

Route::group(array('middleware'=>'guest'),function(){

		Route::get('admin/login', 'AdminControllers\LoginController@index');
	Route::post('admin/login', 'AdminControllers\LoginController@login_attempt');
});
Route::group(array('middleware'=>array('auth','admin'), 'prefix'=>'admin'),function(){
	
Route::get('dashboard','AdminControllers\DashboardController@index');
Route::get('profile','AdminControllers\UserProfileController@index');
Route::get('products','AdminControllers\ProductController@index');
Route::get('editproduct/{id}','AdminControllers\ProductController@edit');
Route::get('addproduct','AdminControllers\ProductController@show');	
Route::post('addproduct','AdminControllers\ProductController@store');
Route::post('updateproduct/{id}','AdminControllers\ProductController@update');
Route::get('contactus','AdminControllers\MaintenanceController@index');
Route::get('aboutus','AdminControllers\MaintenanceController@show');
Route::post('maintenance','AdminControllers\MaintenanceController@store');
Route::get('company','AdminControllers\MaintenanceController@companyprofile');
Route::get('slider','AdminControllers\MaintenanceController@slider');
Route::post('maintenanceslider','AdminControllers\MaintenanceController@maintenanceslider');
Route::get('slider','AdminControllers\MaintenanceController@slider');
Route::post('changepassword','AdminControllers\MaintenanceController@ChangePassword');
Route::get('package','AdminControllers\PackageController@index');
Route::get('addpackage','AdminControllers\PackageController@create');
Route::post('addpackage','AdminControllers\PackageController@store');
Route::get('editpackage/{id}','AdminControllers\PackageController@show');
Route::post('updatepackage/{id}','AdminControllers\PackageController@update');
});

Route::group(array('middleware'=>'auth'),function(){
	Route::get('/logout', function(){
		Auth::logout();
		return redirect('admin/login');
	});
});