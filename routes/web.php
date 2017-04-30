<?php

Route::get('/', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts','PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/posts/{post}/edit', 'PostsController@edit');

Route::put('/posts/{post}', 'PostsController@update');

Route::delete('/posts/{post}', 'PostsController@destroy');


Route::get('/posts/{post}/comments', 'CommentsController@fetchComments');

Route::post('/posts/{post}/comments', 'CommentsController@store');


Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');


Route::get('/login', 'SessionsController@create')->name('login');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');
