<x-layout>
    <main class="bg-gray-50 min-h-screen font-sans antialiased">

        <!-- Hero Section with Image Accordion -->
        <div class="relative overflow-hidden h-screen max-h-[800px]">
            <!-- Slide Accordion Background -->
            <div class="absolute inset-0 flex">
                <!-- Slide 1 -->
                <div class="accordion-slide flex-1 bg-[url('https://images.unsplash.com/photo-1586773860418-d37222d8fce3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1473&q=80')] bg-cover bg-center transition-all duration-1000 ease-in-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 to-gray-900/40"></div>
                </div>
                
                <!-- Slide 2 -->
                <div class="accordion-slide flex-1 bg-[url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')] bg-cover bg-center transition-all duration-1000 ease-in-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 to-gray-900/40"></div>
                </div>
                
                <!-- Slide 3 -->
                <div class="accordion-slide flex-1 bg-[url('https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')] bg-cover bg-center transition-all duration-1000 ease-in-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 to-gray-900/40"></div>
                </div>
            </div>

            <!-- Content Container -->
            <div class="max-w-7xl mx-auto relative z-10 text-white h-full flex flex-col justify-center px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight animate-fade-in-down">
                        Selamat
                        @php
                            $hour = date('G');
                            if ($hour >= 5 && $hour < 11) {
                                echo 'Pagi';
                            } elseif ($hour >= 11 && $hour < 15) {
                                echo 'Siang';
                            } elseif ($hour >= 15 && $hour < 18) {
                                echo 'Sore';
                            } else {
                                echo 'Malam';
                            }
                        @endphp, <span class="text-gray-300 font-semibold">{{ Auth::user()->name ?? 'Warga Desa Patumbak 1' }}</span>!
                    </h1>
                    <p class="mt-6 max-w-3xl mx-auto text-lg sm:text-xl text-gray-200 leading-relaxed font-light animate-fade-in-up">
                        Transformasi menuju masa depan digital Desa Patumbak 1 dimulai di sini. Temukan informasi vital, ajukan layanan, dan saksikan perkembangan desa kami.
                    </p>

                    <div class="mt-12 flex flex-col sm:flex-row justify-center gap-4 animate-pop-in">
                        <a href="{{ route('layanan.surat-menyurat') }}" class="inline-flex items-center justify-center px-8 py-3 sm:px-10 sm:py-4 text-lg font-semibold rounded-full shadow-lg text-gray-900 bg-white hover:bg-gray-100 transition duration-300 transform hover:-translate-y-1 hover:scale-[1.02] group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-gray-700 group-hover:text-gray-800" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6z" />
                            </svg>
                            Ajukan Surat Online
                            <svg class="h-5 w-5 ml-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#" class="inline-flex items-center justify-center px-8 py-3 sm:px-10 sm:py-4 text-lg font-semibold rounded-full shadow-lg border-2 border-white text-white bg-transparent hover:bg-white/10 transition duration-300 transform hover:-translate-y-1 hover:scale-[1.02] group animation-delay-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                            </svg>
                            Lihat Semua Agenda
                            <svg class="h-5 w-5 ml-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Scroll indicator -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </div>
        </div>

        <!-- Stats Cards Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative z-20">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
                <!-- Population Card -->
                <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2 group flex flex-col justify-between animate-fade-in-right delay-100 border border-gray-100 overflow-hidden">
                    <div class="p-6 sm:p-8">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-gray-700 rounded-xl p-4 text-white group-hover:bg-gray-800 transition-colors shadow-md">
                                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <div class="ml-5">
                                <dt class="text-base font-medium text-gray-600">Total Penduduk</dt>
                                <dd class="text-2xl font-bold text-gray-800 mt-1" data-target-value="{{ $beranda[0]->total_penduduk }}" data-unit=" Jiwa">0</dd>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-6 sm:px-8 py-4 border-t border-gray-200">
                        <a href="https://kampungkb.bkkbn.go.id/kampung/53004/patumbak-i" class="text-sm font-medium text-gray-700 hover:text-gray-900 flex items-center justify-between group-hover:underline">
                            <span>Lihat Detail Statistik</span>
                            <svg class="h-5 w-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Budget Card -->
                <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2 group flex flex-col justify-between animate-fade-in-right delay-200 border border-gray-100 overflow-hidden">
                    <div class="p-6 sm:p-8">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-gray-700 rounded-xl p-4 text-white group-hover:bg-gray-800 transition-colors shadow-md">
                                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-5">
                                <dt class="text-base font-medium text-gray-600">Anggaran Desa</dt>
                                <dd class="text-2xl font-bold text-gray-800 mt-1">Rp. <span data-target-value="{{ $beranda[0]->anggaran_desa }}" data-unit="">0</span></dd>
                            </div>
                        </div>
                        <div class="mt-6">
                            @php
                                $percentage_absorbed = ($beranda[0]->anggaran_desa > 0) ? round(($beranda[0]->anggaran_terserap / $beranda[0]->anggaran_desa) * 100) : 0;
                            @endphp
                            <div class="w-full bg-gray-200 rounded-full h-2.5 overflow-hidden">
                                <div class="bg-gray-700 h-2.5 rounded-full transition-all duration-1000 ease-out" style="width: {{ $percentage_absorbed }}%" id="budget-progress-bar"></div>
                            </div>
                            <div class="flex justify-between text-xs text-gray-600 mt-2 font-medium">
                                <span>Terserap: <span class="font-semibold text-gray-700" id="budget-percentage">{{ $percentage_absorbed }}%</span></span>
                                <span>Sisa: Rp. <span class="font-semibold text-gray-700" id="budget-remaining">{{ number_format($beranda[0]->anggaran_desa - $beranda[0]->anggaran_terserap, 0, ',', '.') }}</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-6 sm:px-8 py-4 border-t border-gray-200">
                        <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-900 flex items-center justify-between group-hover:underline">
                            <span>Pantau Anggaran Lengkap</span>
                            <svg class="h-5 w-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Programs Card -->
                <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2 group flex flex-col justify-between animate-fade-in-right delay-300 border border-gray-100 overflow-hidden">
                    <div class="p-6 sm:p-8">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-gray-700 rounded-xl p-4 text-white group-hover:bg-gray-800 transition-colors shadow-md">
                                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </div>
                            <div class="ml-5">
                                <dt class="text-base font-medium text-gray-600">Program Berjalan</dt>
                                <dd class="text-2xl font-bold text-gray-800 mt-1" data-target-value="{{ $beranda[0]->jumlah_program }}" data-unit=""></dd>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-gray-600 leading-relaxed">Selalu terinformasi tentang program-program desa yang sedang berjalan dan capaiannya.</p>
                    </div>
                    <div class="bg-gray-50 px-6 sm:px-8 py-4 border-t border-gray-200">
                        <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-900 flex items-center justify-between group-hover:underline">
                            <span>Telusuri Semua Program</span>
                            <svg class="h-5 w-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- UMKM Card -->
                <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2 group flex flex-col justify-between animate-fade-in-right delay-400 border border-gray-100 overflow-hidden">
                    <div class="p-6 sm:p-8">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-gray-700 rounded-xl p-4 text-white group-hover:bg-gray-800 transition-colors shadow-md">
                                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <div class="ml-5">
                                <dt class="text-base font-medium text-gray-600">UMKM Terdaftar</dt>
                                <dd class="text-3xl font-bold text-gray-800 mt-1" data-target-value="{{ $beranda[0]->jumlah_umkm }}" data-unit=""></dd>
                            </div>
                        </div>
                        <div class="mt-6">
                            <button class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-full shadow-sm text-white bg-gray-700 hover:bg-gray-800 transition duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                Lihat Peta UMKM
                            </button>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-6 sm:px-8 py-4 border-t border-gray-200">
                        <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-900 flex items-center justify-between group-hover:underline">
                            <span>Daftar UMKM Baru</span>
                            <svg class="h-5 w-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <hr class="my-16 border-gray-200">

            <!-- Tabs Section -->
            <section class="animate-fade-in-up delay-500">
                <div class="mb-10 flex justify-center">
                    <div class="inline-flex rounded-full shadow-sm bg-white p-1 space-x-1 border border-gray-200">
                        <button class="tab-button inline-flex items-center px-6 py-3 sm:px-8 sm:py-4 border border-transparent text-sm sm:text-base font-medium rounded-full text-white bg-gray-700 hover:bg-gray-800 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" data-target="prestasi-desa-section">
                            <svg class="h-5 w-5 sm:h-6 sm:w-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Prestasi Desa
                        </button>
                        <button class="tab-button inline-flex items-center px-6 py-3 sm:px-8 sm:py-4 border border-transparent text-sm sm:text-base font-medium rounded-full text-gray-700 hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" data-target="agenda-terkini-section">
                            <svg class="h-5 w-5 sm:h-6 sm:w-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                            Agenda Terkini
                        </button>
                        <button class="tab-button inline-flex items-center px-6 py-3 sm:px-8 sm:py-4 border border-transparent text-sm sm:text-base font-medium rounded-full text-gray-700 hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" data-target="layanan-online-section">
                            <svg class="h-5 w-5 sm:h-6 sm:w-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                            Layanan Online
                        </button>
                    </div>
                </div>

                <!-- Prestasi Desa Tab -->
                <div id="prestasi-desa-section" class="bg-white rounded-2xl shadow-md p-8 sm:p-10 mb-8 active-tab-content transform transition-all duration-500 ease-out translate-y-0 opacity-100 border border-gray-200">
                    <div class="max-w-5xl mx-auto">
                        <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-6 pb-4 border-b-2 border-gray-200">Prestasi & Keberhasilan Desa</h2>
                        <p class="text-lg text-gray-700 mb-8 leading-relaxed">Jelajahi berbagai penghargaan dan pencapaian gemilang yang telah diraih oleh Desa Patumbak 1, bukti nyata kemajuan dan dedikasi kami.</p>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <div class="bg-gray-50 rounded-xl p-6 shadow-sm hover:shadow-md transition duration-300 border-l-4 border-gray-600 animate-fade-in-up delay-600">
                                <div class="flex items-start">
                                    <span class="rounded-lg inline-flex p-3 bg-gray-200 text-gray-700 shadow-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                    <div class="ml-5">
                                        <h3 class="text-xl font-bold text-gray-800 leading-tight">Penghargaan: <span class="text-gray-600">{{ Str::limit($beranda[0]->prestasi, 30, '...') }}</span></h3>
                                        <p class="mt-2 text-gray-700 text-base leading-relaxed">{{ $beranda[0]->prestasi }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded-xl p-6 shadow-sm hover:shadow-md transition duration-300 border-l-4 border-gray-500 animate-fade-in-up delay-700">
                                <div class="flex items-start">
                                    <span class="rounded-lg inline-flex p-3 bg-gray-200 text-gray-700 shadow-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                        </svg>
                                    </span>
                                    <div class="ml-5">
                                        <h3 class="text-xl font-bold text-gray-800 leading-tight">Keberhasilan Utama: <span class="text-gray-600">{{ Str::limit($beranda[0]->keberhasilan, 30, '...') }}</span></h3>
                                        <p class="mt-2 text-gray-700 text-base leading-relaxed">{{ $beranda[0]->keberhasilan }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Agenda Terkini Tab -->
                <div id="agenda-terkini-section" class="bg-white rounded-2xl shadow-md p-8 sm:p-10 mb-8 hidden tab-content transform transition-all duration-500 ease-out -translate-y-4 opacity-0 border border-gray-200">
                    <div class="max-w-5xl mx-auto">
                        <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-6 pb-4 border-b-2 border-gray-200">Aktivitas & Agenda Terkini</h2>
                        <p class="text-lg text-gray-700 mb-8 leading-relaxed">Jangan lewatkan setiap momen! Ikuti informasi terbaru mengenai agenda dan aktivitas penting yang sedang berlangsung di Desa Patumbak 1.</p>
                        <ul class="divide-y divide-gray-200 bg-gray-50 rounded-xl shadow-sm overflow-hidden">
                            <li class="px-6 py-5 hover:bg-gray-100 transition duration-200 ease-in-out flex items-start space-x-4 animate-fade-in-up delay-800">
                                <div class="flex-shrink-0">
                                    <div class="bg-gray-200 p-3 rounded-lg text-gray-700 shadow-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-lg font-bold text-gray-800 leading-snug">{{ Str::limit($beranda[0]->aktivitas_terkini, 80, '...') }}</p>
                                    <p class="text-base text-gray-700 mt-1">{{ $beranda[0]->aktivitas_terkini }}</p>
                                    <span class="mt-2 text-sm text-gray-500 block">
                                        <time datetime="2025-07-15">15 Juli 2025</time>
                                    </span>
                                </div>
                            </li>
                        </ul>
                        <div class="mt-10 text-center">
                            <a href="#" class="inline-flex items-center px-6 py-3 sm:px-8 sm:py-4 border border-transparent text-base font-semibold rounded-full shadow-md text-white bg-gray-700 hover:bg-gray-800 transition duration-300 transform hover:-translate-y-0.5">
                                Lihat Semua Agenda
                                <svg class="h-5 w-5 ml-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Layanan Online Tab -->
                <div id="layanan-online-section" class="bg-white rounded-2xl shadow-md p-8 sm:p-10 mb-8 hidden tab-content transform transition-all duration-500 ease-out -translate-y-4 opacity-0 border border-gray-200">
                    <div class="max-w-5xl mx-auto">
                        <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-6 pb-4 border-b-2 border-gray-200">Pusat Layanan Online Desa</h2>
                        <p class="text-lg text-gray-700 mb-8 leading-relaxed">Permudah urusan Anda dengan berbagai layanan desa yang kini dapat diakses secara online, kapan saja dan di mana saja.</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <a href="{{ route('layanan.surat-menyurat') }}" class="group flex flex-col items-center justify-center p-6 border border-gray-200 rounded-xl shadow-sm hover:shadow-md hover:bg-gray-50 transition duration-300 text-center transform hover:-translate-y-1 animate-fade-in-up delay-900">
                                <div class="bg-gray-200 p-4 rounded-lg text-gray-700 group-hover:bg-gray-300 transition-colors shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2h2V1a1 1 0 10-2 0v2H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2h-2V1a1 1 0 10-2 0v2H6a2 2 0 00-2 2zm3 8a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h3 class="mt-5 text-xl font-bold text-gray-800 group-hover:text-gray-700">Surat-Menyurat Online</h3>
                                <p class="mt-2 text-gray-600 text-base max-w-xs">Ajukan berbagai jenis surat keterangan dengan mudah dan pantau statusnya secara real-time.</p>
                            </a>
                            <a href="{{ route('kontak.create') }}" class="group flex flex-col items-center justify-center p-6 border border-gray-200 rounded-xl shadow-sm hover:shadow-md hover:bg-gray-50 transition duration-300 text-center transform hover:-translate-y-1 animate-fade-in-up delay-1000">
                                <div class="bg-gray-200 p-4 rounded-lg text-gray-700 group-hover:bg-gray-300 transition-colors shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.041 0 01-4.17-.959L2 17l1.649-3.414A7.001 7.001 0 012 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM9.009 5.518a1 1 0 00-1.818.464l.872 2.766a1 1 0 00.997.747h2.89a1 1 0 00.997-.747l.872-2.766a1 1 0 00-1.818-.464L10 6.66l-1.009-.942z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h3 class="mt-5 text-xl font-bold text-gray-800 group-hover:text-gray-700">Layanan Pengaduan</h3>
                                <p class="mt-2 text-gray-600 text-base max-w-xs">Sampaikan aspirasi atau keluhan Anda langsung kepada pemerintah desa untuk solusi cepat dan transparan.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');
            const statElements = document.querySelectorAll('[data-target-value]');

            // Function to animate numbers
            const animateNumber = (element, start, end, duration, unit = '') => {
                let startTime = null;
                const step = (currentTime) => {
                    if (!startTime) startTime = currentTime;
                    const progress = Math.min((currentTime - startTime) / duration, 1);
                    const currentValue = Math.floor(progress * (end - start) + start);
                    element.textContent = new Intl.NumberFormat('id-ID').format(currentValue) + unit;
                    if (progress < 1) {
                        requestAnimationFrame(step);
                    }
                };
                requestAnimationFrame(step);
            };

            // Function to show/hide tabs
            const showTab = (targetId) => {
                tabContents.forEach(content => {
                    if (content.id === targetId) {
                        content.classList.remove('hidden', '-translate-y-4', 'opacity-0');
                        content.classList.add('active-tab-content', 'translate-y-0', 'opacity-100');
                    } else {
                        content.classList.add('hidden', '-translate-y-4', 'opacity-0');
                        content.classList.remove('active-tab-content', 'translate-y-0', 'opacity-100');
                    }
                });

                tabButtons.forEach(btn => {
                    if (btn.dataset.target === targetId) {
                        btn.classList.remove('text-gray-700', 'hover:text-gray-900', 'hover:bg-gray-100');
                        btn.classList.add('text-white', 'bg-gray-700', 'hover:bg-gray-800');
                    } else {
                        btn.classList.remove('text-white', 'bg-gray-700', 'hover:bg-gray-800');
                        btn.classList.add('text-gray-700', 'hover:text-gray-900', 'hover:bg-gray-100');
                    }
                });
            };

            // Intersection Observer for animations
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        if (entry.target.hasAttribute('data-target-value')) {
                            const targetValue = parseInt(entry.target.dataset.targetValue);
                            const unit = entry.target.dataset.unit;
                            animateNumber(entry.target, 0, targetValue, 1500, unit);
                            observer.unobserve(entry.target);
                        }
                        if (entry.target.id === 'budget-progress-bar') {
                            const percentage = parseFloat(entry.target.style.width);
                            entry.target.style.width = percentage + '%';
                            observer.unobserve(entry.target);
                        }
                    }
                });
            }, observerOptions);

            statElements.forEach(el => observer.observe(el));
            const budgetProgressBar = document.getElementById('budget-progress-bar');
            if (budgetProgressBar) {
                observer.observe(budgetProgressBar);
            }

            showTab('prestasi-desa-section');

            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetId = this.dataset.target;
                    showTab(targetId);

                    const targetSection = document.getElementById(targetId);
                    if (targetSection) {
                        targetSection.scrollIntoView({ behavior: 'smooth', block: 'start', inline: 'nearest' });
                    }
                });
            });

            // Image accordion animation
            const slides = document.querySelectorAll('.accordion-slide');
            let currentSlide = 0;
            
            function rotateSlides() {
                // Reset all slides
                slides.forEach(slide => {
                    slide.style.flex = '1';
                });
                
                // Expand current slide
                slides[currentSlide].style.flex = '3';
                
                // Move to next slide
                currentSlide = (currentSlide + 1) % slides.length;
            }
            
            // Start rotation (every 5 seconds)
            setInterval(rotateSlides, 5000);
            rotateSlides(); // Initial call
        });
    </script>
