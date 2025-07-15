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
        return view('welcome', compact('beranda'));
    } 
    public function create($request)
    {
        $beranda = $request->validate([
            'total_penduduk' => 'required|string|max:50',
            'anggaran_desa' => 'required|numeric|min:0',
            'jumlah_program' => 'required|string',
            'aktivitas_terkini' => 'required|string|max:255',
            'prestasi' => 'required|string|max:255',
            'keberhasilan' => 'required|string|max:255',
            'anggaran_terpakai' => 'required|numeric|min:0',

        ]);
        // Prepare data for the view
        $data = [
            'beranda' => $beranda,
            'greeting' => Beranda::getGreeting(),
            'achievements' => $beranda->getAchievements(),
            'activeServices' => $beranda->getActiveServices(),
            'monthlyIndicators' => $beranda->getMonthlyIndicators(date('Y')),
            'populationData' => $this->getPopulationChartData(),
        ];

        return view('components.berita.create', $data);
    }

    /**
     * Update the dashboard data.
     */
    public function update(Request $request, Beranda $beranda)
    {
        $validator = Validator::make($request->all(), [
            'total_penduduk' => 'required|integer|min:0',
            'anggaran_desa' => 'required|numeric|min:0',
            'anggaran_terpakai' => 'required|numeric|min:0|lte:anggaran_desa',
            'jumlah_program' => 'required|integer|min:0',
            'jumlah_umkm' => 'required|integer|min:0',
            'prestasi_judul' => 'required|string|max:255',
            'prestasi_deskripsi' => 'required|string',
            'prestasi_tahun' => 'required|string|max:4',
            'agenda_terkini' => 'required|string|max:255',
            'agenda_tanggal' => 'required|date',
            'agenda_lokasi' => 'required|string|max:255',
            'layanan_surat_aktif' => 'boolean',
            'layanan_perizinan_aktif' => 'boolean',
            'layanan_pembayaran_aktif' => 'boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $beranda->update($request->all());

        return redirect()->route('beranda')
            ->with('success', 'Data beranda berhasil diperbarui!');
    }

    /**
     * Handle feedback submission.
     */
    public function submitFeedback(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|between:1,5'
        ]);

        $beranda = Beranda::first();
        $newTotal = $beranda->total_feedback + 1;
        $newAverage = (($beranda->rata_feedback * $beranda->total_feedback) + $request->rating) / $newTotal;

        $beranda->update([
            'total_feedback' => $newTotal,
            'rata_feedback' => $newAverage
        ]);

        return response()->json(['message' => 'Terima kasih atas feedback Anda!']);
    }

    /**
     * Get population chart data.
     */
    private function getPopulationChartData(): array
    {
        return [
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'Mei'],
            'data' => [3100, 3150, 3200, 3220, 3245],
        ];
    }

    /**
     * Get monthly indicator data for a specific year.
     */
    
}