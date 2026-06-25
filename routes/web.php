<?php

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

Route::get('/login',[loginController::class, 'viewLogin'])->name('login');
Route::post('/login_login',[loginController::class, 'login'])->name('login.login');
Route::post('/login_signup',[loginController::class, 'sigUp'])->name('login.signup');