</x-layout>

<style>
    /* Hero Section Animations */
    .animate-fade-in-down {
        animation: fadeInDown 1s ease-out forwards;
    }

    @keyframes fadeInDown {
        0% {
            opacity: 0;
            transform: translateY(-30px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-up {
        animation: fadeInUp 1s ease-out 0.3s forwards;
        opacity: 0;
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-pop-in {
        animation: popIn 0.6s cubic-bezier(0.2, 0.8, 0.4, 1.4) 0.6s forwards;
        opacity: 0;
    }

    @keyframes popIn {
        0% {
            opacity: 0;
            transform: scale(0.8);
        }
        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    .animation-delay-200 {
        animation-delay: 0.8s;
    }

    /* Card Animations */
    .animate-fade-in-right {
        animation: fadeInRight 0.8s ease-out forwards;
        opacity: 0;
    }

    @keyframes fadeInRight {
        0% {
            opacity: 0;
            transform: translateX(-30px);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* Staggered delays for the cards */
    .animate-fade-in-right.delay-100 { animation-delay: 0.1s; }
    .animate-fade-in-right.delay-200 { animation-delay: 0.2s; }
    .animate-fade-in-right.delay-300 { animation-delay: 0.3s; }
    .animate-fade-in-right.delay-400 { animation-delay: 0.4s; }

    /* Tab content animations */
    .tab-content.hidden {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.5s ease-out, transform 0.5s ease-out;
    }

    .tab-content.active-tab-content {
        opacity: 1;
        transform: translateY(0);
    }

    /* Image accordion styles */
    .accordion-slide {
        position: relative;
        transition: flex 0.7s cubic-bezier(0.4, 0, 0.2, 1);
        will-change: flex;
    }
    
    /* Scroll indicator animation */
    @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }
    
    .animate-bounce {
        animation: bounce 2s infinite;
    }
</style>