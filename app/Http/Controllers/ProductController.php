<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();//menampilkan semua data produk dari database berdasarkan waktu buat lalu diarahkan ke product index

        return view('products.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'product_code' => 'required|string|max:255',
            'description' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',// Validasi foto
        ]);
    
        $data = $request->only(['title', 'description', 'price', 'product_code', 'foto']);

    
        // Proses upload foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');//menyimpan foto ke $file
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();//Nama foto berdasarkan waktu
            $file->storeAs('public/product_photos', $fileName); // Simpan ke storage
            $data['foto'] = $fileName; // Simpan nama file ke database
        }
    
        Product::create($data);
    
        return redirect()->route('products.index')->with('success', 'Selamat Produk Berhasil Di Tambahkan!.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input
    $request->validate([
        'title' => 'required|string|max:255',
        'price' => 'required|numeric',
        'product_code' => 'required|numeric',
        'description' => 'required|string',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Ambil data produk berdasarkan ID
    $product = Product::findOrFail($id);

    // Ambil input untuk di-update
    $data = $request->only(['title', 'description', 'price', 'product_code', 'foto']);

    // Proses upload foto baru
    if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/product_photos', $fileName);

        // Hapus foto lama jika ada
        if ($product->foto) {
            Storage::delete('public/product_photos/' . $product->foto);
        }

        // Simpan nama foto baru ke dalam data update
        $data['foto'] = $fileName;
    }

    // Update data produk
    $product->update($data);

    return redirect()->route('products.index')->with('success', 'Selamat, Produk Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('products')->with('success', 'Selamat, Produk Berhasil Di Hapus');
    }
}
