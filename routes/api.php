<?php

use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\API\CartController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('user', [UserController::class, 'getUser']);
    Route::post('checkout', [CartController::class, 'checkout']);
    Route::apiResource('order', OrderController::class);
});

Route::group([], function () {
    Route::apiResource('brand', BrandController::class);
    Route::apiResource('category', CategoryController::class);
    Route::apiResource('product', ProductController::class);
});
