<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\resetPasswordController;

Route::get('/', function () {
    return view('Auth.welcome');
});




Route::get('/dashboard', function () {
    return view('profile.dashboard');
});


//postcontroller
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::post('/posts', [PostController::class, 'store']);
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update');
Route::get('/allPosts', [PostController::class, 'index'])->name('post.index');
Route::get('/postConfirm/{id}', [PostController::class, 'confirmDelete'])->name('post.confirmDelete');
Route::delete('/deletePost/{id}', [PostController::class, 'destroy'])->name('post.destroy');


//dashboard controller
Route::get('/dashboard', [dashboardController::class, 'index'])->name('profile.dashboard');

//registercontroller
Route::get('/register', [registerController::class, 'create'])->name('Auth.register');
Route::post('/registerUser', [registerController::class, 'store']);


//logincontroller
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

//logoutController
Route::post('/logout', [LogoutController::class, 'destroy'])->name('logout.destroy')->middleware('auth');

//forgotpassword controller
Route::get('/forgotPassword', [ForgotPasswordController::class, 'create'])->name('forgotPassword');
Route::post('/forgotPassword', [ForgotPasswordController::class, 'store']);

//resetController
Route::get('/resetPassword', [resetPasswordController::class, 'create'])->name('password.reset');
Route::post('resetPassword/{token}', [resetPasswordController::class, 'reset'])->name('password.update');
