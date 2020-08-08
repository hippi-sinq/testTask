<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
///** Posts */
//Route::get('/post/create', 'PostController@create')->name('create_post');
//Route::post('/post/create', 'PostController@store');
//Route::get('/', 'HomeController@index')->name('home');
//Route::get('/posts', 'PostController@index');
//
//Route::get('/post/{postId}', 'PostController@show')->name('show_post');
//Route::delete('/post/{postId}', 'PostController@destroy')->name('delete_post');
//Route::put('/post/{postId}', 'PostController@edit')->name('edit_post');
//Route::post('/post/{postId}', 'PostController@update')->name('update_post');

