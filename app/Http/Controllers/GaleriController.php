<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index() // Untuk admin
    {
        $galeri = Galeri::latest()->paginate(12);
        return view('components.galeri.show', compact('galeri'));
    }
    public function create()
    {    
        return view('components.galeri.create');
    }       

    public function store(Request $request)
    {
        

        $request->validate([
            'link_video' => 'nullable|string|max:255',
            'keterangan_video' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keterangan_gambar' => 'required|string',
            'tanggal' => 'required|date',
            'kategori' => 'required|string|max:255',
        ]);

        $data = $request->all();
        
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('galeri', 'public');
        }

        $galeri = Galeri::create($data);
        return redirect()->route('galeri.show', $galeri->id)->with('success', 'Konten galeri berhasil ditambahkan!');
    }
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('components.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        

        $galeri = Galeri::findOrFail($id);
        
        $request->validate([
            'link_video' => 'nullable|string|max:255',
            'keterangan_video' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keterangan_gambar' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'kategori' => 'required|string|max:255',
        ]);

        $data = $request->all();
        
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($galeri->gambar) {
                Storage::disk('public')->delete($galeri->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('galeri', 'public');
        }

        $galeri->update($data);
        
        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil diperbarui!');
    }

    public function destroy($id)
    {
        

        $galeri = Galeri::findOrFail($id);
        
        // Hapus file gambar jika ada
        if ($galeri->gambar) {
            Storage::disk('public')->delete($galeri->gambar);
        }
        
        $galeri->delete();

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil dihapus!');
    }

    public function show($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('components.galeri.show', compact('galeri'));
    }
    public function indexUser() // Untuk user
    {
        $galeri = Galeri::latest()->where('is_public', true)->paginate(12);
        return view('galeri.index', compact('galeri'));
    }

    
}
