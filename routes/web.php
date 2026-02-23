<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CacheController;
use App\Http\Controllers\ForgotPasswordController;


Route::get('/clear', [CacheController::class, 'clear'])->name('clear');
Route::get('/', [LoginController::class,'showloginForm'])->name('showlogin');
// Route::get('/', [LoginController::class,'showloginForm'])->name('showlogin')->middleware(['throttle:3,1']);

Route::get('/register', [RegisterController::class,'showRegisterForm'])->name('register');
Route::get('/states', [RegisterController::class,'allState'])->name('all_states');
Route::post('/save_reg', [RegisterController::class,'saveRegister'])->name('save_reg');
Route::post('/loginn', [LoginController::class,'loginn'])->name('loginn')->middleware('throttle:thelogin');


Route::controller(ForgotPasswordController::class)->group(function () {

     Route::get('/forgot-password', 'showForgotForm')->name('forgot.password');
     Route::post('/forgot-password','sendCode')->name('sendCode');
     Route::get('/verify-code', 'showVerifyForm')->name('verify.code');
     Route::post('/verify-code', 'verifyCode')->name('veri_code');
     Route::get('/reset-password','showResetForm')->name('reset.password');
     Route::post('/reset-password', 'resetPassword')->name('resetPassword');
      
});


