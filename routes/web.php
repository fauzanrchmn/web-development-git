<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// product
// Route::resource('product', ProductController::class);

Route::get('product', [ProductController::class, 'index'])->name('product.index');
Route::get('product/show/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('product/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

