<?php


Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('register', 'UsersController@create')->name('register');
Route::resource('users', 'UsersController');