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
    // Halaman home
    Route::get('/', 'ProductController@showAllProductInShop')->name('index');

    // Halaman detail product
    Route::get('/product/{product}', 'ProductController@showDetailProductInShop')->name('detail.product');

    // Halaman keranjang belanja
    Route::get('/cart', 'CartController@index')->name('cart');
    Route::post('/cart/{id}', 'CartController@addToCart')->name('add.cart');
    Route::patch('/update-cart', 'CartController@update');
    Route::delete('/remove-from-cart', 'CartController@remove');

    // Halaman Checkout
    Route::view('checkout', 'shop.checkout')->name('checkout');

    // Halaman Order
    Route::resource('order', 'OrderController')->only('store');
});

// Routing Halaman Admin
Route::middleware('auth')->prefix('admin')->group(function () {
    // Halaman Admin Dashboard
    Route::view('/', 'admin.dashboard')->name('index');

    // CRUD Category
    Route::resource('category', 'CategoryController')->except('show');

    // CRUD Product
    Route::resource('product', 'ProductController')->except('show');

    // CRUD Users
    Route::resource('user', 'UserController')->except('show');
});

// Routing untuk login dan register
Auth::routes(['register' => false, 'reset' => false]);
