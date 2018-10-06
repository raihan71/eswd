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


Route::group(['prefix' => 'api'],function(){
	Route::get('get-buku','API\PerpustakaanController@getBuku')->name('api.get.buku');
	Route::get('get-buku-detail','API\PerpustakaanController@getBukuDetail')->name('api.get.buku.detail');
	Route::get('store-buku','API\PerpustakaanController@storeBuku')->name('api.store.buku');
	Route::get('store-pinjam','API\PerpustakaanController@storePinjam')->name('api.store.pinjam');
	Route::get('ichsan','API\PerpustakaanController@getBuku');
	Route::get('data-judul-buku','API\PerpustakaanController@getJudulBuku');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
