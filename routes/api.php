<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OrderController;

// File: routes/api.php
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('orders', OrderController::class);
});