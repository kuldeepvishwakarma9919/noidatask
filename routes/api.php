<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LeadApiController;

Route::middleware('api')->group(function () {
    Route::apiResource('leads', LeadApiController::class);
});
