<?php

use System\Router\Web\Route;


// Route::get('/home', 'HomeController@index', 'home');
// Route::get('/', 'HomeController@index', 'home.index');

Route::get('/', 'HomeController@index', 'home.index');
Route::get('/home', 'HomeController@index', 'home.home');

// admin routes
Route::get('/admin/index', 'Admin\AdminController@index', 'admin.index');

// admin routes //

////  category
Route::get('admin/category/index', 'Admin\CategoryController@index', 'admin.category.index');

Route::get('admin/category/create', 'Admin\CategoryController@create', 'admin.category.create');

Route::post('admin/category/store', 'Admin\CategoryController@store', 'admin.category.store');

Route::get('admin/category/edit/{id}', 'Admin\CategoryController@edit', 'admin.category.edit');

Route::post('admin/category/update/{id}', 'Admin\CategoryController@update', 'admin.category.update');

Route::get('admin/category/delete/{id}', 'Admin\CategoryController@delete', 'admin.category.delete');

//// post
Route::get('/admin/post/index', 'Admin\PostController@index', 'admin.post.index');

Route::get('/admin/post/create', 'Admin\PostController@create', 'admin.post.create');

Route::post('/admin/post/store', 'Admin\PostController@store', 'admin.post.store');

Route::get('/admin/post/edit/{id}', 'Admin\PostController@edit', 'admin.post.edit');

// Route::post('/admin/post/update/{id}','Admin\PostController@update','admin.post.update');
Route::put('/admin/post/update/{id}', 'Admin\PostController@update', 'admin.post.update');

Route::get('/admin/post/delete/{id}', 'Admin\PostController@delete', 'admin.post.delete');

Route::get('/admin/post/change_status/{id}', 'Admin\PostController@changeStatus', 'admin.post.change.Status');


//// ads
Route::get('/admin/ads/index', 'Admin\AdsController@index', 'admin.ads.index');

Route::get('/admin/ads/create', 'Admin\AdsController@create', 'admin.ads.create');

Route::post('/admin/ads/store', 'Admin\AdsController@store', 'admin.ads.store');

Route::get('/admin/ads/edit/{id}', 'Admin\AdsController@edit', 'admin.ads.edit');

Route::put('/admin/ads/update/{id}', 'Admin\AdsController@update', 'admin.ads.update');

Route::get('/admin/ads/delete/{id}', 'Admin\AdsController@delete', 'admin.ads.delete');

Route::get('/admin/ads/change_status/{id}', 'Admin\AdsController@changeStatus', 'admin.ads.change.Status');

//// ads gallery
Route::get('/admin/ads/gallery/{id}', 'Admin\AdsController@gallery', 'admin.ads.gallery');

Route::post('/admin/ads/store-gallery-image/{id}', 'Admin\AdsController@storeGallery', 'admin.ads.store.gallery');

Route::get('/admin/ads/delete-gallery-image/{gallery_id}', 'Admin\AdsController@deleteGallery', 'admin.ads.delete.gallery');

/// slider
Route::get('/admin/slider/index', 'Admin\SliderController@index', 'admin.slider.index');

Route::get('/admin/slider/create', 'Admin\SliderController@create', 'admin.slider.create');

Route::post('/admin/slider/store', 'Admin\SliderController@store', 'admin.slider.store');

Route::get('/admin/slider/edit/{id}', 'Admin\SliderController@edit', 'admin.slider.edit');

Route::put('/admin/slider/update/{id}', 'Admin\SliderController@update', 'admin.slider.update');

Route::get('/admin/slider/delete/{id}', 'Admin\SliderController@delete', 'admin.slider.delete');

/// comments
///
// Route::get('/admin/comments/changeStatus/{id}', 'Admin\CommentController@changeStatus', 'admin.comments.changeStatus');
Route::get('/admin/comments/index', 'Admin\CommentController@index', 'admin.comments.index');

Route::get('/admin/comments/show/{id}', 'Admin\CommentController@show', 'admin.comments.show');

Route::get('/admin/comments/approved/{id}', 'Admin\CommentController@approved', 'admin.comments.approved');

Route::post('/admin/comments/answer/{id}', 'Admin\CommentController@answer', 'admin.comments.answer');

/// user
Route::get('/admin/users/index', 'Admin\UserController@index', 'admin.users.index');

Route::get('/admin/users/edit/{id}', 'Admin\UserController@edit', 'admin.users.edit');

Route::put('/admin/users/update/{id}', 'Admin\UserController@update', 'admin.users.update');

Route::get('/admin/users/change_status/{id}', 'Admin\UserController@changeStatus', 'admin.users.changeStatus');

//// auth routes
Route::get('/register_form', 'Auth\AuthController@registerForm', 'auth.register.form');
Route::post('/register', 'Auth\AuthController@register', 'auth.register');


Route::get('/login_form', 'Auth\AuthController@loginForm', 'auth.login.form');
Route::post('/login', 'Auth\AuthController@login', 'auth.login');


Route::get('/logout', 'Auth\AuthController@logout', 'auth.logout');
Route::get('/auth/activation/{token}','Auth\AuthController@activation','auth.activation');


Route::get('/forgot_view', 'Auth\ForgotPasswordController@forgotView', 'auth.forgot.view');
Route::post('/auth_forgot', 'Auth\ForgotPasswordController@forgotPassword', 'auth.forgot');

Route::get('/reset_password_view/{token}', 'Auth\ResetPasswordController@resetPasswordView', 'auth.reset_password.view');
Route::post('/reset_password/{token}', 'Auth\ResetPasswordController@resetPassword', 'auth.reset_password');


// front routes

Route::get('/about','HomeController@about','about_us');
Route::get('/contact','HomeController@contact','contact_us');
Route::get('/ads/{id}','HomeController@ads','ads');
Route::get('/ads_list','HomeController@ads_list','ads_list');
Route::get('/posts','HomeController@all_post','posts');
Route::get('/post/{id}','HomeController@post','post');
Route::post('/add/commet/{id}','Home@addComment','add_comment');