<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash; 
use App\Helpers\ImageHelper; 

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Menampilkan daftar user
        $users = User::orderBy('created_at', 'DESC')->get();//menampilkan semua data user di database berdasarkan waktu buat lalu diarahkan ke users index
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         // Menampilkan form tambah user baru
         return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validasi input
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed',
        'phone' => 'required|min:10|max:13',
        'address' => 'nullable|string',
        'foto' => 'image|mimes:jpeg,jpg,png,gif|max:1024', // Validasi foto
    ], [
        'foto.image' => 'Format gambar gunakan file dengan ekstensi jpeg, jpg, png, atau gif.',
        'foto.max' => 'Ukuran file gambar maksimal adalah 1024 KB.'
    ]);

    // Simpan data user baru
    $data = $request->only(['name', 'email', 'phone', 'address', 'foto']);//menyimpan data user ke database
    $data['password'] = bcrypt($request->password);

    // Cek jika foto diunggah
    if ($request->hasFile('foto')) {
        $file = $request->file('foto');//menyimpan foto ke $file
        $extension = $file->getClientOriginalExtension();//nama foto berdasarkan upload foto
        $originalFileName = date('YmdHis') . '_' . uniqid() . '.' . $extension;
        $directory = public_path('storage/img-user'); // Pastikan path benar
    
        // Pastikan file berhasil dipindahkan
        if ($file->move($directory, $originalFileName)) {
            // Simpan nama file di database
            $data['foto'] = $originalFileName;
        } else {
            // Menambahkan error jika file tidak berhasil diupload
            return redirect()->back()->with('error', 'Failed to upload photo');
        }
    }
    

    // Simpan user ke database
    User::create($data);

    return redirect()->route('users.index')->with('success', 'Selamat, User Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         // Menampilkan form edit user
         $user = User::findOrFail($id);
         return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
          // Validasi dan update data user
          $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'required|min:10|max:13',
            'address' => 'nullable|string'

        ]);

        
        $user->update($request->only(['name', 'email', 'phone', 'address']));

        return redirect()->route('users.index')->with('success', 'User berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = User::findOrFail($id);

        $product->delete();

        return redirect()->route('users')->with('success', 'Selamat, User Berhasil Di Hapus');
    }
}
