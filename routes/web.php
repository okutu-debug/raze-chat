<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class,'index'])->name('dashboard');
Route::get('/posts/{id}', [PostController::class,'show'])->name('posts.show');
Route::post('/posts', [PostController::class,'store'])->name('posts.store');
Route::post('/posts/{post}/comments', [CommentController::class,'store'])->name('posts.comments.store');

Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register', [AuthController::class,'store']);

Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'validate']);

Route::post('/logout', [AuthController::class,'logout'])->name('logout');

