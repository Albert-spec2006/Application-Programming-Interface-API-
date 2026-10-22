<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\AuthController;

// REST API buku: CRUD
Route::apiResource('books', BookController::class);

// Login untuk mendapatkan token
Route::post('/login', [AuthController::class, 'login']);

// Endpoint yang membutuhkan autentikasi
Route::middleware('auth:sanctum')->group(function () {
    // Mendapatkan informasi pengguna yang sedang login
    Route::get('/user', function (Request $request) {
        return response()->json($request->user());
    });

    // Logout
    Route::post('/logout', [AuthController::class, 'logout']);
});