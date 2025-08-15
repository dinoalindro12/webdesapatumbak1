<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    // For admin
    public function index(Request $request)
    {
        $type = $request->get('type', 'semua');
        $galeri = Galeri::latest()
            ->filterByType($type !== 'semua' ? $type : null)
            ->paginate(10);
            
        return view('components.galeri.index', compact('galeri', 'type'));
    }

    public function create()
    {    
        return view('components.galeri.create');
    }       

    public function store(Request $request)
    {
        // Validasi dasar
        $validated = $request->validate([
            'type' => 'required|in:foto,video',
            'tanggal' => 'required|date',
        ]);

        // Validasi conditional berdasarkan type
        if ($request->type == 'foto') {
            $fotoValidation = $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'keterangan_gambar' => 'required|string|max:255',
            ]);
            $validated = array_merge($validated, $fotoValidation);
            
            // Handle upload gambar
            if ($request->hasFile('gambar')) {
                $imagePath = $request->file('gambar')->store('galeri', 'public');
                $validated['gambar'] = $imagePath; // Simpan path gambar
            }
            
            // Set field video ke null
            $validated['link_video'] = null;
            $validated['keterangan_video'] = null;
            
        } else if ($request->type == 'video') {
            $videoValidation = $request->validate([
                'link_video' => 'required|url|max:255',
                'keterangan_video' => 'required|string|max:255',
            ]);
            $validated = array_merge($validated, $videoValidation);
            
            // Set field foto ke null
            $validated['gambar'] = null;
            $validated['keterangan_gambar'] = null;
        }

        // Simpan data ke database
        try {
            Galeri::create($validated);
            \Log::info('Data berhasil disimpan');
        } catch (\Exception $e) {
            \Log::error('Error menyimpan data: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal menyimpan data: ' . $e->getMessage());
        }
        
        return redirect()->route('galeri.index')->with('success', 'Konten galeri berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('components.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);
        
        // Validasi dasar
        $validated = $request->validate([
            'type' => 'required|in:foto,video',
            'tanggal' => 'required|date',
        ]);

        // Validasi conditional berdasarkan type
        if ($request->type == 'foto') {
            $fotoValidation = $request->validate([
                'gambar' => $request->hasFile('gambar') ? 'required|image|mimes:jpeg,png,jpg,gif|max:2048' : 'nullable',
                'keterangan_gambar' => 'required|string|max:255',
            ]);
            $validated = array_merge($validated, $fotoValidation);
            
            // Handle upload gambar jika ada file baru
            if ($request->hasFile('gambar')) {
                // Hapus gambar lama jika ada
                if ($galeri->gambar) {
                    Storage::disk('public')->delete($galeri->gambar);
                }
                $imagePath = $request->file('gambar')->store('galeri', 'public');
                $validated['gambar'] = $imagePath;
            } else {
                // Pertahankan gambar lama jika tidak ada upload baru
                $validated['gambar'] = $galeri->gambar;
            }
            
            // Set field video ke null
            $validated['link_video'] = null;
            $validated['keterangan_video'] = null;
            
        } else if ($request->type == 'video') {
            $videoValidation = $request->validate([
                'link_video' => 'required|url|max:255',
                'keterangan_video' => 'required|string|max:255',
            ]);
            $validated = array_merge($validated, $videoValidation);
            
            // Hapus gambar lama jika beralih dari foto ke video
            if ($galeri->gambar) {
                Storage::disk('public')->delete($galeri->gambar);
            }
            
            // Set field foto ke null
            $validated['gambar'] = null;
            $validated['keterangan_gambar'] = null;
        }

        // Update data
        try {
            $galeri->update($validated);
            \Log::info('Data berhasil diupdate');
        } catch (\Exception $e) {
            \Log::error('Error mengupdate data: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal mengupdate data: ' . $e->getMessage());
        }
        
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

    // For public users
    public function indexUser(Request $request)
    {
        $type = $request->get('type', 'semua');
        
        $galeri = Galeri::latest()
            ->filterByType($type !== 'semua' ? $type : null)
            ->paginate(12);
        
        return view('galeri.index', compact('galeri', 'type'));
    }
}