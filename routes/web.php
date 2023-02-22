<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/shoppingGrid', [ProductController::class, 'list'])->name('product.list');
Route::get('/shoppingCart', [ProductController::class, 'index'])->name('product.index');

//Route::post('/createProduct','App\Http\Controllers\ProductController@store');
Route::get('product', [ProductController::class, 'create'])->name('product.create');
//Route::get('/listPoduct', [ProductController::class, 'create'])->name('product.create');
Route::post('product', [ProductController::class, 'store'])->name('product.store');
Route::delete('product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/addProduct', function () {
    return view('addProduct');
});
//Route::resource('products','App\Http\Controllers\ProductController');


