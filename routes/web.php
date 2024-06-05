<?php

use App\Http\Controllers\commentsController;
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
use App\Http\Controllers\welcomeController;

//postcontroller
Route::middleware(['auth'])->group(function () {
    Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/posts', [PostController::class, 'store']);
    Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
    Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update');
    Route::get('/allPosts', [PostController::class, 'index'])->name('post.index');
    Route::get('/postConfirm/{id}', [PostController::class, 'confirmDelete'])->name('post.confirmDelete');
    Route::delete('/deletePost/{id}', [PostController::class, 'destroy'])->name('post.destroy');
});


//dashboard controller
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('profile.dashboard');
    Route::get('/myPosts', [dashboardController::class, 'ownPosts'])->name('profile.ownPosts');
    Route::get('/posts/search', [dashboardController::class, 'search'])->name('posts.search');
    Route::get('myprofile', [dashboardController::class, 'myProfile'])->name('dashboard.myProfile');
});


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
Route::get('/resetPassword/{token}', [resetPasswordController::class, 'create'])->name('password.reset');
Route::post('/updatePassword', [resetPasswordController::class, 'reset'])->name('password.update');


//commentscontroller
Route::post('/comments', [commentsController::class, 'store'])->name('comments.store');


//welcomeController
Route::get('/', [welcomeController::class, 'index'])->name('Auth.welcome');
