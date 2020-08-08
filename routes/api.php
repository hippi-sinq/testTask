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
Route::post('registration', 'AuthController@registration');
Route::post('login', 'AuthController@login');

/** Post */
Route::get('post','PostController@Post');/** Просмотр всех статей(постов) */
Route::get('post/{id}','PostController@PostById');/** Просто статии(поста) по записи(ID) */


Route::group([
    'middleware' => 'jwt.verify'
], function () {
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    /** Posts */
    Route::post('post/create','PostController@PostCreate');
    Route::put('post/{id}','PostController@PostEdit');
    Route::delete('post/{id}','PostController@PostDelete');
    /** Comments */
    Route::post('post/{id}/comment','CommentController@CommentCreate');
});





