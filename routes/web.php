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

Route::get('/','API\PerpustakaanController@index')->name('user.perpustakaan');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Group User
Route::group(['middleware' => ['auth'], 'prefix' => 'user'],function(){
	Route::get('articles','User\ArticlesController@index')->name('user.articles');
	Route::get('tutorial','User\TutorialController@index')->name('user.tutorial');
});

Route::group(['prefix' => 'api'], function(){
	Route::get('articles','API\ArticlesController@index')->name('api.articles');
	Route::post('article/store','API\ArticlesController@store')->name('api.articles.store');
});