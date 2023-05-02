<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\CategorieController;
use App\Models\Product;
use App\Models\Categorie;

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
    $categories=Categorie::all();
    $products=Product::all();
    return view('/front/home', compact(['products','categories']));
})->name('home');


Route::get('/shop', function () {
    $categories=Categorie::all();
    $products=Product::all();
    return view('/front/shop', compact(['products','categories']));
})->name('shop');


Route::get('/checkout', function () {
    return view('/front/Cart/checkout');
})->name('checkout');

//back
Route::get('/admin/Products', function () {
    return view('back/Products/list');
})->name('productsback');

Route::resource('/cart/', 'CartController');
Route::get('/cart/add/{id}',[CartController::class,'create'])->name('cart.add');
Route::post('/cart/edit/{id}',[CartController::class,'update']);
Route::get('/shoppingGrid', [ProductController::class, 'list'])->name('product.list');

Route::get('product', [ProductController::class, 'create'])->name('product.create');
//Route::get('/listPoduct', [ProductController::class, 'create'])->name('product.create');
Route::post('product', [ProductController::class, 'store'])->name('product.store');
Route::delete('product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/addProduct', function () { return view('addProduct'); });

Route::prefix('admin/products')->middleware(['auth','role:admin'])->group(function () {
    Route::get('/list', [ProductController::class, 'index'])->name('product.index');
    Route::get('/add', [ProductController::class, 'create'])->name('product.create');
    Route::post('/add', [ProductController::class, 'store'])->name('product.store');
});


Route::prefix('admin/fournisseurs')->middleware(['auth','role:admin'])->group(function () {
    Route::get('/list', [FournisseurController::class, 'index'])->name('fournisseur.index');
    Route::get('/add', [FournisseurController::class, 'create'])->name('fournisseur.create');
    Route::post('/add', [FournisseurController::class, 'store'])->name('fournisseur.store');
});

Route::prefix('admin/categories')->middleware(['auth','role:admin'])->group(function () {
    Route::get('/list', [CategorieController::class, 'index'])->name('categorie.index');
    Route::get('/add', [CategorieController::class, 'create'])->name('categorie.create');
    Route::post('/add', [CategorieController::class, 'store'])->name('categorie.store');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/private', function () {
        return 'bonjour admin';

    });
    
});
Route::middleware(['auth','role:client'])->group(function () {
    Route::get('/private/client', function () {
        return 'bonjour client';
    });
});
//Route::resource('products','App\Http\Controllers\ProductController');

require __DIR__.'/auth.php';
