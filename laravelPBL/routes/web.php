<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PBLController;

Route::get('/pbl', [PBLoController::class, 'index']);