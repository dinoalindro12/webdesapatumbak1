<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan galeri
        return view('galeri.index');
    }
    public function create()
    {
        // Logika untuk menampilkan form tambah galeri
        return view('galeri.create');
    }       
    public function store(Request $request)
    {
        // Logika untuk menyimpan galeri
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'slug' => 'required|string|unique:galeri,slug',
            'kategori' => 'required|string|max:255',
        ]);
        // Validasi dan simpan data ke database

        // Redirect atau tampilkan pesan sukses
    }
    public function edit($id)
    {
        // Logika untuk menampilkan form edit galeri
        $galeri = Galeri::findOrFail($id);
        return view('galeri.edit', compact('galeri'));
    }
    public function update(Request $request, $id)
    {
        // Logika untuk memperbarui galeri
        $galeri = Galeri::findOrFail($id);
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'slug' => 'required|string|unique:galeri,slug,' . $galeri->id,
            'kategori' => 'required|string|max:255',
        ]);
        // Validasi dan simpan data ke database

        // Redirect atau tampilkan pesan sukses
    }
    public function destroy($id)
    {
        // Logika untuk menghapus galeri
        $galeri = Galeri::findOrFail($id);
        $galeri->delete();

        // Redirect atau tampilkan pesan sukses
    }
    public function show($slug)
    {
        // Logika untuk menampilkan detail galeri berdasarkan slug
        $galeri = Galeri::where('slug', $slug)->firstOrFail();
        return view('galeri.show', compact('galeri'));
    }

}
