<x-layout title="Pendidikan Desa Patumbak 1">
<div class="bg-gray-50">
        <!-- Hero Section -->
        <div class="relative bg-gray-800 overflow-hidden">
            <div class="max-w-7xl mx-auto">
                <div class="relative z-10 pb-8 bg-gray-800 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                    <div class="pt-10 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
                        <div class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                            <div class="sm:text-center lg:text-left">
                                <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                                    <span class="block">Jenjang Pendidikan</span>
                                    <span class="block text-gray-300">Desa Patumbak 1</span>
                                </h1>
                                <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                    Membangun generasi penerus melalui pendidikan berkualitas dari dasar hingga tinggi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{ asset('images/pendidikan.jpg') }}" alt="Pendidikan Desa">
            </div>
        </div>

        <!-- Navigation Tabs -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="border-b border-gray-200">
                <nav class="-mb-px flex space-x-8 overflow-x-auto py-4" aria-label="Tabs">
                    <button id="tk-tab" class="border-gray-600 text-gray-700 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm active-tab">
                        Taman Kanak-Kanak
                    </button>
                    <button id="sd-tab" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm">
                        Sekolah Dasar
                    </button>
                    <button id="smp-tab" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm">
                        SMP
                    </button>
                    <button id="sma-tab" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm">
                        SMA/SMK
                    </button>
                    <button id="pt-tab" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm">
                        Perguruan Tinggi
                    </button>
                </nav>
            </div>
        </div>

        <!-- TK Section -->
        <div id="tk-content" class="tab-content py-12 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800">Pendidikan Anak Usia Dini</h2>
                    <div class="w-20 h-1 bg-gray-600 mx-auto mt-4 mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                        Membangun fondasi pendidikan yang kuat sejak dini untuk anak-anak Desa Patumbak 1
                    </p>
                </div>

                <!-- Highlight Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                    @forelse ($pendidikan->where('tingkat_pendidikan', 'TK/PAUD') as $item)
                    <div class="bg-gradient-to-br from-gray-100 to-white rounded-xl shadow-sm overflow-hidden border border-gray-200 transform transition hover:-translate-y-1 hover:shadow-md">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-gray-200 p-2 rounded-lg mr-4">
                                    <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800">{{ $item->nama_institusi }}</h3>
                            </div>
                            <p class="text-gray-600">Pendidikan anak usia dini dengan metode belajar sambil bermain untuk usia 3-6 tahun</p>
                            <div class="mt-4 flex items-center text-sm text-gray-500">
                                <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Senin-Jumat, 08.00-11.00
                            </div>
                            <div class="mt-4">
                                <h4 class="font-medium text-gray-800 mb-2">Informasi Sekolah</h4>
                                <p class="text-gray-600">Berdiri Sejak {{ $item->tahun_berdiri }}</p>
                                <p class="text-gray-500">Alamat : {{ $item->alamat }}</p>
                            </div>
                            <div class="mt-4">
                                <h4 class="font-medium text-gray-800 mb-2">Fasilitas</h4>
                                <ul class="text-gray-600 space-y-2">
                                    <li class="flex items-start">
                                        <svg class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        Ruang kelas nyaman dan ber-AC
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        Area bermain outdoor
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        Perpustakaan mini
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-3 text-center text-gray-500 py-8">
                        Tidak ada data TK/PAUD yang tersedia.
                    </div>
                    @endforelse
                </div>

                <!-- CTA Section -->
                <div class="bg-gray-700 rounded-xl p-8 text-center text-white">
                    <h3 class="text-2xl font-bold mb-4">Tertarik Mendaftarkan Anak Anda di PAUD?</h3>
                    <p class="mb-6 max-w-2xl mx-auto">Daftar sekarang dan berikan pendidikan terbaik untuk buah hati Anda</p>
                    <button class="bg-white text-gray-800 font-semibold py-2 px-6 rounded-lg hover:bg-gray-100 transition">
                        Daftar Sekarang
                    </button>
                </div>
            </div>
        </div>

        <!-- SD Section (Hidden by default) -->
        <!-- SD Section -->
        <div id="sd-content" class="tab-content py-12 bg-gray-100 hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800">Sekolah Dasar</h2>
                    <div class="w-20 h-1 bg-gray-600 mx-auto mt-4 mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                        Pendidikan dasar berkualitas untuk membentuk karakter dan pengetahuan dasar
                    </p>
                </div>

                <!-- Highlight Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                    @forelse ($pendidikan->where('tingkat_pendidikan', 'Sekolah Dasar') as $item)
                    <div class="bg-gradient-to-br from-gray-100 to-white rounded-xl shadow-sm overflow-hidden border border-gray-200 transform transition hover:-translate-y-1 hover:shadow-md">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-gray-200 p-2 rounded-lg mr-4">
                                    <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800">{{ $item->nama_institusi }}</h3>
                            </div>
                            <p class="text-gray-600">Sekolah dasar dengan kurikulum nasional dan pengembangan karakter</p>
                            <div class="mt-4 flex items-center text-sm text-gray-500">
                                <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Senin-Jumat, 07.00-12.30
                            </div>
                            <div class="mt-4">
                                <h4 class="font-medium text-gray-800 mb-2">Informasi Sekolah</h4>
                                <p class="text-gray-600">Berdiri Sejak {{ $item->tahun_berdiri }}</p>
                                <p class="text-gray-500">Alamat : {{ $item->alamat }}</p>
                                <p class="text-gray-500">Akreditasi : {{ $item->akreditasi ?? 'A' }}</p>
                            </div>
                            <div class="mt-4">
                                <h4 class="font-medium text-gray-800 mb-2">Program Unggulan</h4>
                                <ul class="text-gray-600 space-y-2">
                                    <li class="flex items-start">
                                        <svg class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        Program Literasi Dasar
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        Ekstrakurikuler Pramuka
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        Pembelajaran Berbasis Proyek
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-3 text-center text-gray-500 py-8">
                        Tidak ada data Sekolah Dasar yang tersedia.
                    </div>
                    @endforelse
                </div>

                <!-- CTA Section -->
                <div class="bg-gray-700 rounded-xl p-8 text-center text-white">
                    <h3 class="text-2xl font-bold mb-4">Informasi Pendaftaran SD</h3>
                    <p class="mb-6 max-w-2xl mx-auto">Pendaftaran dibuka setiap tahun untuk calon siswa baru kelas 1</p>
                    <button class="bg-white text-gray-800 font-semibold py-2 px-6 rounded-lg hover:bg-gray-100 transition">
                        Lihat Persyaratan
                    </button>
                </div>
            </div>
        </div>

