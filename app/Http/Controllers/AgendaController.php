<?php

namespace App\Http\Controllers;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
            'waktu mulai' => 'required|integer|min:1900|max:' . date('Y'),
            'besar_anggaran' => 'required|integer',
            'ukuran_proyek' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
        ]);
        Agenda::create($validated);
        return redirect()->route('agenda.index')->with('success', 'Data pendidikan berhasil ditambahkan.');
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
        $agenda = Pendidikan::findOrFail($id);
        return view('components.agenda.edit', compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama_proyek' => 'required|string|max:255',
            'waktu mulai' => 'required|integer|min:1900|max:' . date('Y'),
            'besar_anggaran' => 'required|integer',
            'ukuran_proyek' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
        ]);
        Agenda::update($validated);
        return redirect()->route('agenda.index')->with('success', 'Pengaduan berhasil diajukan!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
    public function agendauser()
    {
        $agenda = Agenda::paginate(10);
        return view('berita-kegiatan.agenda-kegiatan', compact('agenda'));
    }
}
