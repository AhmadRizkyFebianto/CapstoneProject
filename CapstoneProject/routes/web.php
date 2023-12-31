<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Products;
use GuzzleHttp\Promise\Create;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::controller(ProductsController::class)->group(function(){
    Route::get('/','index')->name('products');
    Route::post('/products', 'store')->name('products.store');
    Route::put('/products/{id}', 'update')->name('products.update');
    Route::delete('/products/delete/{id}', 'destroy')->name('products.delete');
});