<!-- SMP Section -->
        <div id="smp-content" class="tab-content py-12 bg-gray-50 hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800">Sekolah Menengah Pertama</h2>
                    <div class="w-20 h-1 bg-gray-600 mx-auto mt-4 mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                        Pendidikan menengah pertama dengan pengembangan ilmu pengetahuan dan keterampilan
                    </p>
                </div>

                <!-- Highlight Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                    @forelse ($pendidikan->where('tingkat_pendidikan', 'SMP') as $item)
                    <div class="bg-gradient-to-br from-gray-100 to-white rounded-xl shadow-sm overflow-hidden border border-gray-200 transform transition hover:-translate-y-1 hover:shadow-md">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-gray-200 p-2 rounded-lg mr-4">
                                    <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800">{{ $item->nama_institusi }}</h3>
                            </div>
                            <p class="text-gray-600">Sekolah menengah pertama dengan kurikulum berbasis kompetensi</p>
                            <div class="mt-4 flex items-center text-sm text-gray-500">
                                <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Senin-Jumat, 07.00-14.00
                            </div>
                            <div class="mt-4">
                                <h4 class="font-medium text-gray-800 mb-2">Informasi Sekolah</h4>
                                <p class="text-gray-600">Berdiri Sejak {{ $item->tahun_berdiri }}</p>
                                <p class="text-gray-500">Alamat : {{ $item->alamat }}</p>
                                <p class="text-gray-500">Akreditasi : {{ $item->akreditasi ?? 'A' }}</p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-3 text-center text-gray-500 py-8">
                        Tidak ada data SMP yang tersedia.
                    </div>
                    @endforelse
                </div>

                <!-- CTA Section -->
                <div class="bg-gray-700 rounded-xl p-8 text-center text-white">
                    <h3 class="text-2xl font-bold mb-4">Penerimaan Peserta Didik Baru SMP</h3>
                    <p class="mb-6 max-w-2xl mx-auto">Tahun Ajaran 2023/2024 akan dibuka pada bulan Mei 2023</p>
                    <button class="bg-white text-gray-800 font-semibold py-2 px-6 rounded-lg hover:bg-gray-100 transition">
                        <a href="{{ route('kontak.index') }}" class="text-gray-800">Informasi Pendaftaran</a>
                    </button>
                </div>
            </div>
        </div>

