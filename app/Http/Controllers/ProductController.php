<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Product;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(request $request)
    { $request->validate([
            'nama' => 'required|string|min:3',
            'deskripsi' => 'required|string|min:3',
            'harga' => 'required|integer',
            'stock' => 'required|integer',
        ]);

        product::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stock' => $request->stock,
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil dibuat.');
    }

    


}
