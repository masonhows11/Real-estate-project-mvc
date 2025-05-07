<?php

use System\Router\Web\Route;

// this sample routes
Route::get('', 'HomeController@index','home');

//Route::get('create', 'HomeController@create','userCreate');
//Route::post('store', 'HomeController@store','userStore');
//
//Route::get('edit/{id}', 'HomeController@edit','userEdit');
//Route::put('/update/{id}', 'HomeController@update','userUpdate');
//
//Route::delete('/delete/{id}', 'HomeController@delete','userDelete');

// auth routes
Route::get('/login', 'LoginController@login','login');

Route::get('/logout', 'LoginController@login','logout');

// admin routes
Route::get('admin/index', 'Admin\AdminController@index','admin.index');


//// admin routes

//  category
Route::get('admin/category/index','Admin\CategoryController@index','admin.category.index');

Route::get('admin/category/create','Admin\CategoryController@create','admin.category.create');

Route::post('admin/category/store','Admin\CategoryController@store','admin.category.store');

Route::get('admin/category/edit/{id}','Admin\CategoryController@edit','admin.category.edit');

Route::post('admin/category/update/{id}','Admin\CategoryController@update','admin.category.update');

Route::get('admin/category/delete/{id}','Admin\CategoryController@delete','admin.category.delete');

// post
Route::get('/admin/post/index','Admin\PostController@index','admin.post.index');

Route::get('/admin/post/create','Admin\PostController@create','admin.post.create');

Route::post('/admin/post/store','Admin\PostController@store','admin.post.store');

Route::get('/admin/post/edit/{id}','Admin\PostController@edit','admin.post.edit');

Route::post('/admin/post/update/{id}','Admin\PostController@update','admin.post.update');

Route::get('/admin/post/delete/{id}','Admin\PostController@delete','admin.post.delete');

//Route::get('create', 'UserController@create','userCreate');
//Route::post('store', 'UserController@store','userStore');
//
//Route::get('edit/{id}', 'UserController@edit','userEdit');
//Route::put('update/{id}', 'UserController@update','userUpdate');
//
//Route::delete('user/delete/{id}', 'UserController@delete','userDelete');