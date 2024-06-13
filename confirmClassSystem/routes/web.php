<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\confirmClassController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/confirm-class', [confirmClassController::class, 'showTable']);
Route::get('/confirm-class/search', [confirmClassController::class, 'showTable'])->name('confirm-class.search');
Route::get('/confirm-class/search-program', [confirmClassController::class, 'searchByProgram'])->name('confirm-class.search-program');
Route::get('/confirm-class/search-course', [confirmClassController::class, 'searchByCourse'])->name('confirm-class.search-course');
Route::get('/confirm-class/search-created_at', [confirmClassController::class, 'searchByCreatedAt'])->name('confirm-class.search-created_at');
Route::get('/confirm-class/search-updated_at', [confirmClassController::class, 'searchByUpdatedAt'])->name('confirm-class.search-updated_at');
