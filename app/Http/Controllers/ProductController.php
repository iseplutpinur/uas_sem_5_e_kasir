<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index', [
            'title' => 'Produk',
            'products' => Product::all()
        ]);
    }

    public function create()
    {
        return view('product.create', [
            'title' => 'Tambah Produk'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'price' => ['required', 'numeric'],
            'name' => ['required'],
            'image' => ['image', 'file', 'max:2048'],
        ], [
            'price.required' => 'Harga tidak boleh kosong.',
            'price.numeric' => 'Harga harus berupa angka.',
            'name.required' => 'Nama tidak boleh kosong.',
            'image.image' => 'File yang diupload harus berupa gambar.',
            'image.file' => 'File yang diupload harus berupa gambar.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.'
        ]);
        if ($request->file('image')) {
            $fileName = 'e-kasir-' . time() . '.' . $request->file('image')->extension();
            Storage::putFileAs('products', $request->file('image'), $fileName);
            $validated['image'] = $fileName;
        }
        Product::create($validated);
        return response()->json(['alert' => 'Data berhasil disimpan!'], 200);
    }
}
