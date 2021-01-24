<?php

use App\Http\Controllers\BandMaterialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StyleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/admin');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('product', ProductController::class);
    Route::resource('gender', GenderController::class);
    Route::resource('style', StyleController::class);
    Route::resource('material', MaterialController::class);
    Route::resource('band_material', BandMaterialController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('image', ImageController::class);
    Route::resource('order', OrderController::class);
    Route::resource('order_detail', OrderDetailController::class);
    Route::resource('user', UserController::class);
});

Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
