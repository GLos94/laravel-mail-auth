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


// previewing mailables in the browser
Route::get('/mailable', function(){

  $user = App\User::inRandomOrder() -> first();
  $post = App\Post::inRandomOrder() -> first();
  $action = 'DELETE';

  return new App\Mail\UserAction($user, $post, $action);


});
