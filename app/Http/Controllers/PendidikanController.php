<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidikan;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendidikan = Pendidikan::paginate(10);
        return view('components.pendidikan.index', compact('pendidikan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.pendidikan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_institusi' => 'required|string|max:255',
            'tahun_berdiri' => 'required|integer|min:1900|max:' . date('Y'),
            'tingkat_pendidikan' => 'required|string|max:50',
            'alamat' => 'nullable|string|max:255',
            'akreditasi' => 'nullable|string|max:10',
        ]);
        Pendidikan::create($validated);
        return redirect()->route('pendidikan.index')->with('success', 'Data pendidikan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        return view('components.pendidikan.edit',compact('pendidikan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pendidikan $pendidikan)
    {
         $validated = $request->validate([
            'nama_institusi' => 'required|string|max:255',
            'tahun_berdiri' => 'required|integer|min:1900|max:' . date('Y'),
            'tingkat_pendidikan' => 'required|string|max:50',
            'alamat' => 'nullable|string|max:255',
            'akreditasi' => 'nullable|string|max:10',
        ]);
        $pendidikan->update($validated);
        return redirect()->route('pendidikan.index')->with('success', 'Data pendidikan berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // untuk view user
    public function userView()
    {
        $pendidikan = Pendidikan::all();
        return view('layanan.pendidikan', compact('pendidikan'));
    }
}
