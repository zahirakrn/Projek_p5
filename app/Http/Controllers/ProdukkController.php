<?php

namespace App\Http\Controllers;
use App\Models\Produk;

use Illuminate\Http\Request;

class ProdukkController extends Controller
{
    public function tampilkan($id){
        $produk = Produk::findOrFail($id);

    return view('tampil', compact('produk'));
    }
}
