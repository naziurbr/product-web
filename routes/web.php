<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::view('/',"home");

Route::get('/product', [ProductController::class, 'index'])->name('product.index');

Route::get('/product/create', [ProductController::class, 'product'])->name('product.create');

Route::post('/product/store',[ProductController::class,'store'])->name('product.store');