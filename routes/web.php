<?php

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
    return view('index');
});

Route::get('/produits', [ProductController::class, 'index']);
Route::get('/produits/12-iphone-xs', [ProductController::class, 'show($product)']);

Route::get('/categories/12-smartphone', [CategoryController::class, 'show($category)']);

Route::get('/contact', [ContactController::class, 'index']);