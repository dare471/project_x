<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExternalUsers\Blog\Category\BlogCategoryController;
use App\Http\Controllers\ExternalUsers\Blog\MyBlog;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/blogs', [MyBlog::class, 'index']); // Получение всех блогов
    Route::get('/blogs/{id}', [MyBlog::class, 'show']); // Получение конкретного блога
    Route::post('/blogs', [MyBlog::class, 'store']); // Создание нового блога
    Route::put('/blogs/{id}', [MyBlog::class, 'update']); // Обновление существующего блога
    Route::delete('/blogs/{id}', [MyBlog::class, 'destroy']); // Удаление блога
    // Маршруты для категорий
    Route::get('/blogs/categories', [BlogCategoryController::class, 'index']);
    Route::get('/blogs/categories/{id}', [BlogCategoryController::class, 'show']);
    Route::post('/blogs/categories', [BlogCategoryController::class, 'store']);
    Route::put('/blogs/categories/{id}', [BlogCategoryController::class, 'update']);
    Route::delete('/blogs/categories/{id}', [BlogCategoryController::class, 'destroy']);
    // BlogAuthor
});
