<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserTestController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::get('user', [UserTestController::class,'index']);
//Route::get('user/{id}', [UserTestController::class,'show']);
//Route::post('user', [UserTestController::class,'store']);
//Route::put('user', [UserTestController::class,'update']);
//Route::delete('user', [UserTestController::class,'delete']);

Route::apiResource('user', UserTestController::class);