<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingController;

Route::get('/landing', [LandingController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
