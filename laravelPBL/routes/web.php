<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\partiController;

//参加者情報入力画面
Route::get('/A007', [partiController::class, 'A007']);
Route::get('/A008', [partiController::class, 'A008']);
Route::get('/A009', [partiController::class, 'A009']);
Route::get('/A010', [partiController::class, 'A010']);
Route::get('/A011', [partiController::class, 'A011']);
Route::get('/A012', [partiController::class, 'A012']);
Route::get('/A013', [partiController::class, 'A013']);
Route::get('/A014', [partiController::class, 'A014']);