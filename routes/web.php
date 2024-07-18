<?php

use Illuminate\Support\Facades\Route;
use Http\Controllers\LoginController;
use Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});
