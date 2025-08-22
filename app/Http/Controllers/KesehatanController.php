<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kesehatan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class KesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Logic to display the list of health services
        $datasehat = Kesehatan::paginate(10);
        return view('components.kesehatan.index', compact('datasehat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.kesehatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
    $validated = $request->validate([
        'nama_program' => 'required|string|max:255',
        'aktivitas_program' => 'required|string|max:255',
        'jam_pelayanan' => 'required|string|max:255', // Diubah ke integer jika ini angka
        'tanggal_pelayanan' => 'required|string|max:255',
        'lokasi_pelayanan' => 'required|string|max:255',
    ]);
    Kesehatan::create($validated);
    return redirect()->route('kesehatan.index')->with('success', 'Data kesehatan berhasil ditambahkan.');
   
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kesehatan = Kesehatan::findOrFail($id);
        return view('components.kesehatan.index', compact('kesehatan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kesehatan = Kesehatan::findOrFail($id);
        return view('components.kesehatan.edit', compact('kesehatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kesehatan $kesehatan)
    {
        $validated = $request->validate([
        'nama_program' => 'required|string|max:255',
        'aktivitas_program' => 'required|string|max:255',
        'jam_pelayanan' => 'required|string|max:255', // Diubah ke integer jika ini angka
        'tanggal_pelayanan' => 'required|string|max:255',
        'lokasi_pelayanan' => 'required|string|max:255',
    ]);
        $kesehatan->update($validated);
        return redirect()->route('kesehatan.index')->with('success', 'Data kesehatan berhasil diupdate.');
    }
    public function destroy(string $id)
    {
        $kesehatan = Kesehatan::findOrFail($id);
        $kesehatan->delete();
        return redirect()->route('kesehatan.index')->with('success', 'Data kesehatan berhasil dihapus.');
    }

    public function kesehatanviewuser()
    {
        $kesehatann = Kesehatan::paginate(10);
        return view('layanan.kesehatan', compact('kesehatann'));
    }
}
