<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PhoneController;


Route::get('/', 'PostController@index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/getmobile/{mobile}',[PhoneController::class,'setVerificationCode']);
Route::get('/getmobile/{mobile}/{code}' , [PhoneController::class,'verifyMobile']);
