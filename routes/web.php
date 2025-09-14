<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HelloController;

Route::get('/landing', [HelloController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
