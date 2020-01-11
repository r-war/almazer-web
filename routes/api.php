<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// user
Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');

Route::post('search', 'UserController@search');

//Route::get('article', 'UserController@article');

// article
Route::get('article', 'ArticleController@article');
Route::post('article/detail', 'ArticleController@detail');

//album
Route::get('album', 'AlbumController@album');
Route::post('album/picture', 'AlbumController@pictures');
Route::post('album/detail', 'AlbumController@detail');


Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'UserController@details');

});
