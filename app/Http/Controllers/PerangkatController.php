<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perangkat;

class PerangkatController extends Controller
{
    // List perangkat (backend)
    public function index()
    {
        $perangkat = Perangkat::paginate(10);
        return view('components.perangkat.show', compact('perangkat'));
    }

    // Form tambah perangkat
    public function create()
    {
        return view('components.perangkat.create');
    }

    // Simpan perangkat baru
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'nip' => 'nullable|string|max:50',
            'masa_jabatan' => 'nullable|string|max:50',
            'kontak' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('perangkat', 'public');
        }

        Perangkat::create($validated);
        return redirect()->route('perangkat.show')->with('success', 'Data perangkat berhasil ditambahkan.');
    }

    // Tampilkan detail perangkat (opsional, bisa diisi jika ingin detail)
    public function show(Perangkat $perangkat)
    {
        return view('components.perangkat.show', compact('perangkat'));
    }

    // Form edit perangkat
    public function edit(Perangkat $perangkat)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        return view('components.perangkat.edit', compact('perangkat'));
    }

    // Update perangkat
    public function update(Request $request, Perangkat $perangkat)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'nip' => 'nullable|string|max:50',
            'masa_jabatan' => 'nullable|string|max:50',
            'kontak' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('perangkat', 'public');
        }

        $perangkat->update($validated);
        return redirect()->route('perangkat.show')->with('success', 'Data perangkat berhasil diupdate.');
    }

    // Hapus perangkat
    public function destroy(Perangkat $perangkat)
    {
        $perangkat->delete();
        return redirect()->route('perangkat.show')->with('success', 'Data perangkat berhasil dihapus.');
    }

    // Struktur organisasi (frontend)
    public function struktur()
    {
        $struktur = Perangkat::all();
        return view('profil-desa.struktur-organisasi', compact('struktur'));
    }
    public function index1()
    {
        $perangkat = Perangkat::paginate(10);
        return view('profil-desa.perangkat-desa', compact('perangkat'));
    }
}
