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


////// admin routes

////  category
Route::get('admin/category/index','Admin\CategoryController@index','admin.category.index');

Route::get('admin/category/create','Admin\CategoryController@create','admin.category.create');

Route::post('admin/category/store','Admin\CategoryController@store','admin.category.store');

Route::get('admin/category/edit/{id}','Admin\CategoryController@edit','admin.category.edit');

Route::post('admin/category/update/{id}','Admin\CategoryController@update','admin.category.update');

Route::get('admin/category/delete/{id}','Admin\CategoryController@delete','admin.category.delete');

//// post
Route::get('/admin/post/index','Admin\PostController@index','admin.post.index');

Route::get('/admin/post/create','Admin\PostController@create','admin.post.create');

Route::post('/admin/post/store','Admin\PostController@store','admin.post.store');

Route::get('/admin/post/edit/{id}','Admin\PostController@edit','admin.post.edit');

// Route::post('/admin/post/update/{id}','Admin\PostController@update','admin.post.update');
Route::put('/admin/post/update/{id}','Admin\PostController@update','admin.post.update');

Route::get('/admin/post/delete/{id}','Admin\PostController@delete','admin.post.delete');

Route::get('/admin/post/change_status/{id}','Admin\PostController@changeStatus','admin.post.change.Status');


//// ads
Route::get('/admin/ads/index','Admin\AdsController@index','admin.ads.index');

Route::get('/admin/ads/create','Admin\AdsController@create','admin.ads.create');

Route::post('/admin/ads/store','Admin\AdsController@store','admin.ads.store');

Route::get('/admin/ads/edit/{id}','Admin\AdsController@edit','admin.ads.edit');

Route::put('/admin/ads/update/{id}','Admin\AdsController@update','admin.ads.update');

Route::get('/admin/ads/delete/{id}','Admin\AdsController@delete','admin.ads.delete');

Route::get('/admin/ads/change_status/{id}','Admin\AdsController@changeStatus','admin.ads.change.Status');

//// ads gallery
///
Route::get('/admin/ads/gallery/{id}','Admin\AdsController@gallery','admin.ads.gallery');

Route::post('/admin/ads/store-gallery-image/{id}','Admin\AdsController@storeGallery','admin.ads.store.gallery');

Route::get('/admin/ads/delete-gallery-image/{gallery_id}','Admin\AdsController@deleteGallery','admin.ads.delete.gallery');

//Route::get('create', 'UserController@create','userCreate');
//Route::post('store', 'UserController@store','userStore');
//
//Route::get('edit/{id}', 'UserController@edit','userEdit');
//Route::put('update/{id}', 'UserController@update','userUpdate');
//
//Route::delete('user/delete/{id}', 'UserController@delete','userDelete');