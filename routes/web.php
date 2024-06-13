<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InventoryController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/inventories', [InventoryController::class, 'index'])->name('inventories.index');
