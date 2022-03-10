<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminsController@index')->name('admin.index');
Route::get('/post', 'PostController@show')->name('post');
/* Route::get('/admin', function () {
    return view('admin.index');
}); */
