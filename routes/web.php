<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::middleware('auth')->group(function () {
    Route::get('/', HomeController::class);
    Route::get('/chat/{user:username}', [ChatController::class, 'show'])->name('chats.show');
});

require __DIR__ . '/auth.php';
