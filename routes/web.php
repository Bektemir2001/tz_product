<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/failed-jobs', function (){
    dd(\Illuminate\Support\Facades\DB::table('failed_jobs')->get());
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');

    Route::group(['prefix' => 'product'], function (){
        Route::post('/store', [ProductController::class, 'store'])->name('product.store');
        Route::post('/update/{product}', [ProductController::class, 'update'])->name('product.update');
        Route::get('/delete/{product}', [ProductController::class, 'destroy'])->name('product.delete');
    });
});

Route::get('/home', function (){
    return redirect()->route('index');
});
Auth::routes();
