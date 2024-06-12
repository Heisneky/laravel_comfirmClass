<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\confirmClassController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/confirm-class', [confirmClassController::class, 'showTable']);
