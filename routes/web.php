<?php

use Illuminate\Support\Facades\Route;

  

Route::resource('teachers', TeacherController::class);

Route::get('dashboard','HomeController@dashboard');
Route::get('/dashboard2','HomeController@dashboard2');
Route::get('dashboard3','HomeController@dashboard3');


Route::get('/classes','ClassesController@index');
Route::get('/classes/create','ClassesController@create');
Route::post('/classes/store','ClassesController@store');