<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('layout.app');
});
Route::prefix('task')->group(function () {
    Route::post('/store', [TaskController::class, 'store'])->name('task_store');
    Route::get('/', [TaskController::class, 'index'])->name('task_index');
    Route::get('/delete/{id}', [TaskController::class, 'delete_task'])->name('task_delete');
    Route::get('/status/{id}', [TaskController::class, 'status_task'])->name('task_status');
    Route::get('/edit/{id}', [TaskController::class, 'edit'])->name('task_edit');
    Route::post('/update/{id}', [TaskController::class, 'update'])->name('task_update');
});
