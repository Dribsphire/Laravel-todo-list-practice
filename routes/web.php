<?php

use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index']);
Route::post('/add', [TaskController::class, 'store']);
Route::get('/delete/{id}', [TaskController::class, 'destroy']);

//updatee
Route::get('/edit/{id}', [TaskController::class, 'edit']);
Route::post('/update/{id}', [TaskController::class, 'update']);
