<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    // For admin
    public function index()
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
        $validated = $request->validate([ // Added missing field
            'link_video' => 'nullable|string|max:255',
            'keterangan_video' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keterangan_gambar' => 'required|string',
            'tanggal' => 'required|date',
        ]);
        
        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('galeri', 'public');
        }

        Galeri::create($validated);
        return redirect()->route('galeri.show')->with('success', 'Konten galeri berhasil ditambahkan!');
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
        ]);

        $data = $request->all();
        
        if ($request->hasFile('gambar')) {
            // Delete old image if exists
            if ($galeri->gambar) {
                Storage::disk('public')->delete($galeri->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('galeri', 'public');
        }

        // Get the updated model instance
        $galeri->fill($data)->save();
        
        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        
        // Delete image file if exists
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

    // For public users
    public function indexUser()
    {
        $galeri = Galeri::latest()->where('is_public', true)->paginate(12);
        return view('galeri.index', compact('galeri'));
    }
}
