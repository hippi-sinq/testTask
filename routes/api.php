<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
/** Auth */
Route::post('register',     'AuthController@register');
Route::post('login',        'AuthController@login');

/** Posts */
Route::get('posts',      'PostController@index');
Route::get('posts/{id}', 'PostController@show');

Route::group(['middleware' => 'jwt.verify'], function () {
    /** Auth */
    Route::post('logout',   'AuthController@logout');
    Route::get('details',  'AuthController@details');
    /** Posts */
    Route::post('post/create',         'PostController@create');
    Route::put('post/update/{id}',      'PostController@update');
    Route::delete('post/{id}',           'PostController@delete');
    /** Comments */
    Route::post('post/{id}/comment',   'CommentController@create');
});




