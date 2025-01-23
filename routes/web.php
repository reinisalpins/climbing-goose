<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.posts');
})->name('posts.index');

Route::get('/post', function () {
    return view('pages.single-post');
})->name('posts.show');

Route::get('/profile/posts/create', function () {
    return view('pages.profile.create-post');
})->name('profile.posts.create');

Route::get('/profile/posts/{post_id}/edit', function () {
    return view('pages.profile.edit-post');
})->name('profile.posts.edit');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login.store');

    Route::get('/register', [AuthController::class, 'showRegister'])->name('auth.register');
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register.store');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

    Route::get('/profile/posts', [PostsController::class, 'showUserPosts'])->name('profile.posts.index');
});
