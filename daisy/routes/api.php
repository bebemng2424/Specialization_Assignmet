<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaisyController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('daises',[DaisyController::class,'index']);
Route::get('daises/{id}',[DaisyController::class,'show']);
Route::post('daises',[DaisyController::class,'store']);
Route::put('daises/{id}',[DaisyController::class,'update']);
Route::delete('daises/{id}',[DaisyController::class,'destroy']);

// Route::apiResource ('daisy',DaisyController::class);
