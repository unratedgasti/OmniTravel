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




Route::get('gallery','FrontControllers\GalleryController@index');
Route::get('packages','FrontControllers\PackageController@index');
Route::get('contactus','FrontControllers\ContactController@index');
Route::get('/','FrontControllers\HomeController@index');



