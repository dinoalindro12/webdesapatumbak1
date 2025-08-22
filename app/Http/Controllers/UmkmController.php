<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $umkm = Umkm::paginate(10);
        return view('components.umkm.show', compact('umkm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.umkm.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'nama_usaha' => 'required|string|max:255',
            'jenis_usaha' => 'required|string|max:255',
            'kontak' => 'nullable|string|max:50',
            'lokasi_usaha' => 'nullable|string|max:50',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('umkm', 'public');
        }

        Umkm::create($validated);
        return redirect()->route('umkm.index')->with('success', 'Data perangkat berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('components.perangkat.show', compact('perangkat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        return view('components.perangkat.edit', compact('perangkat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Umkm $umkm)
    {
        $validated = $request->validate([
            'nama_usaha' => 'required|string|max:255',
            'jenis_usaha' => 'required|string|max:255',
            'lokasi_usaha' => 'nullable|string|max:50',
            'kontak' => 'nullable|string|max:50',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('umkm', 'public');
        }

        $umkm->update($validated);
        return redirect()->route('umkm.index')->with('success', 'Data perangkat berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Umkm $umkm)
    {
         $umkm->delete();
        return redirect()->route('umkm.index')->with('success', 'Data perangkat berhasil dihapus.');
    }

    public function umkmuser()
    {
        $umkm = Umkm::paginate(10);
        return view('layanan.pertanian', compact('umkm'));
    }
}
