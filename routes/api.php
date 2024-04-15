<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RefreshTokenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->prefix('auth')->group(function () {
    Route::post('login', [LoginController::class, '__invoke']);
    Route::middleware('auth:api')->group(function () {
        Route::post('logout', [LogoutController::class, '__invoke']);
        Route::post('refresh', [RefreshTokenController::class, '__invoke']);
    });
});
