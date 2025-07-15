<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontaks = Kontak::paginate(10); // Paginate the contacts for better performance
        return view('components.kontak.index', compact('kontaks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kontak.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:20',
            'email' => 'required|string|max:100',
            'no_hp' => 'required|string|max:20',
            'jenis_subyek' => 'required|string',
            'pesan' => 'required|string',
        ]);


        Kontak::create([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'no_hp' => $validated['no_hp'],
            'jenis_subyek' => $validated['jenis_subyek'],
            'pesan' => $validated['pesan'] ?? null,
        ]);

        return redirect()->route('kontak.create')->with('success', 'Pengaduan berhasil diajukan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kontak $kontak)
    {
        $kontak = Kontak::findOrFail($kontak->id);
        return view('components.kontak.show', compact('kontak'));
    }


    /**
     * Remove the specified resource from storage.
     */
    
        public function destroy(Kontak $kontak)
   {
    $kontak->delete();
    return redirect()->route('kontak.index')->with('success', 'Pengaduan berhasil dihapus!');
   }
   public function edit(Kontak $kontak)
{
    return view('components.kontak.edit', compact('kontak'));
}
}
