<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpWord\TemplateProcessor;
use Carbon\Carbon;

class SuratController extends Controller
{
    public function create()
    {
        if (!auth()->check()) {
            return view('auth.require-login', [
                'message' => 'Untuk mengakses fitur ini, silahkan login terlebih dahulu',
                'route' => 'layanan.surat-menyurat'
            ]);
        }
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

    public function showForm()
    {
        return view('surat.form');
    }

    public function createSurat($id)
    {
        $surat = Surat::findOrFail($id);

        // Format tanggal lahir
        $tanggalLahir = $surat->tanggal_lahir
            ? Carbon::parse($surat->tanggal_lahir)->format('d/m/Y')
            : '-';

        // Format tanggal buat
        Carbon::setLocale('id');
        $tanggalBuat = Carbon::now()->translatedFormat('j F Y');

        // Sesuaikan path template dengan jenis surat
        $jenisTemplate = strtolower(str_replace(' ', '_', $surat->jenis_surat));
        $templatePath = storage_path("app/templates/{$jenisTemplate}.docx");

        // Fallback template default jika tidak ada
        if (!file_exists($templatePath)) {
            $templatePath = storage_path('app/templates/default.docx');
        }

        $templateProcessor = new TemplateProcessor($templatePath);

        // Mapping data ke template
        $templateProcessor->setValue('NAMA', $surat->nama);
        $templateProcessor->setValue('NIK', $surat->nik);
        $templateProcessor->setValue('TANGGAL_LAHIR', $tanggalLahir);
        $templateProcessor->setValue('NO_HP', $surat->no_hp);
        $templateProcessor->setValue('ALASAN', $surat->alasan ?? '-');
        $templateProcessor->setValue('TANGGAL_BUAT', $tanggalBuat);
        $templateProcessor->setValue('JENIS_SURAT', $surat->jenis_surat);

        // Simpan file
        $fileName = 'Surat_' . $surat->jenis_surat . '_' . $surat->nik . '.docx';
        $outputPath = storage_path("app/generated/{$fileName}");
        $templateProcessor->saveAs($outputPath);

        return response()->download($outputPath)->deleteFileAfterSend(true);
    }
}
