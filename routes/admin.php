<?php

use App\Http\Controllers\Posts\Admin\PostController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware( 'auth', 'admin')->group(function () {
    Route::redirect('/', '/admin/posts')->name('admin');

    Route::get('posts', [PostController::class, 'index'])->name('admin.posts');
    Route::get('posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('admin.posts.show');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('admin.posts.destroy');
    Route::put('posts/{post}/like', [PostController::class, 'like'])->name('admin.posts.like');
});
