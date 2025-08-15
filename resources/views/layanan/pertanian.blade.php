<x-layout title="Layanan Desa Sukamaju">
    <div class="bg-gray-50">
        <!-- Hero Section -->
        <div class="relative bg-gray-800 overflow-hidden">
            <div class="max-w-7xl mx-auto">
                <div class="relative z-10 pb-8 bg-gray-800 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                    <div class="pt-10 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
                        <div class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                            <div class="sm:text-center lg:text-left">
                                <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                                    <span class="blocbk">Layanan Unggulan</span>
                                    <span class="block text-gray-300">Desa Patumbak 1</span>
                                </h1>
                                <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                    Dukungan komprehensif untuk pengembangan ekonomi desa melalui tiga sektor utama.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{ asset('images/fotokdp.jpeg') }}" alt="Desa Sukamaju">
            </div>
        </div>

        <!-- Navigation Tabs -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="border-b border-gray-200">
                <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                    <button id="pertanian-tab" class="border-gray-600 text-gray-700 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                        Pertanian
                    </button>
                    <button id="peternakan-tab" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                        Peternakan
                    </button>
                    <button id="umkm-tab" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                        UMKM
                    </button>
                </nav>
            </div>
        </div>

        <!-- Pertanian Section -->
        <div id="pertanian-content" class="tab-content py-12 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800">Layanan Sektor Pertanian</h2>
                    <div class="w-20 h-1 bg-gray-600 mx-auto mt-4 mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                        Dukungan penuh untuk pengembangan pertanian modern dan berkelanjutan di Desa Sukamaju
                    </p>
                </div>

                <!-- Highlight Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                    <div class="bg-gradient-to-br from-gray-100 to-white rounded-xl shadow-sm overflow-hidden border border-gray-200 transform transition hover:-translate-y-1 hover:shadow-md">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-gray-200 p-2 rounded-lg mr-4">
                                    <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800">Penyuluhan Modern</h3>
                            </div>
                            <p class="text-gray-600">Teknik budidaya terkini, pengendalian hama terpadu, dan peningkatan produktivitas lahan</p>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-gray-100 to-white rounded-xl shadow-sm overflow-hidden border border-gray-200 transform transition hover:-translate-y-1 hover:shadow-md">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-gray-200 p-2 rounded-lg mr-4">
                                    <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800">Bibit Unggul</h3>
                            </div>
                            <p class="text-gray-600">Penyediaan bibit tanaman unggul dengan kualitas terjamin dan harga bersubsidi</p>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-gray-100 to-white rounded-xl shadow-sm overflow-hidden border border-gray-200 transform transition hover:-translate-y-1 hover:shadow-md">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-gray-200 p-2 rounded-lg mr-4">
                                    <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800">Pemasaran Digital</h3>
                            </div>
                            <p class="text-gray-600">Jaringan pemasaran hingga ke pasar ekspor melalui platform digital dan BUMDes</p>
                        </div>
                    </div>
                </div>

                <!-- Produk Unggulan -->
                <div class="mb-16">
                    <h3 class="text-2xl font-semibold text-center text-gray-800 mb-8">Komoditas Unggulan Pertanian</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
                        <!-- Cengkeh -->
                        <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow overflow-hidden border border-gray-200">
                            <div class="h-32 bg-gray-100 flex items-center justify-center p-4">
                                <img src="{{ asset('images/cengkeh.png') }}" alt="Cengkeh" class="h-20 object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h4 class="font-medium text-gray-800">Cengkeh</h4>
                                <p class="text-sm text-gray-600 mt-1">Kualitas premium untuk pasar ekspor</p>
                            </div>
                        </div>
                        
                        <!-- Kopi -->
                        <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow overflow-hidden border border-gray-200">
                            <div class="h-32 bg-gray-100 flex items-center justify-center p-4">
                                <img src="{{ asset('images/kopi.png') }}" alt="Kopi" class="h-20 object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h4 class="font-medium text-gray-800">Kopi</h4>
                                <p class="text-sm text-gray-600 mt-1">Arabika dan Robusta khas dataran tinggi</p>
                            </div>
                        </div>
                        
                        <!-- Vanili -->
                        <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow overflow-hidden border border-gray-200">
                            <div class="h-32 bg-gray-100 flex items-center justify-center p-4">
                                <img src="{{ asset('images/vanili.jpg') }}" alt="Vanili" class="h-20 object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h4 class="font-medium text-gray-800">Vanili</h4>
                                <p class="text-sm text-gray-600 mt-1">Grade A dengan kadar vanillin tinggi</p>
                            </div>
                        </div>
                        
                        <!-- Kelapa -->
                        <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow overflow-hidden border border-gray-200">
                            <div class="h-32 bg-gray-100 flex items-center justify-center p-4">
                                <img src="{{ asset('images/kelapa.png') }}" alt="Kelapa" class="h-20 object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h4 class="font-medium text-gray-800">Kelapa</h4>
                                <p class="text-sm text-gray-600 mt-1">Segar dan berbagai produk olahan</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="bg-gray-700 rounded-xl p-8 text-center text-white">
                    <h3 class="text-2xl font-bold mb-4">Tertarik Untuk Bekerja Sama</h3>
                    <p class="mb-6 max-w-2xl mx-auto">Hubungi Kami Dengan Cara Klik Tombol Berikut</p>
                    <button class="bg-white text-gray-800 font-semibold py-2 px-6 rounded-lg hover:bg-gray-100 transition">
                        Hubungi Kami
                    </button>
                </div>
            </div>
        </div>

        <!-- Peternakan Section (Hidden by default) -->
        <div id="peternakan-content" class="tab-content py-12 bg-gray-100 hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800">Layanan Sektor Peternakan</h2>
                    <div class="w-20 h-1 bg-gray-600 mx-auto mt-4 mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                        Pengembangan peternakan modern dan berkelanjutan untuk kesejahteraan warga Desa Sukamaju
                    </p>
                </div>

                <!-- Highlight Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                    <div class="bg-gradient-to-br from-gray-100 to-white rounded-xl shadow-sm overflow-hidden border border-gray-200 transform transition hover:-translate-y-1 hover:shadow-md">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-gray-200 p-2 rounded-lg mr-4">
                                    <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800">Pelatihan Peternakan</h3>
                            </div>
                            <p class="text-gray-600">Teknik pemeliharaan ternak modern, pencegahan penyakit, dan peningkatan produktivitas</p>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-gray-100 to-white rounded-xl shadow-sm overflow-hidden border border-gray-200 transform transition hover:-translate-y-1 hover:shadow-md">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-gray-200 p-2 rounded-lg mr-4">
                                    <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800">Bibit Ternak Unggul</h3>
                            </div>
                            <p class="text-gray-600">Penyediaan bibit ternak sehat dengan kualitas unggul dan harga bersubsidi</p>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-gray-100 to-white rounded-xl shadow-sm overflow-hidden border border-gray-200 transform transition hover:-translate-y-1 hover:shadow-md">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-gray-200 p-2 rounded-lg mr-4">
                                    <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800">Kesehatan Hewan</h3>
                            </div>
                            <p class="text-gray-600">Layanan kesehatan hewan dan vaksinasi rutin oleh dokter hewan desa</p>
                        </div>
                    </div>
                </div>

                <!-- Produk Unggulan -->
                <div class="mb-16">
                    <h3 class="text-2xl font-semibold text-center text-gray-800 mb-8">Komoditas Unggulan Peternakan</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
                        <!-- Sapi -->
                        <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow overflow-hidden border border-gray-200">
                            <div class="h-32 bg-gray-100 flex items-center justify-center p-4">
                                <img src="{{ asset('images/sapi.png') }}" alt="Sapi" class="h-20 object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h4 class="font-medium text-gray-800">Sapi Potong</h4>
                                <p class="text-sm text-gray-600 mt-1">Kualitas daging premium</p>
                            </div>
                        </div>
                        
                        <!-- Ayam -->
                        <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow overflow-hidden border border-gray-200">
                            <div class="h-32 bg-gray-100 flex items-center justify-center p-4">
                                <img src="{{ asset('images/ayam.png') }}" alt="Ayam" class="h-20 object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h4 class="font-medium text-gray-800">Ayam Kampung</h4>
                                <p class="text-sm text-gray-600 mt-1">Organik dan sehat</p>
                            </div>
                        </div>
                        
                        <!-- Kambing -->
                        <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow overflow-hidden border border-gray-200">
                            <div class="h-32 bg-gray-100 flex items-center justify-center p-4">
                                <img src="{{ asset('images/kambing.png') }}" alt="Kambing" class="h-20 object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h4 class="font-medium text-gray-800">Kambing</h4>
                                <p class="text-sm text-gray-600 mt-1">Ternak dan qurban</p>
                            </div>
                        </div>
                        
                        <!-- Telur -->
                        <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow overflow-hidden border border-gray-200">
                            <div class="h-32 bg-gray-100 flex items-center justify-center p-4">
                                <img src="{{ asset('images/telur.png') }}" alt="Telur" class="h-20 object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h4 class="font-medium text-gray-800">Telur Ayam</h4>
                                <p class="text-sm text-gray-600 mt-1">Segar dan bergizi tinggi</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="bg-gray-700 rounded-xl p-8 text-center text-white">
                    <h3 class="text-2xl font-bold mb-4">Tertarik Untuk Bekerja Sama?</h3>
                    <p class="mb-6 max-w-2xl mx-auto">Hubungi kami untuk informasi lebih lanjut tentang layanan kami.</p>
                    <button class="bg-white text-gray-800 font-semibold py-2 px-6 rounded-lg hover:bg-gray-100 transition">
                        Hubungi Kami
                    </button>
                </div>
            </div>
        </div>

        <!-- UMKM Section (Hidden by default) -->
        <div id="umkm-content" class="tab-content py-12 bg-gray-50 hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800">Layanan Sektor UMKM</h2>
                    <div class="w-20 h-1 bg-gray-600 mx-auto mt-4 mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                        Pengembangan usaha mikro, kecil, dan menengah untuk penguatan ekonomi desa
                    </p>
                </div>

                <!-- Highlight Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                    <div class="bg-gradient-to-br from-gray-100 to-white rounded-xl shadow-sm overflow-hidden border border-gray-200 transform transition hover:-translate-y-1 hover:shadow-md">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-gray-200 p-2 rounded-lg mr-4">
                                    <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800">Pelatihan Kewirausahaan</h3>
                            </div>
                            <p class="text-gray-600">Pelatihan manajemen usaha, pemasaran digital, dan pengembangan produk</p>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-gray-100 to-white rounded-xl shadow-sm overflow-hidden border border-gray-200 transform transition hover:-translate-y-1 hover:shadow-md">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-gray-200 p-2 rounded-lg mr-4">
                                    <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800">Akses Permodalan</h3>
                            </div>
                            <p class="text-gray-600">Fasilitasi akses modal usaha melalui KUR dan program pembiayaan lainnya</p>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-gray-100 to-white rounded-xl shadow-sm overflow-hidden border border-gray-200 transform transition hover:-translate-y-1 hover:shadow-md">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-gray-200 p-2 rounded-lg mr-4">
                                    <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800">Pemasaran Digital</h3>
                            </div>
                            <p class="text-gray-600">Pendampingan pemasaran online melalui marketplace dan media sosial</p>
                        </div>
                    </div>
                </div>

                <!-- Produk Unggulan -->
                <div class="mb-16">
                    <h3 class="text-2xl font-semibold text-center text-gray-800 mb-8">Produk Unggulan UMKM</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
                        <!-- Kerajinan -->
                        @foreach($umkm as $item)
                        <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow overflow-hidden border border-gray-200">
                            <div class="h-32 bg-gray-100 flex items-center justify-center p-4">
                                <img src="{{ $item->foto }}" alt="Kerajinan" class="h-20 object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h4 class="font-medium text-gray-800">{{$item->nama_usaha}}</h4>
                                <p class="text-sm text-gray-600 mt-1">Anyaman dan ukiran khas</p>
                            </div>
                        </div>
                        @endforeach
                        
                        <!-- Makanan -->
                        <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow overflow-hidden border border-gray-200">
                            <div class="h-32 bg-gray-100 flex items-center justify-center p-4">
                                <img src="{{ asset('images/makanan.png') }}" alt="Makanan" class="h-20 object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h4 class="font-medium text-gray-800">Makanan Olahan</h4>
                                <p class="text-sm text-gray-600 mt-1">Khas desa dengan cita rasa unik</p>
                            </div>
                        </div>
                        
                        <!-- Minuman -->
                        <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow overflow-hidden border border-gray-200">
                            <div class="h-32 bg-gray-100 flex items-center justify-center p-4">
                                <img src="{{ asset('images/minuman.png') }}" alt="Minuman" class="h-20 object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h4 class="font-medium text-gray-800">Minuman Tradisional</h4>
                                <p class="text-sm text-gray-600 mt-1">Dari bahan alami berkualitas</p>
                            </div>
                        </div>
                        
                        <!-- Fashion -->
                        <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow overflow-hidden border border-gray-200">
                            <div class="h-32 bg-gray-100 flex items-center justify-center p-4">
                                <img src="{{ asset('images/fashion.png') }}" alt="Fashion" class="h-20 object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h4 class="font-medium text-gray-800">Fashion Lokal</h4>
                                <p class="text-sm text-gray-600 mt-1">Busana dengan motif tradisional</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="bg-gray-700 rounded-xl p-8 text-center text-white">
                    <h3 class="text-2xl font-bold mb-4">Tertarik Untuk Bekerja Sama?</h3>
                    <p class="mb-6 max-w-2xl mx-auto">Hubungi kami untuk informasi lebih lanjut tentang UMKM kami.</p>
                    <button class="bg-white text-gray-800 font-semibold py-2 px-6 rounded-lg hover:bg-gray-100 transition">
                        Hubungi Kami
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Tab switching functionality
        document.getElementById('pertanian-tab').addEventListener('click', function() {
            switchTab('pertanian');
        });

        document.getElementById('peternakan-tab').addEventListener('click', function() {
            switchTab('peternakan');
        });

        document.getElementById('umkm-tab').addEventListener('click', function() {
            switchTab('umkm');
        });

        function switchTab(tabName) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });

            // Remove active class from all tabs
            document.querySelectorAll('nav button').forEach(tab => {
                tab.classList.remove('border-gray-600', 'text-gray-700');
                tab.classList.add('border-transparent', 'text-gray-500');
            });

            // Show selected tab content
            document.getElementById(`${tabName}-content`).classList.remove('hidden');

            // Add active class to selected tab
            document.getElementById(`${tabName}-tab`).classList.remove('border-transparent', 'text-gray-500');
            document.getElementById(`${tabName}-tab`).classList.add('border-gray-600', 'text-gray-700');
        }
    </script>
</x-layout>