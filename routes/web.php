<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.posts');
})->name('posts.index');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login.store');

    Route::get('/register', [AuthController::class, 'showRegister'])->name('auth.register');
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register.store');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

    Route::get('/profile/posts', [PostsController::class, 'showUserPosts'])->name('profile.posts.index');
    Route::get('/profile/posts/create', [PostsController::class, 'showCreatePostForm'])->name('profile.posts.create');
    Route::get('/profile/posts/{post_id}/edit', [PostsController::class, 'showEditPostForm'])->name('profile.posts.edit');

    Route::post('/posts', [PostsController::class, 'createPost'])->name('posts.store');
    Route::patch('/posts/{post_id}', [PostsController::class, 'updatePost'])->name('posts.update');
    Route::delete('/posts/{post_id}', [PostsController::class, 'deletePost'])->name('posts.delete');
});

Route::get('/posts/{post_id}', [PostsController::class, 'showPost'])->name('posts.show');
