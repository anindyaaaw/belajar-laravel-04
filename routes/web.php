<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SapaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


Route::get('/sapa', [SapaController::class, 'index']);

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama'  => 'Sendy Prayogo',
        'kelas' => 'TSM-00',
        'nim'   => '0123456789',
    ]);
});

Route::get('/latihan', function () {
    $produk = [
        ['Sepatu Sneaker', 15, 250000],
        ['Jaket Denim', 8, 350000],
        ['Kaos Polos', 20, 75000],
    ];
    $matakuliah = ['Pemrograman Web', 'Basis Data', 'UI/UX'];
    return view('pages.latihan', [
        'produk' => $produk,
        'matakuliah' => $matakuliah,
    ]);
});

Route::view('/contact', 'pages.contact');

// Route Product
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);
Route::post('/product', [ProductController::class, 'store']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
Route::put('/product/{id}', [ProductController::class, 'update']);
Route::delete('/product/{id}', [ProductController::class, 'destroy']);
Route::resource('/category', CategoryController::class);