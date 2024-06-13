<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;

Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::resource('/products', ProductController::class);
Route::resource('/brands', BrandController::class);