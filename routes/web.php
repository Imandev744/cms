<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PhoneController;


Route::get('/', 'PostController@showPosts');


Route::group([
    'prefix' => 'auth'
], function () {

    Route::get('/', [AuthController::class, 'showPhoneForm'])->name('show.phoneform');
    Route::post('CheckPhoneNumber', [AuthController::class, 'checkNumber'])->name('check.num');

    Route::get('register/setVerificationCode', [PhoneController::class, 'setVerificationCode'])->name('verify.code');
    Route::post('register/verifymobile', [PhoneController::class, 'verifyMobile'])->name('verify.mobile');

    Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register.user');
    Route::post('register', [RegisterController::class, 'store'])->name('register.user.store');

    Route::get('login', [LoginController::class, 'showLoginPassword']);
    Route::post('register', [LoginController::class, 'checkInfo'])->name('login.user.check');
});












