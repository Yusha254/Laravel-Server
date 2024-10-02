<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;

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

//Protected GET Customers Route
Route::middleware('auth:api')->group(function () {
    Route::get('/customers', [CustomerController::class, 'index']);
});
//Products Route
Route::get('/products', [ProductController::class, 'index']);
//Login Route
Route::post('/login', [AuthController::class, 'login']);
//Register Route
Route::post('/register', [AuthController::class, 'register']);