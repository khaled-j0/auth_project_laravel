<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route :: get('/products',[ProductController::class, 'showProducts']);
Route :: middleware('guest')->group(function(){
    Route::get('/login', [UserController::class,'showLogin'])->name('login');
    Route::post('/login',[UserController::class,'login']);
    Route::get('/signup', [UserController::class, 'showRegister'])->name('register');
    Route::post('/signup', [UserController::class, 'registration']);
});
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware('auth');


