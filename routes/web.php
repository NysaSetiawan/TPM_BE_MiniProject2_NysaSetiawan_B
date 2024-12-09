<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product',action: [ProductController::class,'index'])->name('product.index');
Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
Route::post('/product',action: [ProductController::class,'store'])->name('product.store');
Route::get('/product/{product}/edit',action: [ProductController::class,'edit'])->name('product.edit');
Route::put('/product/{product}/update',action: [ProductController::class,'update'])->name('product.update');
Route::delete('/product/{product}/destroy',action: [ProductController::class,'destroy'])->name('product.destroy');

Route::get('/sesi',[SessionController::class,'index']);
Route::post('/sesi/login',[SessionController::class,'login']);