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

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/Barang', function () {
    return view('admin/v_kelola_barang/index_barang');
});

Route::get('/Pesanan', function () {
    return view('admin/v_kelola_pesanan/index_pesanan');
});

Route::get('/Pelanggan', function () {
    return view('admin/v_pelanggan/index_pelanggan');
});