<!-- SMA Section -->
        <div id="sma-content" class="tab-content py-12 bg-gray-100 hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800">Sekolah Menengah Atas/Kejuruan</h2>
                    <div class="w-20 h-1 bg-gray-600 mx-auto mt-4 mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                        Pendidikan menengah atas dengan berbagai pilihan jurusan untuk mempersiapkan masa depan
                    </p>
                </div>

                <!-- School Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                    @forelse ($pendidikan->whereIn('tingkat_pendidikan', ['SMA', 'SMK']) as $item)
                    <div class="bg-gradient-to-br from-gray-100 to-white rounded-xl shadow-sm overflow-hidden border border-gray-200 transform transition hover:-translate-y-1 hover:shadow-md">
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-xl font-semibold text-gray-800">{{ $item->nama_institusi }}</h3>
                                <span class="inline-block bg-gray-200 text-gray-800 text-xs px-2 py-1 rounded-full">
                                    Akreditasi: {{ $item->akreditasi ?? 'A' }}
                                </span>
                            </div>
                            <p class="text-gray-600 mb-4">
                                @if($item->tingkat_pendidikan == 'SMA')
                                    Sekolah menengah atas dengan berbagai program peminatan
                                @else
                                    Sekolah kejuruan dengan program studi yang relevan dengan industri
                                @endif
                            </p>
                            
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                {{ $item->alamat }}
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-2 text-center text-gray-500 py-8">
                        Tidak ada data SMA/SMK yang tersedia.
                    </div>
                    @endforelse
                </div>

                <!-- CTA Section -->
                <div class="bg-gray-700 rounded-xl p-8 text-center text-white">
                    <h3 class="text-2xl font-bold mb-4">Informasi Penerimaan Peserta Didik Baru</h3>
                    <p class="mb-6 max-w-2xl mx-auto">Tahun Ajaran 2023/2024 akan dibuka pendaftaran pada bulan Mei 2023</p>
                    <button class="bg-white text-gray-800 font-semibold py-2 px-6 rounded-lg hover:bg-gray-100 transition">
                        <a href="{{ route('kontak.index') }}">Lihat Jadwal</a>
                    </button>
                </div>
            </div>
        </div>

        <!-- Perguruan Tinggi Section -->
        <div id="pt-content" class="tab-content py-12 bg-gray-50 hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800">Perguruan Tinggi</h2>
                    <div class="w-20 h-1 bg-gray-600 mx-auto mt-4 mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                        Program beasiswa dan pendampingan untuk melanjutkan pendidikan ke jenjang perguruan tinggi
                    </p>
                </div>

                <!-- Program Beasiswa -->
                <div class="mb-16">
                    <h3 class="text-2xl font-semibold text-center text-gray-800 mb-8">Program Beasiswa</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @forelse ($pendidikan->where('tingkat_pendidikan', 'Perguruan Tinggi') as $item)
                        <div class="bg-gradient-to-br from-gray-100 to-white rounded-xl shadow-sm overflow-hidden border border-gray-200 transform transition hover:-translate-y-1 hover:shadow-md">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <div class="bg-gray-200 p-2 rounded-lg mr-4">
                                        <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-800">{{ $item->nama_institusi }}</h3>
                                </div>
                                <p class="text-gray-600 mb-4">{{ $item->deskripsi ?? 'Program beasiswa untuk melanjutkan pendidikan tinggi' }}</p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    Pendaftaran: {{ $item->periode ?? 'Januari & Juli' }}
                                </div>
                            </div>
                        </div>
                        @empty
                        <!-- Default Beasiswa jika tidak ada data -->
                        {{-- <div class="bg-gradient-to-br from-gray-100 to-white rounded-xl shadow-sm overflow-hidden border border-gray-200 transform transition hover:-translate-y-1 hover:shadow-md">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <div class="bg-gray-200 p-2 rounded-lg mr-4">
                                        <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-800">Beasiswa Desa</h3>
                                </div>
                                <p class="text-gray-600 mb-4">Bantuan pendidikan untuk mahasiswa dari keluarga kurang mampu</p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    Pendaftaran: Januari & Juli
                                </div>
                            </div>
                        </div> --}}
                        
                        {{-- <div class="bg-gradient-to-br from-gray-100 to-white rounded-xl shadow-sm overflow-hidden border border-gray-200 transform transition hover:-translate-y-1 hover:shadow-md">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <div class="bg-gray-200 p-2 rounded-lg mr-4">
                                        <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-800">Beasiswa Prestasi</h3>
                                </div>
                                <p class="text-gray-600 mb-4">Untuk lulusan SMA/SMK dengan nilai UN di atas rata-rata</p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    Pendaftaran: Maret
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-br from-gray-100 to-white rounded-xl shadow-sm overflow-hidden border border-gray-200 transform transition hover:-translate-y-1 hover:shadow-md">
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <div class="bg-gray-200 p-2 rounded-lg mr-4">
                                        <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-800">Kerjasama Kampus</h3>
                                </div>
                                <p class="text-gray-600 mb-4">Program khusus dengan beberapa perguruan tinggi mitra</p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    Tersedia sepanjang tahun
                                </div>
                            </div>
                        </div> --}}
                        @endforelse
                    </div>
                </div>

                <!-- Alumni Section -->
                {{-- <div class="mb-16">
                    <h3 class="text-2xl font-semibold text-center text-gray-800 mb-8">Alumni Berprestasi</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                        <!-- Alumni data bisa diambil dari database jika ada -->
                        <div class="text-center">
                            <div class="relative w-40 h-40 mx-auto mb-4 overflow-hidden rounded-full shadow-lg border-4 border-white">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" 
                                    alt="Dr. Ahmad" 
                                    class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-transparent to-transparent flex items-end justify-center pb-2 opacity-0 hover:opacity-100 transition-opacity">
                                    <span class="text-white text-sm font-medium">Lulusan 2005</span>
                                </div>
                            </div>
                            <h3 class="text-lg font-medium text-gray-800">Dr. Ahmad Fauzi, S.T., M.T.</h3>
                            <p class="text-gray-600">Dosen Teknik Universitas Indonesia</p>
                            <p class="text-sm text-gray-500 mt-2">Beasiswa LPDP, Peneliti Bidang Energi Terbarukan</p>
                        </div>
                        
                        <!-- Alumni lainnya -->
                        <!-- ... -->
                    </div>
                </div> --}}

                <!-- CTA Section -->
                <div class="bg-gray-700 rounded-xl p-8 text-center text-white">
                    <h3 class="text-2xl font-bold mb-4">Informasi Beasiswa Pendidikan Tinggi</h3>
                    <p class="mb-6 max-w-2xl mx-auto">Dapatkan panduan lengkap tentang berbagai program beasiswa yang tersedia</p>
                    <button class="bg-white text-gray-800 font-semibold py-2 px-6 rounded-lg hover:bg-gray-100 transition">
                        Download Panduan
                    </button>
                </div>
            </div>
        </div>
