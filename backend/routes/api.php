<?php

use App\Http\Controllers\ExternalUsers\Blog\MyBlog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/blogs', [MyBlog::class, 'index']); // Получение всех блогов
    Route::get('/blogs/{id}', [MyBlog::class, 'show']); // Получение конкретного блога
    Route::post('/blogs', [MyBlog::class, 'store']); // Создание нового блога
    Route::put('/blogs/{id}', [MyBlog::class, 'update']); // Обновление существующего блога
    Route::delete('/blogs/{id}', [MyBlog::class, 'destroy']); // Удаление блога
});
