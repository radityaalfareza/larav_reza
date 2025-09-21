<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HelloController;

Route::get('/', [HelloController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
