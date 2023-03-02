<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
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
    return view('/front/home');
})->name('home');

Route::get('/', function () {
    return view('/front/home');
})->name('shop');

Route::get('/checkout', function () {
    return view('/front/Cart/checkout');
})->name('checkout');

Route::resource('/cart', 'CartController');
Route::post('/cart/edit/{id}',[CartController::class,'update']);
