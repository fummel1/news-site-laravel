<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'StaticController@index')->name('home');
Route::get('/about-us', 'StaticController@about');

Route::get('/article/add', 'ArticlesController@create');
Route::post('/article/add', 'ArticlesController@store');

Route::get('/article/{id}/edit', 'ArticlesController@edit');
Route::put('/article/{id}/edit', 'ArticlesController@update');

Route::get('/article/{id}', 'ArticlesController@show');
Route::delete('/article/{id}/delete', 'ArticlesController@destroy');
//Route::resource('/articles', 'ArticlesController');


 Auth::routes();

Route::get('/user', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
