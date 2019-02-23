<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'myPostsController@index');
Route::get('/posts/{post}', 'myPostsController@show')->where('post', '[0-9]+');
Route::get('/posts/create', 'myPostsController@create');
Route::post('/posts', 'myPostsController@store');
Route::get('/posts/{post}/edit', 'myPostsController@edit');
Route::patch('/posts/{post}', 'myPostsController@update');
Route::delete('/posts/{post}', 'myPostsController@destroy');
