<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpWord\TemplateProcessor;
use Carbon\Carbon;
use App\Models\SuratKetDomisili;
use App\Models\SuratKetCk;
use App\Models\SuratKetKematian;
use App\Models\SuratKetUsaha;
use App\Models\SuratKetWali;
use Illuminate\Support\Facades\Auth;

class SuratController extends Controller
{
    // Di file SuratController.php
    public function indexGuest()
    {
        // Jika user sudah login dan role-nya admin, redirect ke halaman admin
        if (Auth::check() && Auth::user()->role === 'admin') {
            return redirect()->route('surat-menyurat.index');
        }

        // Jika user belum login, tampilkan halaman require-login
        if (!Auth::check()) {
            return view('auth.require-login', [
                'message' => 'Anda harus login untuk mengakses halaman ini.',
                'route' => route('layanan.surat-menyurat')
            ]);
        }

        return view('layanan.surat-menyurat');
    }

    public function create()
    {

        return view('components.surat-menyurat.create');
    }

    public function store(Request $request)
    {
        // Validasi dasar
        $validated = $request->validate([
            'nik' => 'required|string|max:20',
            'nama' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:100',
            'bangsa' => 'required|string|max:50',
            'agama' => 'required|string|max:50',
            'pekerjaan' => 'required|string|max:100',
            'tempat_tinggal' => 'required|string|max:255',
            'jenis_surat' => 'required|string',
            'keperluan' => 'nullable|string',
            'file-upload' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        // Validasi dinamis berdasarkan jenis surat
        $additionalRules = [];

        switch ($request->jenis_surat) {
            case 'sk_domisili':
                // Tidak ada field tambahan yang required
                break;

            case 'sk_ck':
                // Tidak ada field tambahan yang required
                break;

            case 'sk_kematian':
                $additionalRules = [
                    'tanggal_wafat' => 'required|date',
                    'tempat_wafat' => 'required|string|max:255',
                    'tempat_pemakaman' => 'required|string|max:255',
                ];
                break;

            case 'sk_usaha':
                $additionalRules = [
                    'nama_usaha' => 'required|string|max:255',
                    'tempat_usaha' => 'required|string|max:255',
                    'jenis_kelamin' => 'required|string',
                    'status_perkawinan' => 'required|string',
                ];
                break;

            case 'sk_wali':
                $additionalRules = [
                    'nik_anak' => 'required|string|max:20',
                    'nama_anak' => 'required|string|max:100',
                    'tanggal_lahir_anak' => 'required|date',
                    'tempat_lahir_anak' => 'required|string|max:100',
                    'bangsa_anak' => 'required|string|max:50',
                    'agama_anak' => 'required|string|max:50',
                    'pekerjaan_anak' => 'required|string|max:100',
                    'tempat_tinggal_anak' => 'required|string|max:255',
                ];
                break;
        }

        $validatedAdditional = $request->validate($additionalRules);
        $validated = array_merge($validated, $validatedAdditional);

        // Proses penyimpanan data berdasarkan jenis surat
        $dokumen = null;
        if ($request->hasFile('file-upload')) {
            $dokumen = $request->file('file-upload')->store('dokumen_surat', 'public');
        }

        switch ($request->jenis_surat) {
            case 'sk_domisili':
                SuratKetDomisili::create([
                    'nik' => $validated['nik'],
                    'nama' => $validated['nama'],
                    'tanggal_lahir' => $validated['tanggal_lahir'],
                    'tempat_lahir' => $validated['tempat_lahir'],
                    'bangsa' => $validated['bangsa'],
                    'agama' => $validated['agama'],
                    'pekerjaan' => $validated['pekerjaan'],
                    'tempat_tinggal' => $validated['tempat_tinggal'],
                    'keperluan' => $validated['keperluan'] ?? null,
                    'status' => 'diajukan',
                ]);
                break;

            case 'sk_ck':
                SuratKetCk::create([
                    'nik' => $validated['nik'],
                    'nama' => $validated['nama'],
                    'tanggal_lahir' => $validated['tanggal_lahir'],
                    'tempat_lahir' => $validated['tempat_lahir'],
                    'bangsa' => $validated['bangsa'],
                    'agama' => $validated['agama'],
                    'pekerjaan' => $validated['pekerjaan'],
                    'tempat_tinggal' => $validated['tempat_tinggal'],
                    'keperluan' => $validated['keperluan'] ?? null,
                    'status' => 'diajukan',
                ]);
                break;

            case 'sk_kematian':
                SuratKetKematian::create([
                    'nik' => $validated['nik'],
                    'nama' => $validated['nama'],
                    'tanggal_lahir' => $validated['tanggal_lahir'],
                    'tempat_lahir' => $validated['tempat_lahir'],
                    'bangsa' => $validated['bangsa'],
                    'agama' => $validated['agama'],
                    'pekerjaan' => $validated['pekerjaan'],
                    'tempat_tinggal' => $validated['tempat_tinggal'],
                    'keperluan' => $validated['keperluan'] ?? null,
                    'status' => 'diajukan',
                    'tanggal_wafat' => $validated['tanggal_wafat'],
                    'tempat_wafat' => $validated['tempat_wafat'],
                    'tempat_pemakaman' => $validated['tempat_pemakaman'],
                ]);
                break;

            case 'sk_usaha':
                SuratKetUsaha::create([
                    'nik' => $validated['nik'],
                    'nama' => $validated['nama'],
                    'tanggal_lahir' => $validated['tanggal_lahir'],
                    'tempat_lahir' => $validated['tempat_lahir'],
                    'bangsa' => $validated['bangsa'],
                    'agama' => $validated['agama'],
                    'pekerjaan' => $validated['pekerjaan'],
                    'tempat_tinggal' => $validated['tempat_tinggal'],
                    'keperluan' => $validated['keperluan'] ?? null,
                    'status' => 'diajukan',
                    'nama_usaha' => $validated['nama_usaha'],
                    'tempat_usaha' => $validated['tempat_usaha'],
                    'jenis_kelamin' => $validated['jenis_kelamin'],
                    'status_perkawinan' => $validated['status_perkawinan'],
                ]);
                break;

            case 'sk_wali':
                SuratKetWali::create([
                    'nik' => $validated['nik'],
                    'nama' => $validated['nama'],
                    'tanggal_lahir' => $validated['tanggal_lahir'],
                    'tempat_lahir' => $validated['tempat_lahir'],
                    'bangsa' => $validated['bangsa'],
                    'agama' => $validated['agama'],
                    'pekerjaan' => $validated['pekerjaan'],
                    'tempat_tinggal' => $validated['tempat_tinggal'],
                    'keperluan' => $validated['keperluan'] ?? null,
                    'status' => 'diajukan',
                    'nik_anak' => $validated['nik_anak'],
                    'nama_anak' => $validated['nama_anak'],
                    'tanggal_lahir_anak' => $validated['tanggal_lahir_anak'],
                    'tempat_lahir_anak' => $validated['tempat_lahir_anak'],
                    'bangsa_anak' => $validated['bangsa_anak'],
                    'agama_anak' => $validated['agama_anak'],
                    'pekerjaan_anak' => $validated['pekerjaan_anak'],
                    'tempat_tinggal_anak' => $validated['tempat_tinggal_anak'],
                ]);
                break;
        }

        return redirect()->back()
            ->with('success', 'Permohonan surat berhasil diajukan!')
            ->with('success_admin', 'Surat berhasil ditambahkan!');
    }

    public function index(Request $request)
    {
        // Mengambil data dari semua model surat
        $suratDomisili = SuratKetDomisili::select('id', 'nik', 'nama', 'created_at', 'status')
            ->get()
            ->map(function ($item) {
                $item->jenis_surat = 'Surat Keterangan Domisili';
                $item->source = 'SuratKetDomisili';
                return $item;
            });

        $suratCk = SuratKetCk::select('id', 'nik', 'nama', 'created_at', 'status')
            ->get()
            ->map(function ($item) {
                $item->jenis_surat = 'Surat Keterangan Catatan Kriminal';
                $item->source = 'SuratKetCk';
                return $item;
            });

        $suratKematian = SuratKetKematian::select('id', 'nik', 'nama', 'created_at', 'status')
            ->get()
            ->map(function ($item) {
                $item->jenis_surat = 'Surat Keterangan Kematian';
                $item->source = 'SuratKetKematian';
                return $item;
            });

        $suratUsaha = SuratKetUsaha::select('id', 'nik', 'nama', 'created_at', 'status')
            ->get()
            ->map(function ($item) {
                $item->jenis_surat = 'Surat Keterangan Usaha';
                $item->source = 'SuratKetUsaha';
                return $item;
            });

        $suratWali = SuratKetWali::select('id', 'nik', 'nama', 'created_at', 'status')
            ->get()
            ->map(function ($item) {
                $item->jenis_surat = 'Surat Keterangan Wali';
                $item->source = 'SuratKetWali';
                return $item;
            });

        // Menggabungkan semua data
        $allSurats = $suratDomisili->concat($suratCk)
            ->concat($suratKematian)
            ->concat($suratUsaha)
            ->concat($suratWali);

        // Filter berdasarkan jenis surat jika dipilih
        if ($request->has('jenis_surat') && $request->jenis_surat != '') {
            $allSurats = $allSurats->filter(function ($item) use ($request) {
                return $item->jenis_surat == $request->jenis_surat;
            });
        }

        // Filter berdasarkan tanggal jika dipilih
        if ($request->has('tanggal') && $request->tanggal != '') {
            $allSurats = $allSurats->filter(function ($item) use ($request) {
                return Carbon::parse($item->created_at)->format('Y-m-d') == $request->tanggal;
            });
        }

        // Filter berdasarkan status jika dipilih
        if ($request->has('status_filter') && $request->status_filter != '') {
            $allSurats = $allSurats->filter(function ($item) use ($request) {
                return $item->status == $request->status_filter;
            });
        }

        // Sorting berdasarkan tanggal dibuat (terbaru pertama)
        $allSurats = $allSurats->sortByDesc('created_at');

        // Manual pagination
        $page = request('page', 1);
        $perPage = 10;
        $offset = ($page - 1) * $perPage;

        $paginatedSurats = $allSurats->slice($offset, $perPage);
        $surats = new \Illuminate\Pagination\LengthAwarePaginator(
            $paginatedSurats,
            $allSurats->count(),
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        return view('components.surat-menyurat.index', compact('surats'));
    }

    public function show($source, $id)
    {
        // Menentukan model berdasarkan source
        $model = $this->getModelFromSource($source);

        if (!$model) {
            abort(404, 'Jenis surat tidak ditemukan');
        }

        $surat = $model::findOrFail($id);
        $jenis_surat = $this->getJenisSuratName($source);

        return view('components.surat-menyurat.show', compact('surat', 'source', 'jenis_surat'));
    }

    public function destroy($source, $id)
    {
        // Menentukan model berdasarkan source
        $model = $this->getModelFromSource($source);

        if (!$model) {
            abort(404, 'Jenis surat tidak ditemukan');
        }

        $surat = $model::findOrFail($id);

        // Hapus dokumen jika ada
        if ($surat->dokumen) {
            Storage::disk('public')->delete($surat->dokumen);
        }

        $surat->delete();

        return redirect()->route('surat-menyurat.index')->with('success', 'Surat berhasil dihapus!');
    }

    // Helper method untuk mendapatkan model berdasarkan source
    private function getModelFromSource($source)
    {
        $models = [
            'SuratKetDomisili' => SuratKetDomisili::class,
            'SuratKetCk' => SuratKetCk::class,
            'SuratKetKematian' => SuratKetKematian::class,
            'SuratKetUsaha' => SuratKetUsaha::class,
            'SuratKetWali' => SuratKetWali::class,
            'Surat' => Surat::class, // Untuk surat biasa
        ];

        return $models[$source] ?? null;
    }

    public function showForm()
    {
        return view('surat.form');
    }

    // Tambahkan method helper untuk mendapatkan nama jenis surat
    private function getJenisSuratName($source)
    {
        $jenisSurat = [
            'SuratKetDomisili' => 'Surat Keterangan Domisili',
            'SuratKetCk' => 'Surat Keterangan Catatan Kriminal',
            'SuratKetKematian' => 'Surat Keterangan Kematian',
            'SuratKetUsaha' => 'Surat Keterangan Usaha',
            'SuratKetWali' => 'Surat Keterangan Wali',
            'Surat' => 'Surat',
        ];

        return $jenisSurat[$source] ?? 'Surat';
    }

    public function createSurat($source, $id)
    {
        // Menentukan model berdasarkan source
        $model = $this->getModelFromSource($source);

        if (!$model) {
            abort(404, 'Jenis surat tidak ditemukan');
        }

        $surat = $model::findOrFail($id);

        // Generate nomor surat jika belum ada
        if (!$surat->nomor_surat) {
            $lastSurat = $model::whereNotNull('nomor_surat')
                ->orderBy('id', 'desc')
                ->first();

            $lastNumber = $lastSurat ? intval(explode('/', $lastSurat->nomor_surat)[0]) : 0;
            $newNumber = $lastNumber + 1;

            $surat->nomor_surat = $newNumber . '/SURAT/' . date('Y');
            $surat->tanggal_cetak = now()->format('Y-m-d');
        }

        // Ubah status menjadi 'dicetak'
        $surat->status = 'dicetak';
        $surat->save();

        // Format tanggal
        $tanggalLahir = $surat->tanggal_lahir
            ? Carbon::parse($surat->tanggal_lahir)->format('d/m/Y')
            : '-';

        Carbon::setLocale('id');
        $tanggalCetak = Carbon::parse($surat->tanggal_cetak)
            ->locale('id')
            ->translatedFormat('j F Y');

        $tanggalBuat = $surat->created_at
            ? Carbon::parse($surat->created_at)->format('d/m/Y')
            : '-';

        // Proses template
        $jenisTemplate = strtolower(str_replace(' ', '_', $this->getJenisSuratName($source)));
        $templatePath = storage_path("app/templates/{$jenisTemplate}.docx");

        if (!file_exists($templatePath)) {
            $templatePath = storage_path('app/templates/default.docx');
        }

        $templateProcessor = new TemplateProcessor($templatePath);

        // Set values umum
        $templateProcessor->setValue('NO', explode('/', $surat->nomor_surat)[0]);
        $templateProcessor->setValue('TAHUN', date('Y'));
        $templateProcessor->setValue('NAMA', $surat->nama);
        $templateProcessor->setValue('NIK', $surat->nik);
        $templateProcessor->setValue('TANGGAL_LAHIR', $tanggalLahir);
        $templateProcessor->setValue('TEMPAT_LAHIR', $surat->tempat_lahir ?? '-');
        $templateProcessor->setValue('BANGSA', $surat->bangsa ?? '-');
        $templateProcessor->setValue('AGAMA', $surat->agama ?? '-');
        $templateProcessor->setValue('PEKERJAAN', $surat->pekerjaan ?? '-');
        $templateProcessor->setValue('TEMPAT_TINGGAL', $surat->tempat_tinggal ?? '-');
        $templateProcessor->setValue('TANGGAL_CETAK', $tanggalCetak);
        $templateProcessor->setValue('KEPERLUAN', $surat->keperluan ?? '-');
        $templateProcessor->setValue('TANGGAL_BUAT', $tanggalBuat);
        $templateProcessor->setValue('JENIS_SURAT', $this->getJenisSuratName($source));

        // Set values khusus untuk setiap jenis surat
        switch ($source) {
            case 'SuratKetKematian':
                $templateProcessor->setValue('TANGGAL_WAFAT', $surat->tanggal_wafat ? Carbon::parse($surat->tanggal_wafat)->format('d/m/Y') : '-');
                $templateProcessor->setValue('TEMPAT_WAFAT', $surat->tempat_wafat ?? '-');
                $templateProcessor->setValue('TEMPAT_PEMAKAMAN', $surat->tempat_pemakaman ?? '-');
                break;

            case 'SuratKetUsaha':
                $templateProcessor->setValue('NAMA_USAHA', $surat->nama_usaha ?? '-');
                $templateProcessor->setValue('TEMPAT_USAHA', $surat->tempat_usaha ?? '-');
                $templateProcessor->setValue('JENIS_KELAMIN', $surat->jenis_kelamin ?? '-');
                $templateProcessor->setValue('STATUS_PERKAWINAN', $surat->status_perkawinan ?? '-');
                break;

            case 'SuratKetWali':
                $templateProcessor->setValue('NIK_ANAK', $surat->nik_anak ?? '-');
                $templateProcessor->setValue('NAMA_ANAK', $surat->nama_anak ?? '-');
                $templateProcessor->setValue('TANGGAL_LAHIR_ANAK', $surat->tanggal_lahir_anak ? Carbon::parse($surat->tanggal_lahir_anak)->format('d/m/Y') : '-');
                $templateProcessor->setValue('TEMPAT_LAHIR_ANAK', $surat->tempat_lahir_anak ?? '-');
                $templateProcessor->setValue('BANGSA_ANAK', $surat->bangsa_anak ?? '-');
                $templateProcessor->setValue('AGAMA_ANAK', $surat->agama_anak ?? '-');
                $templateProcessor->setValue('PEKERJAAN_ANAK', $surat->pekerjaan_anak ?? '-');
                $templateProcessor->setValue('TEMPAT_TINGGAL_ANAK', $surat->tempat_tinggal_anak ?? '-');
                break;
        }

        // Simpan dan download
        $fileName = 'Surat_' . $this->getJenisSuratName($source) . '_' . $surat->nik . '.docx';
        $outputPath = storage_path("app/generated/{$fileName}");
        $templateProcessor->saveAs($outputPath);

        return response()->download($outputPath)->deleteFileAfterSend(true);
    }

    public function getForm($jenisSurat)
    {
        // Validasi jenis surat
        $allowedTypes = ['sk_domisili', 'sk_ck', 'sk_usaha', 'sk_wali', 'sk_kematian'];

        if (!in_array($jenisSurat, $allowedTypes)) {
            return response()->json(['error' => 'Jenis surat tidak valid'], 400);
        }

        // Return view form yang sesuai
        try {
            return view('components.surat-menyurat.forms.' . $jenisSurat);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Form tidak ditemukan'], 404);
        }
    }
}