</div>

    <script>
        // Fungsi untuk mengganti tab
        function switchTab(tabName) {
            // Sembunyikan semua konten tab
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });

            // Hapus kelas aktif dari semua tab
            document.querySelectorAll('nav button').forEach(tab => {
                tab.classList.remove('border-gray-600', 'text-gray-700', 'active-tab');
                tab.classList.add('border-transparent', 'text-gray-500');
            });

            // Tampilkan konten tab yang dipilih
            const activeContent = document.getElementById(`${tabName}-content`);
            if (activeContent) {
                activeContent.classList.remove('hidden');
            }

            // Tambahkan kelas aktif ke tab yang dipilih
            const activeTab = document.getElementById(`${tabName}-tab`);
            if (activeTab) {
                activeTab.classList.remove('border-transparent', 'text-gray-500');
                activeTab.classList.add('border-gray-600', 'text-gray-700', 'active-tab');
            }
        }

        // Tambahkan event listener untuk setiap tab
        document.querySelectorAll('nav button').forEach(tab => {
            tab.addEventListener('click', function() {
                const tabName = this.id.split('-')[0];
                switchTab(tabName);
            });
        });

        // Aktifkan tab pertama saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            // Pastikan tab TK aktif secara default
            if (!document.querySelector('.active-tab')) {
                switchTab('tk');
            }
        });
    </script>

    <style>
        /* Tambahkan transisi untuk efek lebih halus */
        .tab-content {
            transition: opacity 0.3s ease;
        }
        
        /* Perbaiki tampilan tab aktif */
        .active-tab {
            border-bottom-color: #4b5563 !important;
            color: #374151 !important;
        }
    </style>
</x-layout>