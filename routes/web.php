<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/forgotPassword', function () {
    return view('forgotPassword');
});
Route::get('/resetPassword', function () {
    return view('resetPassword');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
