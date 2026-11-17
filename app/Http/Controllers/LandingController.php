<?php

namespace App\Http\Controllers;

use App\Models\Product;

class LandingController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id')->get();

        return view('welcome', [
            'products' => $products,
            'categories' => $products->pluck('category')->unique()->values(),
            // Ganti dengan nomor WhatsApp admin (format internasional, tanpa + atau 0 di depan)
            'waNumber' => '6281234567890',
            'instagram' => 'noelcraft',
        ]);
    }
}
