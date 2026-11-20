<?php

use App\Http\Controllers\SapaController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda2');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama'=> 'Sendy Prayogo',
        'kelas'=> 'TSM-00',
        'nim' => '0123456789',
    ]);
});

Route::get('/latihan', function () {
    $matakuliah = ['Pemrograman Web', 'Basis Data', 'UI/UX'];
    return view('pages.latihan', ['matakuliah' => $matakuliah]);
});

// Route::get('/product', function () {
//     $produk = [
//         ['Mark', 10, 12000],
//         ['Jacob', 19, 19000],
//         ['Larry the Bird', 4, 5000],
//         ['Nitro', 8, 9000000],
//     ];

//     return view('pages.product', ['produk' => $produk]);
// });

Route::view('/contact', 'pages.contact');

Route::get('/sapa', [SapaController::class, 'index']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);
Route::post('/product', [ProductController::class, 'store']);


