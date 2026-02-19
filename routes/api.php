<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/loans', [App\Http\Controllers\LoanController::class, 'store']);
Route::get('/books/{id}', [App\Http\Controllers\BookController::class, 'show']);