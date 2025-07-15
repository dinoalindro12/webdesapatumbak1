<x-layout title="Perangkat Desa">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-gray-50 to-gray-100 py-20 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <svg class="absolute top-0 left-0 transform -translate-x-1/2 -translate-y-1/4" width="800" height="800" fill="none" viewBox="0 0 800 800" aria-hidden="true">
                <defs>
                    <pattern id="hero-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                    </pattern>
                </defs>
                <rect width="800" height="800" fill="url(#hero-pattern)"></rect>
            </svg>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center">
                <h1 class="text-4xl font-serif font-light text-gray-800 sm:text-5xl md:text-6xl">
                    <span class="block">Perangkat Desa</span>
                    <span class="block text-gray-600 mt-2">Sukamaju</span>
                </h1>
                <div class="mt-8 max-w-2xl mx-auto">
                    <p class="text-lg text-gray-600">Kenali para pelayan masyarakat yang bertugas dengan penuh dedikasi</p>
                    <div class="mt-6 w-24 h-px bg-gray-300 mx-auto"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kepala Desa Section -->
    <div class="bg-white py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            @foreach($perangkat as $p)
                @if($p->jabatan == 'Kepala Desa')
                <div class="flex flex-col items-center transform transition-all duration-700 ease-out opacity-0 translate-y-6 animate-fade-in-up">
                    <div class="relative mb-8">
                        <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-white shadow-xl relative z-10">
                            <img src="{{ $p->foto ? asset('storage/'.$p->foto) : 'https://ui-avatars.com/api/?name='.urlencode($p->nama).'&background=random' }}"
                                 alt="Kepala Desa" 
                                 class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -inset-4 bg-gray-100 rounded-full opacity-30 z-0 animate-pulse-slow"></div>
                    </div>
                    <div class="text-center">
                        <h2 class="text-3xl font-light text-gray-800">{{ $p->nama }}</h2>
                        <div class="mt-2">
                            <span class="inline-block px-4 py-1 bg-gray-100 text-gray-800 rounded-full text-sm font-medium">
                                Kepala Desa Patumbak 1
                            </span>
                        </div>
                        <p class="text-gray-500 mt-4 font-light">Masa Jabatan: {{ $p->masa_jabatan ?? '2019 - 2025' }}</p>
                        <div class="mt-6 flex justify-center space-x-6">
                            @if($p->kontak)
                            <a href="tel:{{ $p->kontak }}" class="text-gray-400 hover:text-gray-600 transition-colors duration-300">
                                <span class="sr-only">Telepon</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </a>
                            @endif
                            @if($p->email)
                            <a href="mailto:{{ $p->email }}" class="text-gray-400 hover:text-gray-600 transition-colors duration-300">
                                <span class="sr-only">Email</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>

    <!-- Struktur Organisasi -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-serif font-light text-gray-800">Struktur Organisasi</h2>
                <div class="mt-4 w-20 h-px bg-gray-300 mx-auto"></div>
                <p class="mt-4 text-gray-500 max-w-2xl mx-auto">Struktur pemerintahan Desa Sukamaju yang bekerja untuk melayani masyarakat</p>
            </div>

            <div class="org-tree">
                <!-- Level 1: Kepala Desa & BPD sejajar -->
                <div class="grid grid-cols-12 gap-4 items-center mb-8">
                    <!-- Kepala Desa di tengah -->
                    <div class="col-span-12 md:col-span-4 md:col-start-5 flex justify-center">
                        <div class="org-node org-node--level1 transform transition-all duration-700 ease-out opacity-0 translate-y-6 animate-fade-in-up">
                            <div class="org-node__content">
                                <div class="text-xs uppercase tracking-widest text-gray-300 mb-1">Pimpinan</div>
                                <div class="text-xl font-light">Kepala Desa</div>
                                @foreach($perangkat as $p)
                                    @if($p->jabatan == 'Kepala Desa')
                                        <div class="text-sm font-medium mt-1">{{ $p->nama }}</div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- BPD di kanan -->
                    <div class="col-span-12 md:col-span-3 md:col-start-9 flex justify-end">
                        <div class="org-node org-node--level1 transform transition-all duration-700 ease-out opacity-0 translate-y-6 animate-fade-in-up" style="animation-delay: 200ms; min-width:220px;">
                            <div class="org-node__content">
                                <div class="text-xs uppercase tracking-widest text-gray-300 mb-1">Legislatif</div>
                                <div class="text-xl font-light">BPD</div>
                                @foreach($perangkat as $p)
                                    @if($p->jabatan == 'BPD')
                                        <div class="text-sm font-medium mt-1">{{ $p->nama }}</div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Level 2: Sekretaris Desa (sendiri, di tengah) -->
                <div class="org-links transform transition-all duration-700 ease-out opacity-0 translate-y-6 animate-fade-in-up" style="animation-delay: 200ms"></div>
                <div class="flex justify-center mb-8">
                    <div class="org-node org-node--level2 transform transition-all duration-700 ease-out opacity-0 translate-y-6 animate-fade-in-up" style="animation-delay: 300ms">
                        <div class="org-node__content">
                            <div class="text-xs uppercase tracking-widest text-gray-600 mb-1">Sekretariat</div>
                            <div class="text-lg font-light">Sekretaris Desa</div>
                            @foreach($perangkat as $p)
                                @if($p->jabatan == 'Sekretaris Desa')
                                    <div class="text-sm text-gray-600 mt-1">{{ $p->nama }}</div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Level 3: Perangkat/Kasi berjajar di bawah Sekretaris -->
                <div class="org-nodes">
                    <!-- Kasi Pemerintahan -->
                    <div class="org-node org-node--level2 transform transition-all duration-700 ease-out opacity-0 translate-y-6 animate-fade-in-up" style="animation-delay: 400ms">
                        <div class="org-node__content">
                            <div class="text-xs uppercase tracking-widest text-gray-600 mb-1">Bidang</div>
                            <div class="text-lg font-light">Kaur Pemerintahan</div>
                            @foreach($perangkat as $p)
                                @if($p->jabatan == 'Kaur Pemerintahan')
                                    <div class="text-sm text-gray-600 mt-1">{{ $p->nama }}</div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <!-- Kasi Kesejahteraan -->
                    <div class="org-node org-node--level2 transform transition-all duration-700 ease-out opacity-0 translate-y-6 animate-fade-in-up" style="animation-delay: 500ms">
                        <div class="org-node__content">
                            <div class="text-xs uppercase tracking-widest text-gray-600 mb-1">Bidang</div>
                            <div class="text-lg font-light">Kaur Umum</div>
                            @foreach($perangkat as $p)
                                @if($p->jabatan == 'Kaur Umum')
                                    <div class="text-sm text-gray-600 mt-1">{{ $p->nama }}</div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <!-- Kasi Pelayanan -->
                    <div class="org-node org-node--level2 transform transition-all duration-700 ease-out opacity-0 translate-y-6 animate-fade-in-up" style="animation-delay: 600ms">
                        <div class="org-node__content">
                            <div class="text-xs uppercase tracking-widest text-gray-600 mb-1">Bidang</div>
                            <div class="text-lg font-light">Kaur Keuangan</div>
                            @foreach($perangkat as $p)
                                @if($p->jabatan == 'Kaur Keuangan')
                                    <div class="text-sm text-gray-600 mt-1">{{ $p->nama }}</div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <div class="org-node org-node--level2 transform transition-all duration-700 ease-out opacity-0 translate-y-6 animate-fade-in-up" style="animation-delay: 600ms">
                        <div class="org-node__content">
                            <div class="text-xs uppercase tracking-widest text-gray-600 mb-1">Bidang</div>
                            <div class="text-lg font-light">Kaur Pembangunan</div>
                            @foreach($perangkat as $p)
                                @if($p->jabatan == 'Kaur Pembangunan')
                                    <div class="text-sm text-gray-600 mt-1">{{ $p->nama }}</div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Daftar Perangkat Desa -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-serif font-light text-gray-800">Daftar Perangkat Desa</h2>
                <div class="mt-4 w-20 h-px bg-gray-300 mx-auto"></div>
                <p class="mt-4 text-gray-500 max-w-2xl mx-auto">Para pelayan masyarakat yang siap membantu Anda</p>
            </div>

            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 rounded-lg transform transition-all duration-700 ease-out opacity-0 translate-y-6 animate-fade-in-up">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jabatan</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kontak</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($perangkat as $i => $p)
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $i+1 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full object-cover" src="{{ $p->foto ? asset('storage/'.$p->foto) : 'https://ui-avatars.com/api/?name='.urlencode($p->nama).'&background=random' }}" alt="{{ $p->nama }}">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">{{ $p->nama }}</div>
                                        @if($p->nip)
                                        <div class="text-xs text-gray-500">NIP. {{ $p->nip }}</div>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-medium rounded-full bg-gray-100 text-gray-800">
                                    {{ $p->jabatan }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                @if($p->kontak)
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 mr-1.5 h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    {{ $p->kontak }}
                                </div>
                                @endif
                                @if($p->email)
                                <div class="flex items-center mt-1">
                                    <svg class="flex-shrink-0 mr-1.5 h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    {{ $p->email }}
                                </div>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Tugas dan Fungsi -->
    <div class="bg-gradient-to-br from-gray-50 to-gray-100 py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-serif font-light text-gray-800">Tugas dan Fungsi</h2>
                <div class="mt-4 w-20 h-px bg-gray-300 mx-auto"></div>
                <p class="mt-4 text-gray-500">Peran masing-masing perangkat desa dalam melayani masyarakat</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-sm transform transition-all duration-700 ease-out opacity-0 translate-y-6 animate-fade-in-up">
                    <div class="flex items-center mb-4">
                        <div class="p-2 rounded-full bg-gray-100 text-gray-600 mr-4">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-light text-gray-800">Kepala Desa</h3>
                    </div>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Memimpin penyelenggaraan pemerintahan desa</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Membina kehidupan masyarakat desa</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Membina perekonomian desa</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Mengkoordinasikan pembangunan desa</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Mewakili desanya di dalam dan di luar pengadilan</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm transform transition-all duration-700 ease-out opacity-0 translate-y-6 animate-fade-in-up" style="animation-delay: 200ms">
                    <div class="flex items-center mb-4">
                        <div class="p-2 rounded-full bg-gray-100 text-gray-600 mr-4">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-light text-gray-800">Sekretaris Desa</h3>
                    </div>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Membantu kepala desa dalam bidang administrasi</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Menyelenggarakan administrasi pemerintahan</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Mengkoordinasi tugas perangkat desa</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Menyiapkan bahan laporan</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Melaksanakan tugas lain yang diberikan kepala desa</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <style>
        .org-tree {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .org-node {
            padding: 1.5rem;
            margin: 0.5rem;
            border-radius: 0.75rem;
            text-align: center;
            min-width: 220px;
            transition: all 0.3s ease;
        }
        .org-node:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .org-node--level1 {
            background: linear-gradient(135deg, #6b7280 0%, #9ca3af 100%);
            color: white;
            box-shadow: 0 4px 6px -1px rgba(107, 114, 128, 0.2), 0 2px 4px -1px rgba(107, 114, 128, 0.12);
        }
        .org-node--level1 .org-node__content div {
            color: white;
        }
        .org-node--level2 {
            background-color: white;
            border: 1px solid #f3f4f6;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }
        .org-node__content {
            position: relative;
            z-index: 10;
        }
        .org-nodes {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1.5rem;
        }
        .org-links {
            height: 50px;
            width: 2px;
            background: linear-gradient(to bottom, #e5e7eb, #d1d5db);
            margin: 0 auto;
        }
        @media (max-width: 640px) {
            .org-nodes {
                flex-direction: column;
                align-items: center;
            }
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes pulse-slow {
            0%, 100% {
                opacity: 0.3;
            }
            50% {
                opacity: 0.5;
            }
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        
        .animate-pulse-slow {
            animation: pulse-slow 3s ease-in-out infinite;
        }
    </style>
</x-layout>