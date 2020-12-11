<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/',[AuthController::class,'auth'])->name('show.login');
Route::post('phoneNumber',[AuthController::class]);
