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

Route::group(['prefix' => 'admin'], function () {

    // Halaman Admin Dashboard
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('index');

    // CRUD Category
    Route::resource('category', 'CategoryController')->except('show');
});
