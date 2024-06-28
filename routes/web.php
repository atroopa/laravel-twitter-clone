<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [App\Http\Controllers\TweetController::class, 'index'])->name('tweets.index');
Route::Post('/tweets', [App\Http\Controllers\TweetController::class, 'store'])->name('tweets.store');
Route::delete('/tweets/{id}', [App\Http\Controllers\TweetController::class, 'destory'])->name('tweets.destory');


require __DIR__.'/auth.php';
