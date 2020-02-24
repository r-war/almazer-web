<?php

use Illuminate\Http\Request;

use App\Http\Resources\article;
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

/*** user ***/ 
Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::post('search', 'UserController@search');
Route::post('fcm', 'UserController@fcm');
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'UserController@details');

});

//Route::get('article', 'UserController@article');

/*** article ***/
Route::get('article','ArticleController@article');
// Route::get('article', function () 
//     {
//         return new article( \App\Article::orderBy('date')->paginate(5));
//     }
// );
Route::post('article/detail', 'ArticleController@detail');

/*** album ***/
Route::get('album', 'AlbumController@album');
Route::post('album/picture', 'AlbumController@pictures');
Route::post('album/detail', 'AlbumController@detail');


/*** banner ***/
Route::get('banner', 'BannerController@banner');

