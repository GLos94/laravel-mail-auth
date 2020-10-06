<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', 'GuestController@index') -> name('post.index');

Route::get('/delete/{id}', 'LoggedController@delete') -> name('post.delete');

Route::get('/create', 'LoggedController@create') -> name('post.create');
Route::post('/store', 'LoggedController@store') -> name('post.store');


Route::get('/edit/{id}', 'LoggedController@edit') -> name('post.edit');
Route::post('/update/{id}', 'LoggedController@update') -> name('post.update');

Route::get('/show/{id}', 'GuestController@show') -> name('post.show');
