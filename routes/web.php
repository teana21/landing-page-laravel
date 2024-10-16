<?php

use Illuminate\Support\Facades\Route;

Route::get(''Welcome, function () {
    return view('');
});
Route::get('/welcome'Welcome, function () {
    return view('welcome');
});

Route::get('/login'login, function () {
    return view('login');
});
