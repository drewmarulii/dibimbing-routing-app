<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

// TESTING ROUTE
// GET — Ambil data
Route::get('/produk', function () {
    return 'Daftar semua produk';
});

// POST — Simpan data baru
Route::post('/produk', function () {
    return 'Simpan produk baru';
});

// PUT — Update keseluruhan
Route::put('/produk/{id}', function ($id) {
    return 'Update produk ID: ' . $id;
});

// DELETE — Hapus
Route::delete('/produk/{id}', function ($id) {
    return 'Hapus produk ID: ' . $id;
});

// ROUTE DASAR 
// ROUTE : MEMANGGIL LOGIC [CONTROLLER] - TAPI LOGIC TIDAK BOLEH ADA DI ROUTE

// ROUTE TANPA PARAMETER
Route::get('/halo', function() {
    // return 'Halo Dibimbing!';
    return "<h1>HDFA</h1>";
});

// ROUTE DENGAN PARAMETER
Route::get('/halo/{name}', function ($name) {
    return 'Halo Dibimbing '.$name;
});

// ROUTE KE CONTROLLER (BEST PRACTICE)
// Route::get('/products', [ProductController::class, 'index']);

// NAMED ROUTE
// Route::get('/products', [ProductController::class, 'index'])->name('product.index');

// GROUP ROUTE
// Route::prefix('/products')
//     ->group(function () {
//         Route::get('/index', [ProductController::class, 'index']);
//         Route::get('/show/{id}', [ProductController::class, 'show']);
//         Route::post('/store', [ProductController::class, 'store']); 
//         Route::get('/store-page', function () {
//             return view('products.store');
//         });
//     });

// EXPLANATION WITH PRODUCT CASE
// SHOW ALL
Route::get('/products', [ProductController::class, 'index']);

// SHOW BY ID
Route::get('/products/id/{id}', [ProductController::class, 'show']);

// SHOW HTML FORM
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products/store', [ProductController::class, 'store']);