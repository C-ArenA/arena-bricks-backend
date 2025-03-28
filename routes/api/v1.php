<?php

use App\Http\Controllers\API\BrickController;
use App\Http\Controllers\API\ProducedBrickController;
use Illuminate\Support\Facades\Route;

Route::apiResource('bricks', BrickController::class);
Route::get('/produced-bricks', [ProducedBrickController::class, 'index']);
Route::post('/produced-bricks', [ProducedBrickController::class, 'store']);
Route::delete('/produced-bricks/{brick}', [ProducedBrickController::class, 'destroy']);
