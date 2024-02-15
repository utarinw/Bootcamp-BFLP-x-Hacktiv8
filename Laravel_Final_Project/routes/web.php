<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoryController;
use App\Http\Controllers\ProdukController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/kategoris', function () {
    return view('kategoris');
})->name('kategoris');

Route::get('/produk', function () {
    return view('produk');
})->name('produk');

Route::get('/pesanan', function () {
    return view('pesanan');
})->name('pesanan');

Route::get('/laporan', function () {
    return view('laporan');
})->name('laporan');

Route::get('/addproduk', function () {
    return view('addproduk');
})->name('addproduk');

// CRUD Produk
Route::group(['prefix' => 'products'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('produk.index');
    Route::get('/create', [ProductController::class, 'create'])->name('produk.create');
    Route::post('/store', [ProductController::class, 'store'])->name('produk.store');
    Route::get('/{product}', [ProductController::class, 'show'])->name('produk.show');
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('produk.edit');
    Route::put('/{product}', [ProductController::class, 'update'])->name('produk.update');
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('produk.destroy');
});

// CRUD Kategori
Route::resource('kategori', KategoriController::class);