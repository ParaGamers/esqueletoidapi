<?php

use App\Http\Controllers\api\v1\ScoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function(){
    Route::prefix('score')->group(function(){
        Route::get('all', [ScoreController::class, 'index']);
        Route::get('', [ScoreController::class, 'firstTen']);
        Route::post('', [ScoreController::class, 'store']);
    });
});