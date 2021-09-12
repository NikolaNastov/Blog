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

Route::get('/', 'HomeController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/all', 'HomeController@getAll');

Route::get('/addPost', 'PostsController@addPost');

Route::post('/addPost','PostsController@submitPost');

Route::get('/view/{id}','PostsController@viewPost');
