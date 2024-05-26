<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\PostController;
use App\Models\Post;
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
Route::get('/posts/create', function () {
    return view('post.create');
});
//postcontroller
Route::post('/posts', [PostController::class, 'store']);
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update');
Route::get('/allPosts', [PostController::class, 'index'])->name('post.index');
Route::get('/postConfirm/{id}', [PostController::class, 'confirmDelete'])->name('post.confirmDelete');
Route::delete('/deletePost/{id}', [PostController::class, 'destroy'])->name('post.destroy');


//dashboard controller
Route::get('/dashboard', [dashboardController::class, 'index'])->name('profile.dashboard');
