<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::view('/home', 'home');

Route::get('/about/{name}', function ($name) {
    echo $name;
    return view('about');
});

Route::get('/User', [UserController::class,'getUser']);
Route::get('/User2/{name}',[UserController::class,'aboutUser']);

Route::get('/login',[UserController::class,'adminLogin']);

