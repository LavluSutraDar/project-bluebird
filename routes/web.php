<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class,'index'])->name('home');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    
    Route::get('/category/create', [CategoryController::class,'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class,'store'])->name('category.store');
    Route::get('/category', [CategoryController::class,'index'])->name('category.index');
    Route::get('/category/delete/{cat_id}', [CategoryController::class,'delete'])->name('category.delete');
    Route::get('/category/edit/{cat_id}', [CategoryController::class,'edit'])->name('category.edit');
    Route::post('/category/update/{cat_id}', [CategoryController::class,'update'])->name('category.update');
    
    Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
    // Route::post('/product/store', [productController::class,'store'])->name('product.store');
    // Route::get('/product', [productController::class,'index'])->name('product.index');
    // Route::get('/product/delete/{cat_id}', [productController::class,'delete'])->name('product.delete');
    // Route::get('/product/edit/{cat_id}', [productController::class,'edit'])->name('product.edit');
    // Route::post('/product/update/{cat_id}', [productController::class,'update'])->name('product.update');
    
});

