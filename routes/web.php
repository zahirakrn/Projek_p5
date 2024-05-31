<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProdukkController;

use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Supplier;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $produk = Produk::all();
    $kategori = Kategori::all();
    return view('welcome', compact('produk', 'kategori'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tampil/{id}',[ProdukkController::class,'tampilkan']);

Route::get('/home', function () {
    $produk = Produk::all();
    $kategori = Kategori::all();
    $supplier = Supplier::all();
    return view ('home', compact('produk', 'kategori', 'supplier'));
});
  
Route::resource('kategori', KategoriController::class); 
Route::resource('supplier', SupplierController::class);
Route::resource('produk', ProdukController::class);