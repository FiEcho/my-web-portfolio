<?php

use Illuminate\Support\Facades\Route;

Route::get('/l', 'LoginController@index')->name('login')->middleware('guest');
Route::post('/le', 'LoginController@login')->name('login.proses')->middleware('guest');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::resource('/product' , 'ProductController');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/profile','ProfileController');
Route::resource('/MySkill','SkillController');

Auth::routes();
