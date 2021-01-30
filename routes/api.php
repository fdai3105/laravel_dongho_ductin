<?php

use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\API\CartController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\GenderController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\Api\StyleController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\BandMaterialController;
use App\Http\Controllers\API\MaterialController;
use App\Models\User;
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
    Route::get('user-address', [UserController::class, 'getUserAddress']);
    Route::post('add-address', [UserController::class, 'addAddress']);
    Route::post('add-to-cart', [CartController::class, 'addToCart']);
    Route::get('get-carts', [CartController::class, 'getCarts']);
    Route::post('checkout', [CartController::class, 'checkout']);
    Route::apiResource('order', OrderController::class);
});

Route::group([], function () {
    Route::apiResource('brand', BrandController::class);
    Route::get('brand/product/{name}', [BrandController::class, 'getProduct']);

    Route::apiResource('category', CategoryController::class);
    Route::get('category/product/{name}', [CategoryController::class, 'getProduct']);

    Route::apiResource('product', ProductController::class);
    Route::get('product/by-name/{name}', [ProductController::class, 'showByName']);
    Route::get('hot-product', [ProductController::class, 'getHotProduct']);

    Route::apiResource('style', StyleController::class);
    Route::apiResource('gender', GenderController::class);
    Route::apiResource('material', MaterialController::class);
    Route::apiResource('band_material', BandMaterialController::class);

    Route::post('remove-cart', [CartController::class, 'removeCart']);
});
