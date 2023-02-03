<?php

use Illuminate\Support\Facades\Route;



Route::resource('/product' , 'ProductController');
Route::get('/home', 'HomeController@index')->name('home');
