<?php

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

Route::name('shop.')->group(function () {

    Route::get('/', function () {
        return view('shop.home');
    })->name('index');

    Route::get('/cart', function () {
        return view('shop.cart');
    })->name('cart');

    Route::get('/product', function () {
        return view('shop.product');
    })->name('product');

    Route::get('/checkout', function () {
        return view('shop.checkout');
    })->name('checkout');
});

// Routing Halaman Admin
Route::middleware('auth')->prefix('admin')->group(function () {
    // Halaman Admin Dashboard
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('index');

    // CRUD Category
    Route::resource('category', 'CategoryController')->except('show');

    // CRUD Product
    Route::resource('product', 'ProductController')->except('show');
});

// Routing untuk login dan register
Auth::routes(['reset' => false]);
