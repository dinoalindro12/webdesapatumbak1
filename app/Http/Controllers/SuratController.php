<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;
use Illuminate\Support\Facades\Storage;

class SuratController extends Controller
{
    public function create()
    {
        return view('layanan.surat-menyurat');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nik' => 'required|string|max:20',
            'nama' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'no_hp' => 'required|string|max:20',
            'jenis_surat' => 'required|string',
            'alasan' => 'nullable|string',
            'file-upload' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $dokumen = null;
        if ($request->hasFile('file-upload')) {
            $dokumen = $request->file('file-upload')->store('dokumen_surat', 'public');
        }

        Surat::create([
            'nik' => $validated['nik'],
            'nama' => $validated['nama'],
            'tanggal_lahir' => $validated['tanggal_lahir'],
            'no_hp' => $validated['no_hp'],
            'jenis_surat' => $validated['jenis_surat'],
            'alasan' => $validated['alasan'] ?? null,
            'dokumen' => $dokumen,
            'status' => 'diajukan',
        ]);

        return redirect()->back()->with('success', 'Permohonan surat berhasil diajukan!');
    }
    public function index()
    {
        $surats = Surat::paginate(20);
        return view('components.surat-menyurat.index', compact('surats'));
    }
    public function show(Surat $surat)
    {
        $surat = Surat::findOrFail($surat->id);
        return view('components.surat-menyurat.show', compact('surat'));
    }
    public function destroy(Surat $surat)
    {
        $surat = Surat::findOrFail($surat->id);
        if ($surat->dokumen) {
            Storage::disk('public')->delete('dokumen_surat/' . $surat->dokumen);
        }
        $surat->delete();
        return redirect()->route('surat-menyurat.index')->with('success', 'Surat berhasil dihapus!');
    }
}
