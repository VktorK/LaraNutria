<?php

use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::apiResource('orders', OrderController::class);
Route::apiResource('profiles', \App\Http\Controllers\ProfileController::class);
Route::apiResource('promocodes', \App\Http\Controllers\PromocodeController::class);
Route::apiResource('services', \App\Http\Controllers\ServiceController::class);
Route::apiResource('transactions', \App\Http\Controllers\TransactionController::class);
Route::apiResource('users', \App\Http\Controllers\UserController::class);
Route::apiResource('genders', \App\Http\Controllers\GenderController::class);
Route::apiResource('categories', \App\Http\Controllers\CategoryController::class);
Route::apiResource('softs', \App\Http\Controllers\StatusOfTransactionController::class);
