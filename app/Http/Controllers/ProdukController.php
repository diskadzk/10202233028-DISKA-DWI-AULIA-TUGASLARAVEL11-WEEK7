<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all(); // ambil semua data
        return view('produk.index', compact('produk')); // kirim ke view
    }
}

