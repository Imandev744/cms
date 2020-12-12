<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PhoneController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AuthController::class, 'auth'])->name('show.login');
Route::post('phoneNumber', [AuthController::class,'checkNumber'])->name('check.num');

Route::get('register/setVerificationCode',[PhoneController::class,'setVerificationCode'])->name('verify.code');
Route::post('register/verifymobile',[PhoneController::class,'verifyMobile'])->name('verify.mobile');

Route::get('register',[RegisterController::class,'index'])->name('register.user');
Route::post('register',[RegisterController::class,'store'])->name('register.user.store');

