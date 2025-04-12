<?php

use System\Router\Web\Route;

// this sample routes
Route::get('/', 'HomeController@index','home');

Route::get('create', 'HomeController@create','userCreate');
Route::post('store', 'HomeController@store','userStore');

Route::get('edit/{id}', 'HomeController@edit','userEdit');
Route::put('/update/{id}', 'HomeController@update','userUpdate');

Route::delete('/delete/{id}', 'HomeController@delete','userDelete');

//Route::get('create', 'UserController@create','userCreate');
//Route::post('store', 'UserController@store','userStore');
//
//Route::get('edit/{id}', 'UserController@edit','userEdit');
//Route::put('update/{id}', 'UserController@update','userUpdate');
//
//Route::delete('user/delete/{id}', 'UserController@delete','userDelete');