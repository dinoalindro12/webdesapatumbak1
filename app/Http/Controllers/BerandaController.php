<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BerandaController extends Controller
{
    /**
     * Display the main dashboard view.
     */
    public function index()
    {
        
        $beranda = Beranda::orderBy('id','asc')->paginate(10);
        return view('dashboard', compact('beranda'));

    } 
    public function create()

    {
        return view('components.dashboard.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'total_penduduk' => 'required|integer|min:0',
            'anggaran_desa' => 'required|numeric|min:0',
            'jumlah_program' => 'required|string',
            'aktivitas_terkini' => 'required|string|max:255',
            'jumlah_umkm' => 'required|integer|min:0',
            'prestasi' => 'required|string|max:255',
            'keberhasilan' => 'required|string|max:255',
            'anggaran_terpakai' => 'required|numeric|min:0',
        ]);

        $beranda = Beranda::create($validated);
        return redirect()->route('dashboard.index')->with('success', 'Data perangkat berhasil ditambahkan.');
    }

    /**
     * Update the dashboard data.
     */
    /**
     * Show the form for editing dashboard data.
     */
    public function edit($id)
    {
         $kesehatan = Kesehatan::findOrFail($id);
        return view('components.dashboard.edit', compact('beranda'));
    }

    public function update(Request $request, Beranda $beranda)
    {
        $validator = Validator::make($request->all(), [
            'total_penduduk' => 'required|integer|min:0',
            'anggaran_desa' => 'required|numeric|min:0',
            'jumlah_program' => 'required|string',
            'aktivitas_terkini' => 'required|string|max:255',
            'jumlah_umkm' => 'required|integer|min:0',
            'prestasi' => 'required|string|max:255',
            'keberhasilan' => 'required|string|max:255',
            'anggaran_terpakai' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $beranda->update($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data beranda berhasil diperbarui!');
    }
    public function berandauser()
    {
         $beranda = Beranda::orderBy('id','asc')->paginate(10);
        return view('welcome', compact('beranda'));
    
    }

    public function destroy(Beranda $beranda)
    {
        $beranda->delete();
        return redirect()->route('dashboard.index')->with('success', 'Data beranda berhasil dihapus!');
    }
    
}