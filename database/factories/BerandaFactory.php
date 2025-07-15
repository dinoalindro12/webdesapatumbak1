<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BerandaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'total_penduduk' => fake()->numberBetween(1000, 5000),
            'anggaran_desa' => fake()->numberBetween(500000000, 2000000000),
            'anggaran_terpakai' => fake()->numberBetween(100000000, 1500000000),
            'jumlah_program' => fake()->numberBetween(5, 20),
            'jumlah_umkm' => fake()->numberBetween(20, 100),
            'prestasi_judul' => fake()->sentence(),
            'prestasi_deskripsi' => fake()->paragraph(),
            'prestasi_tahun' => fake()->year(),
            'agenda_terkini' => fake()->sentence(),
            'agenda_tanggal' => fake()->date(),
            'agenda_lokasi' => fake()->city(),
            'layanan_surat_aktif' => true,
            'layanan_perizinan_aktif' => true,
            'layanan_pembayaran_aktif' => true,
            'total_feedback' => fake()->numberBetween(10, 100),
            'rata_feedback' => fake()->randomFloat(1, 3, 5),
            'data_bulanan' => $this->generateMonthlyData(),
        ];
    }

    private function generateMonthlyData(): array
    {
        $data = [];
        for ($year = 2020; $year <= date('Y'); $year++) {
            for ($month = 1; $month <= 12; $month++) {
                $data[$year][$month] = [
                    'pertumbuhan' => fake()->randomFloat(2, -5, 10),
                    'keterangan' => fake()->sentence()
                ];
            }
        }
        return $data;
    }
}
