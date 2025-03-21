<?php

use App\Http\Controllers\API\BrickController;
use Illuminate\Support\Facades\Route;

Route::get('/bricks', [BrickController::class, 'index']);
