<?php

use System\Router\Api\Route;


Route::get('/', 'HomeController@index','home');

Route::get('create', 'UserController@create','userCreate');
Route::post('store', 'UserController@store','userStore');

Route::get('edit/{id}', 'UserController@edit','userEdit');
Route::put('update/{id}', 'UserController@update','userUpdate');

Route::delete('user/delete/{id}', 'UserController@delete','userDelete');