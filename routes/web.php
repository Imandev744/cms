<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PhoneController;


Route::get('/', 'PostController@index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



