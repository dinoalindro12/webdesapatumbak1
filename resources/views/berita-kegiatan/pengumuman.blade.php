<x-layout title="Pengumuman Desa">
    <div class="bg-gray-100 py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 font-chalk">Papan Pengumuman Desa</h1>
                <div class="w-32 h-2 bg-green-700 mx-auto mt-4 rounded-full opacity-80"></div>
                <p class="text-gray-900 mt-4 font-chalk">Informasi penting untuk warga Desa Sukamaju</p>
            </div>

            <!-- Papan Tulis -->
            <div class="bg-gray-300 rounded-lg shadow-xl overflow-hidden mb-12 border-8 border-gray-500">
                <!-- Header Papan Tulis -->
                <div class="bg-gray-300 px-6 py-3 flex items-center rounded-lg">
                    <div class="flex space-x-2">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    </div>
                    <div class="ml-4 text-gray-900 text-sm font-medium">PENGUMUMAN DESA SUKAMAJU</div>
                </div>
                
                <!-- Isi Papan Tulis -->
                <div class="bg-gray-300 p-6 min-h-[500px] font-chalk">
                    <!-- Pengumuman Penting -->
                    <div class="mb-8 p-4 border-l-4 border-gray-400 bg-green-600 bg-opacity-30 rounded-r-lg">
                        <div class="flex items-center mb-2">
                            <svg class="h-6 w-6 text-black mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            <h2 class="text-2xl text-gray-900 font-bold">PENGUMUMAN PENTING!</h2>
                        </div>
                        <p class="text-gray-900 text-lg mb-3">PEMADAMAN LISTRIK BERGILIR</p>
                        <p class="text-gray-900 mb-2">Akan dilakukan pemadaman listrik bergilir pada:</p>
                        <ul class="text-gray-900 list-disc pl-5 mb-3 space-y-1">
                            <li>Tanggal: 15-17 Juni 2023</li>
                            <li>Pukul: 08.00 - 16.00 WIB</li>
                            <li>Wilayah: RT 01 s/d RT 05</li>
                        </ul>
                        <p class="text-gray-900">Harap mempersiapkan kebutuhan listrik selama pemadaman.</p>
                    </div>

                    <!-- Daftar Pengumuman -->
                    <div class="space-y-6">
                        <!-- Pengumuman 1 -->
                        <div class="p-4 border-b-2 border-green-600 border-dashed">
                            <div class="flex justify-between items-start">
                                <h3 class="text-xl text-gray-900 font-bold mb-2">JADWAL POSYANDU BULAN INI</h3>
                                <span class="text-gray-900 text-sm">12 Juni 2023</span>
                            </div>
                            <p class="text-gray-900 mb-2">Posyandu Melati akan dilaksanakan pada:</p>
                            <ul class="text-gray-900 list-disc pl-5 mb-2 space-y-1">
                                <li>Tanggal: 15 Juni 2023</li>
                                <li>Pukul: 08.00 - 12.00 WIB</li>
                                <li>Tempat: Balai RT 03</li>
                            </ul>
                            <p class="text-gray-900">Bawa buku KMS dan kartu peserta.</p>
                        </div>

                        <!-- Pengumuman 2 -->
                        <div class="p-4 border-b-2 border-green-600 border-dashed">
                            <div class="flex justify-between items-start">
                                <h3 class="text-xl text-gray-900 font-bold mb-2">GOTONG ROYONG BERSIH DESA</h3>
                                <span class="text-gray-900 text-sm">10 Juni 2023</span>
                            </div>
                            <p class="text-gray-900 mb-2">Akan dilaksanakan kegiatan gotong royong bersih desa:</p>
                            <ul class="text-gray-900 list-disc pl-5 mb-2 space-y-1">
                                <li>Tanggal: 18 Juni 2023</li>
                                <li>Pukul: 07.00 WIB</li>
                                <li>Tempat: Lapangan Desa</li>
                            </ul>
                            <p class="text-gray-900">Setiap KK wajib mengirim 1 orang perwakilan.</p>
                        </div>

                        <!-- Pengumuman 3 -->
                        <div class="p-4 border-b-2 border-green-600 border-dashed">
                            <div class="flex justify-between items-start">
                                <h3 class="text-xl text-gray-900 font-bold mb-2">PENDAFTARAN BANTUAN PKH</h3>
                                <span class="text-gray-900 text-sm">8 Juni 2023</span>
                            </div>
                            <p class="text-gray-900 mb-2">Pendaftaran Program Keluarga Harian (PKH) dibuka untuk:</p>
                            <ul class="text-gray-900 list-disc pl-5 mb-2 space-y-1">
                                <li>Keluarga dengan balita</li>
                                <li>Lansia di atas 70 tahun</li>
                                <li>Penyandang disabilitas</li>
                            </ul>
                            <p class="text-gray-900">Bawa fotokopi KK, KTP, dan dokumen pendukung ke kantor desa.</p>
                        </div>

                        <!-- Pengumuman 4 -->
                        <div class="p-4">
                            <div class="flex justify-between items-start">
                                <h3 class="text-xl text-gray-900 font-bold mb-2">PELATIHAN KEWIRAUSAHAAN</h3>
                                <span class="text-gray-900 text-sm">5 Juni 2023</span>
                            </div>
                            <p class="text-gray-900 mb-2">Dinas Koperasi & UMKM Kabupaten akan menyelenggarakan:</p>
                            <ul class="text-gray-900 list-disc pl-5 mb-2 space-y-1">
                                <li>Tanggal: 20-22 Juni 2023</li>
                                <li>Pukul: 09.00 - 15.00 WIB</li>
                                <li>Tempat: Aula Kantor Desa</li>
                            </ul>
                            <p class="text-gray-900">Gratis untuk warga desa. Daftar ke Pak RT masing-masing.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Info Tambahan -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Informasi Penting</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="border-l-4 border-red-500 pl-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Pengumuman Darurat</h3>
                        <p class="text-gray-600">Untuk pengumuman darurat, akan disampaikan melalui pengeras suara masjid dan grup WhatsApp RT/RW.</p>
                    </div>
                    <div class="border-l-4 border-blue-500 pl-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Verifikasi Data</h3>
                        <p class="text-gray-600">Warga dimohon memverifikasi data keluarga di kantor desa untuk keperluan bantuan sosial.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chalk Font Style -->
    <style>
        .font-chalk {
            font-family: 'Courier New', Courier, monospace;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }
        .bg-green-700 {
            background-color: #313b59;
        }
        .bg-green-800 {
            background-color: #313b59;
        }
        .bg-green-900 {
            background-color: #313b59;
        }
    </style>
</x-layout>