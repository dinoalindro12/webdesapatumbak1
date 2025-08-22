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
            // 'no_hp' => 'required|string|max:20', // DIHAPUS KARENA SUDAH TIDAK ADA DI FORM
            'tempat_lahir' => 'required|string|max:100', // DITAMBAHKAN
            'bangsa' => 'required|string|max:50', // DITAMBAHKAN
            'agama' => 'required|string|max:50', // DITAMBAHKAN
            'pekerjaan' => 'required|string|max:100', // DITAMBAHKAN
            'tempat_tinggal' => 'required|string|max:255', // DITAMBAHKAN
            'jenis_surat' => 'required|string',
            'keperluan' => 'nullable|string', // DITAMBAHKAN (ganti alasan)
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
            // 'no_hp' => $validated['no_hp'], // DIHAPUS
            'tempat_lahir' => $validated['tempat_lahir'], // DITAMBAHKAN
            'bangsa' => $validated['bangsa'], // DITAMBAHKAN
            'agama' => $validated['agama'], // DITAMBAHKAN
            'pekerjaan' => $validated['pekerjaan'], // DITAMBAHKAN
            'tempat_tinggal' => $validated['tempat_tinggal'], // DITAMBAHKAN
            'jenis_surat' => $validated['jenis_surat'],
            'keperluan' => $validated['keperluan'] ?? null, // DITAMBAHKAN (ganti alasan)
            'dokumen' => $dokumen,
            'status' => 'diajukan',
            'tanggal_buat' => now(), // DITAMBAHKAN
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

        // Generate nomor surat jika belum ada
        if (!$surat->nomor_surat) {
            $lastSurat = Surat::where('jenis_surat', $surat->jenis_surat)
                ->whereNotNull('nomor_surat')
                ->orderBy('id', 'desc')
                ->first();

            $lastNumber = $lastSurat ? intval(explode('/', $lastSurat->nomor_surat)[0]) : 0;
            $newNumber = $lastNumber + 1;

            $surat->nomor_surat = $newNumber . '/SURAT/' . date('Y');
            $surat->tanggal_cetak = now()->format('Y-m-d');
            $surat->save();
        }

        // Format tanggal
        $tanggalLahir = $surat->tanggal_lahir
            ? Carbon::parse($surat->tanggal_lahir)->format('d/m/Y')
            : '-';

        Carbon::setLocale('id');
        $tanggalBuat = \Carbon\Carbon::parse($surat->tanggal_cetak)
        ->locale('id')
        ->translatedFormat('j F Y');

        // Proses template
        $jenisTemplate = strtolower(str_replace(' ', '_', $surat->jenis_surat));
        $templatePath = storage_path("app/templates/{$jenisTemplate}.docx");

        if (!file_exists($templatePath)) {
            $templatePath = storage_path('app/templates/default.docx');
        }

        $templateProcessor = new TemplateProcessor($templatePath);

        // Set values baru
        $templateProcessor->setValue('NO', explode('/', $surat->nomor_surat)[0]);
        $templateProcessor->setValue('TAHUN', date('Y'));
        $templateProcessor->setValue('NAMA', $surat->nama);
        $templateProcessor->setValue('NIK', $surat->nik);
        $templateProcessor->setValue('TANGGAL_LAHIR', $surat->tanggal_lahir);
        $templateProcessor->setValue('TEMPAT_LAHIR', $surat->tempat_lahir);
        $templateProcessor->setValue('BANGSA', $surat->bangsa);
        $templateProcessor->setValue('AGAMA', $surat->agama);
        $templateProcessor->setValue('PEKERJAAN', $surat->pekerjaan);
        $templateProcessor->setValue('TEMPAT_TINGGAL', $surat->tempat_tinggal);
        $templateProcessor->setValue('TANGGAL_CETAK', $surat->tanggal_cetak);
        $templateProcessor->setValue('KEPERLUAN', $surat->keperluan ?? '-');
        $templateProcessor->setValue('TANGGAL_BUAT', $surat->tanggal_buat);
        $templateProcessor->setValue('JENIS_SURAT', $surat->jenis_surat);

        // Simpan dan download
        $fileName = 'Surat_' . $surat->jenis_surat . '_' . $surat->nik . '.docx';
        $outputPath = storage_path("app/generated/{$fileName}");
        $templateProcessor->saveAs($outputPath);

        return response()->download($outputPath)->deleteFileAfterSend(true);
    }
}
