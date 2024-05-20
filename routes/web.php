<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Auth.welcome');
});
Route::get('/register', function () {
    return view('Auth.register');
});
Route::get('/login', function () {
    return view('Auth.login');
});
Route::get('/forgotPassword', function () {
    return view('Auth.forgotPassword');
});
Route::get('/resetPassword', function () {
    return view('Auth.resetPassword');
});
Route::get('/dashboard', function () {
    return view('profile.dashboard');
});
