<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::group(['prefix' => 'product'], function (){
   Route::post('/store', [ProductController::class, 'store'])->name('product.store');
});
