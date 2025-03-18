<?php

namespace App\Http\Controllers;

use App\Models\Products;  // Pastikan model Product di-import
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        // Mengambil semua produk dari tabel database
        $products = Products::all();

        // Mengirim data produk ke tampilan
        return view('product', compact('products'));
    }
}
