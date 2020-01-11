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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('users', 'UserController');

Route::resource('gallery', 'GalleryController');

Route::resource('album', 'AlbumController');

Route::resource('album-picture', 'AlbumPictureController');

Route::resource('article', 'ArticleController');

Route::resource('list-users', 'VendorController');

Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

Route::put('change-password', ['middleware'=>'auth', 'uses'=>'UserController@password']);