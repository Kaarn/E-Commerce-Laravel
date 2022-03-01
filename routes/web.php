<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;

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
    return view('index');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/produits', 'index');
    Route::get('/produits/12-iphone-xs', 'show($product');
});

Route::get('/categories/12-smartphone', [CategoryController::class, 'show']);

Route::get('/contact', [ContactController::class, 'index']);