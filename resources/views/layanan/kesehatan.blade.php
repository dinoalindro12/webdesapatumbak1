<x-layout title="Layanan Kesehatan">
    <!-- Hero Section with Visual Impact -->
    <div class="relative bg-gray-900 text-white py-24 overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center opacity-40" style="background-image: url('{{ asset('images/pustu.jpg') }}');"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 font-serif">Layanan Kesehatan <span class="text-gray-300">Desa Patumbak 1</span></h1>
                <div class="w-32 h-1.5 bg-gray-400 mx-auto mb-8"></div>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">Pelayanan kesehatan komprehensif dengan sentuhan manusiawi untuk seluruh warga desa</p>
            </div>
        </div>
    </div>

    <!-- Services Cards with Visual Hierarchy -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Layanan Unggulan Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Berbagai fasilitas kesehatan yang dapat dimanfaatkan oleh seluruh warga desa</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white rounded-xl shadow-2xl overflow-hidden transform transition-all hover:-translate-y-2 hover:shadow-2xl">
                    <div class="h-48 bg-[url('https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')] bg-cover bg-center relative">
                        <div class="absolute inset-0 bg-gray-800 opacity-50"></div>
                        <div class="relative h-full flex items-center justify-center">
                            <div class="bg-gray-700 text-white px-4 py-2 rounded-full text-sm font-medium">Untuk Lansia</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-gray-100 p-3 rounded-full mr-4">
                                <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Pengobatan Gratis Lansia</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Pelayanan kesehatan komprehensif untuk warga berusia 60+ tahun</p>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Pemeriksaan rutin bulanan</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Obat-obatan dasar gratis</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Konsultasi dokter umum</span>
                            </li>
                        </ul>
                        <div class="mt-6 pt-4 border-t border-gray-200">
                            <div class="flex items-center text-gray-600">
                                <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Setiap Kamis, 08.00-12.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-xl shadow-2xl overflow-hidden transform transition-all hover:-translate-y-2 hover:shadow-2xl">
                    <div class="h-48 bg-[url('https://images.unsplash.com/photo-1512678080530-7760d81faba6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')] bg-cover bg-center relative">
                        <div class="absolute inset-0 bg-gray-800 opacity-50"></div>
                        <div class="relative h-full flex items-center justify-center">
                            <div class="bg-gray-700 text-white px-4 py-2 rounded-full text-sm font-medium">Untuk Ibu Hamil dan Balita</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-gray-100 p-3 rounded-full mr-4">
                                <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Posyandu</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Program ini untuk bertujuan untuk memantau kesehatan ibu dan anak.</p>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Gratis biaya persalinan normal</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Pendampingan bidan desa</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Paket bayi baru lahir</span>
                            </li>
                        </ul>
                        <div class="mt-6 pt-4 border-t border-gray-200">
                            <div class="text-sm text-gray-600">Registrasi sejak usia kandungan 6 bulan</div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-xl shadow-2xl overflow-hidden transform transition-all hover:-translate-y-2 hover:shadow-2xl">
                    <div class="h-48 bg-[url('https://images.unsplash.com/photo-1581056771107-24ca5f033842?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')] bg-cover bg-center relative">
                        <div class="absolute inset-0 bg-gray-800 opacity-50"></div>
                        <div class="relative h-full flex items-center justify-center">
                            <div class="bg-gray-700 text-white px-4 py-2 rounded-full text-sm font-medium">Darurat 24 Jam</div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-gray-100 p-3 rounded-full mr-4">
                                <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Ambulance Gratis</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Layanan transportasi medis darurat 24 jam</p>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Rujukan ke rumah sakit</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Keadaan darurat medis</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Pasien dengan mobilitas terbatas</span>
                            </li>
                        </ul>
                        <div class="mt-6 pt-4 border-t border-gray-200">
                            <div class="flex items-center text-gray-600">
                                <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span>0895-1234-5678 (24 Jam)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Medical Team Section with Visual Impact -->
    {{-- <div class="py-16 bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Tim Medis Profesional Kami</h2>
                <p class="text-gray-300 max-w-2xl mx-auto">Dokter, bidan, dan tenaga medis berpengalaman siap melayani Anda</p>
            </div>

            {{-- <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Doctor 1 -->
                <div class="bg-gray-700 rounded-xl overflow-hidden shadow-xl transform transition-all hover:scale-105">
                    <div class="h-64 bg-[url('https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80')] bg-cover bg-center relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h3 class="text-xl font-bold">dr. Andi Wijaya</h3>
                            <p class="text-gray-300">Dokter Umum</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-300 mb-4">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Setiap Kamis</span>
                        </div>
                        <p class="text-gray-300">Spesialis pelayanan kesehatan umum dan pemeriksaan lansia</p>
                    </div>
                </div>

                <!-- Doctor 2 -->
                <div class="bg-gray-700 rounded-xl overflow-hidden shadow-xl transform transition-all hover:scale-105">
                    <div class="h-64 bg-[url('https://images.unsplash.com/photo-1594824476967-48c8b964273f?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80')] bg-cover bg-center relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h3 class="text-xl font-bold">Siti Aminah, A.Md.Keb</h3>
                            <p class="text-gray-300">Bidan Desa</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-300 mb-4">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Setiap Hari Kerja</span>
                        </div>
                        <p class="text-gray-300">Spesialis persalinan dan kesehatan ibu-anak</p>
                    </div>
                </div>

                <!-- Doctor 3 -->
                <div class="bg-gray-700 rounded-xl overflow-hidden shadow-xl transform transition-all hover:scale-105">
                    <div class="h-64 bg-[url('https://images.unsplash.com/photo-1622253692010-333f2da6031d?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80')] bg-cover bg-center relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h3 class="text-xl font-bold">Rudi Hartono, S.Kep</h3>
                            <p class="text-gray-300">Perawat</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-300 mb-4">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Setiap Kamis</span>
                        </div>
                        <p class="text-gray-300">Pelayanan perawatan dasar dan pertolongan pertama</p>
                    </div>
                </div>

                <!-- Doctor 4 -->
                <div class="bg-gray-700 rounded-xl overflow-hidden shadow-xl transform transition-all hover:scale-105">
                    <div class="h-64 bg-[url('https://images.unsplash.com/photo-1527613426441-4da17471b66d?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80')] bg-cover bg-center relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h3 class="text-xl font-bold">Bambang Sutrisno</h3>
                            <p class="text-gray-300">Pengemudi Ambulance</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-300 mb-4">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>24 Jam Bergantian</span>
                        </div>
                        <p class="text-gray-300">Pelayanan transportasi medis darurat</p>
                    </div>
                </div>
            </div> --}}
        {{-- </div>
    </div> --}} 

    <!-- Stats and Schedule Section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Stats -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg">
                    <h2 class="text-2xl font-bold text-gray-800 mb-8">Dampak Positif Kami</h2>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                            <div class="text-4xl font-bold text-gray-800 mb-2">250+</div>
                            <div class="text-gray-600">Lansia Terlayani/Bulan</div>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                            <div class="text-4xl font-bold text-gray-800 mb-2">45</div>
                            <div class="text-gray-600">Persalinan Gratis/Tahun</div>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                            <div class="text-4xl font-bold text-gray-800 mb-2">120+</div>
                            <div class="text-gray-600">Penggunaan Ambulance/Tahun</div>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                            <div class="text-4xl font-bold text-gray-800 mb-2">98%</div>
                            <div class="text-gray-600">Kepuasan Masyarakat</div>
                        </div>
                    </div>
                </div>

                <!-- Schedule -->
                <div>
                   
                    
                    <h2 class="text-2xl font-bold text-gray-800 mb-8">Jadwal Layanan</h2>
                    <div class="bg-white border border-gray-200 rounded-xl shadow-lg overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="px-6 py-4 text-left text-sm font-medium uppercase tracking-wider">Layanan</th>
                                    <th class="px-6 py-4 text-left text-sm font-medium uppercase tracking-wider">Hari</th>
                                    <th class="px-6 py-4 text-left text-sm font-medium uppercase tracking-wider">Waktu</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                 @foreach ($kesehatann as $item )
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$item->nama_program}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{$item->tanggal_pelayanan}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{$item->jam_pelayanan}}</td>
                                </tr>
                                {{-- <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Posyandu</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Selasa</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">09.00 - 14.00</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Imunisasi Anak (Posyandu)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Rabu</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">09.00 - 12.00</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Ambulance</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Setiap Hari</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">24 Jam</td>
                                </tr> --}}
                                 @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Requirements Section -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Persyaratan Layanan</h2>
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 bg-gray-100 p-2 rounded-full mr-4">
                            <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Kartu Identitas</h3>
                            <p class="text-gray-600 mt-1">Wajib menunjukkan KTP/KKS Desa Sukamaju yang masih berlaku</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 bg-gray-100 p-2 rounded-full mr-4">
                            <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Domisili</h3>
                            <p class="text-gray-600 mt-1">Hanya untuk warga yang terdaftar sebagai penduduk Desa Sukamaju</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 bg-gray-100 p-2 rounded-full mr-4">
                            <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Prioritas</h3>
                            <p class="text-gray-600 mt-1">Untuk keluarga kurang mampu akan diprioritaskan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>