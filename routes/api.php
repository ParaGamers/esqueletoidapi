<?php

use App\Http\Controllers\api\v1\ScoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function(){
    Route::prefix('score')->group(function(){
        Route::get('', [ScoreController::class, 'index']);
    });
});