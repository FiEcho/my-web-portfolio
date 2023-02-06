<?php

use Illuminate\Support\Facades\Route;



Route::resource('/product' , 'ProductController');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/profile','ProfileController');

Auth::routes();
