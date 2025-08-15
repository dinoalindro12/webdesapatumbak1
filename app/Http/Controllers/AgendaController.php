<?php

namespace App\Http\Controllers;
use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Models\Pendidikan;


class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agenda = Agenda::latest()->paginate(10);
        return view('components.agenda.index', compact('agenda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_proyek' => 'required|string|max:255',
            'waktu_mulai' => 'required|integer|min:1900|max:' . date('Y'),
            'besar_anggaran' => 'required|integer',
            'ukuran_proyek' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
        ]);
        Agenda::create($validated);
        return redirect()->route('agenda.index')->with('success', 'Data agenda berhasil ditambahkan.');
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
        $agenda = Agenda::findOrFail($id);
        return view('components.agenda.edit', compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama_proyek' => 'required|string|max:255',
            'waktu_mulai' => 'required|integer|min:1900|max:' . date('Y'),
            'besar_anggaran' => 'required|integer',
            'ukuran_proyek' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
        ]);
        $agenda = Agenda::findOrFail($id);
        $agenda->update($validated);
        return redirect()->route('agenda.index')->with('success', 'Agenda berhasil diperbarui!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->delete();
        return redirect()->route('agenda.index')->with('success', 'Agenda berhasil dihapus!');
        
    }
    public function userView()
    {
        $agenda = Agenda::paginate(10);
        return view('berita-kegiatan.agenda-kegiatan', compact('agenda'));
    }
}
