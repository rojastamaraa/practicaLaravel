<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])->name('products.index');

// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');

// Route::put('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::put('/products/{product}/update', [ProductController::class, 'update'])->name('products.update');

// Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::resource('/products', ProductController::class);