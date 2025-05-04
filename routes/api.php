<?php

use App\Http\Controllers\Api\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\UserController;




Route::post('/register', RegisterController::class)->name('register');
Route::post('/login', \App\Http\Controllers\Api\LoginController::class)->name('login');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');

Route::get('level', [LevelController::class, 'index']);
Route::post('level', [LevelController::class, 'store']);
Route::get('level/{level}', [LevelController::class, 'show']);
Route::put('level/{level}', [LevelController::class, 'update']);
Route::delete('level/{level}', [LevelController::class, 'destroy']);


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');