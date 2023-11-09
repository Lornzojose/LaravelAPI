<?php

use App\Http\Controllers\Service\MainService;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/getAllshape",[MainService::class,"getAllShape"]);
Route::post("/addshape",[MainService::class,"addShape"]);
Route::post("/updateshape",[MainService::class,"updateShape"]);
Route::post("/deleteshape",[MainService::class,"deleteShape"]);
