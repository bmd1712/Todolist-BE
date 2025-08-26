<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

//todo
Route::get('/todos', [TodoController::class, 'index']);        // Lấy danh sách todo
Route::post('/todos', [TodoController::class, 'store']);       // Thêm mới
Route::get('/todos/{id}', [TodoController::class, 'show']);    // Xem chi tiết
Route::put('/todos/{id}', [TodoController::class, 'update']);  // Cập nhật
Route::delete('/todos/{id}', [TodoController::class, 'destroy']); // Xóa