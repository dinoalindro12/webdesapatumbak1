<x-layout title="BUMDes Desa">
    <div class="bg-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if(!$bumdes)
                <div class="text-center text-red-500 py-4">
                    <h2 class="text-xl font-semibold">Data BUMDes tidak ditemukan</h2>
                    <p class="mt-2">Kami mohon maaf, tetapi informasi mengenai BUMDes saat ini tidak tersedia.</p>
                    <a href="{{ url()->previous() }}" class="mt-4 inline-block px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">
                        Kembali
                    </a>
                </div>
            @else
                <!-- Header Section -->
                <div class="text-center mb-12">
                    <h1 class="text-3xl font-bold text-gray-900">BUMDes {{ $bumdes->nama ?? 'Desa Patumbak 1' }}</h1>
                    <div class="w-20 h-1 bg-gray-600 mx-auto mt-4"></div>
                    <p class="text-gray-600 mt-4">Badan Usaha Milik Desa {{ $bumdes->desa ?? 'Patumbak 1' }}</p>
                </div>

                <!-- Profil BUMDes -->
                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <div>
                        <div class="bg-gray-100 p-6 rounded-lg shadow-sm">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-4 flex items-center">
                                <svg class="h-6 w-6 text-yellow-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                Profil BUMDes
                            </h2>
                            <div class="space-y-4">
                                <div>
                                    <h3 class="font-medium text-gray-700">Nama BUMDes</h3>
                                    <p class="text-gray-600">{{ $bumdes->nama ?? 'Belum diisi' }}</p>
                                </div>
                                <div>
                                    <h3 class="font-medium text-gray-700">Diresmikan Pada</h3>
                                    <p class="text-gray-600">
                                        @isset($bumdes->tanggal_peresmian)
                                            {{ \Carbon\Carbon::parse($bumdes->tanggal_peresmian)->translatedFormat('d F Y') }}
                                        @else
                                            Belum diisi
                                        @endisset
                                    </p>
                                </div>
                                <div>
                                    <h3 class="font-medium text-gray-700">Bidang Usaha</h3>
                                    <ul class="list-disc text-gray-600 pl-5 mt-1">
                                        @if(!empty($bumdes->bidang_usaha))
                                            @foreach(explode(',', $bumdes->bidang_usaha) as $bidang)
                                                @if(trim($bidang) !== '')
                                                    <li>{{ trim($bidang) }}</li>
                                                @endif
                                            @endforeach
                                        @else
                                            <li>Belum diisi</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <div class="bg-gray-100 p-6 rounded-lg shadow-sm h-full">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-4 flex items-center">
                                <svg class="h-6 w-6 text-yellow-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Visi & Misi
                            </h2>
                            <div class="space-y-4">
                                <div>
                                    <h3 class="font-medium text-gray-700">Visi</h3>
                                    <p class="text-gray-600 italic">
                                        {{ $bumdes->visi ?? 'Belum memiliki visi yang ditetapkan' }}
                                    </p>
                                </div>
                                <div>
                                    <h3 class="font-medium text-gray-700">Misi</h3>
                                    <ul class="list-disc text-gray-600 pl-5 mt-1">
                                        @if(!empty($bumdes->misi))
                                            @foreach(preg_split('/\r\n|\r|\n/', $bumdes->misi) as $misi)
                                                @if(trim($misi) !== '')
                                                    <li>{{ trim($misi) }}</li>
                                                @endif
                                            @endforeach
                                        @else
                                            <li>Belum memiliki misi yang ditetapkan</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Struktur Pengurus -->
                <div class="mb-12">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Struktur Pengurus</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Direktur -->
                        <div class="text-center bg-gray-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                            <div class="w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-gray-900 mb-4">
                                <img src="{{ $bumdes->foto_direktur ? asset('storage/'.$bumdes->foto_direktur) : 'https://ui-avatars.com/api/?name='.urlencode($bumdes->direktur ?? 'Direktur') }}" 
                                     alt="Direktur BUMDes" 
                                     class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-lg font-medium text-gray-800">{{ $bumdes->direktur ?? 'Belum ditetapkan' }}</h3>
                            <p class="text-yellow-600 font-medium">Direktur</p>
                            <p class="text-sm text-gray-500 mt-2">Penanggung jawab operasional BUMDes</p>
                        </div>
                        
                        <!-- Bendahara -->
                        <div class="text-center bg-gray-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                            <div class="w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-gray-900 mb-4">
                                <img src="{{ $bumdes->foto_bendahara ? asset('storage/'.$bumdes->foto_bendahara) : 'https://ui-avatars.com/api/?name='.urlencode($bumdes->bendahara ?? 'Bendahara') }}" 
                                     alt="Bendahara BUMDes" 
                                     class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-lg font-medium text-gray-800">{{ $bumdes->bendahara ?? 'Belum ditetapkan' }}</h3>
                            <p class="text-yellow-600 font-medium">Bendahara</p>
                            <p class="text-sm text-gray-500 mt-2">Pengelola keuangan BUMDes</p>
                        </div>
                        
                        <!-- Koordinator Pertanian -->
                        <div class="text-center bg-gray-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                            <div class="w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-gray-900 mb-4">
                                <img src="{{ $bumdes->foto_pertanian ? asset('storage/'.$bumdes->foto_pertanian) : 'https://ui-avatars.com/api/?name='.urlencode($bumdes->koordinator_pertanian ?? 'Pertanian') }}" 
                                     alt="Koordinator Pertanian" 
                                     class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-lg font-medium text-gray-800">{{ $bumdes->koordinator_pertanian ?? 'Belum ditetapkan' }}</h3>
                            <p class="text-yellow-600 font-medium">Koordinator Pertanian</p>
                            <p class="text-sm text-gray-500 mt-2">Pengelola usaha pertanian</p>
                        </div>
                        
                        <!-- Koordinator Keuangan -->
                        <div class="text-center bg-gray-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                            <div class="w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-gray-900 mb-4">
                                <img src="{{ $bumdes->foto_keuangan ? asset('storage/'.$bumdes->foto_keuangan) : 'https://ui-avatars.com/api/?name='.urlencode($bumdes->koordinator_keuangan ?? 'Keuangan') }}" 
                                     alt="Koordinator Jasa Keuangan" 
                                     class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-lg font-medium text-gray-800">{{ $bumdes->koordinator_keuangan ?? 'Belum ditetapkan' }}</h3>
                            <p class="text-yellow-600 font-medium">Koordinator Jasa Keuangan</p>
                            <p class="text-sm text-gray-500 mt-2">Pengelola simpan pinjam</p>
                        </div>
                    </div>
                </div>

                <!-- Unit Usaha -->
                <div class="mb-12">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Unit Usaha BUMDes</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @forelse($bumdes->units ?? [] as $unit)
                        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                            <img src="{{ $unit->gambar ? asset('storage/'.$unit->gambar) : 'https://images.unsplash.com/photo-1586771107445-d3ca888129ce?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80' }}" 
                                alt="{{ $unit->nama }}" 
                                class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $unit->nama }}</h3>
                                <p class="text-gray-600 mb-4">{{ $unit->deskripsi }}</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-sm text-yellow-600 font-medium">{{ $unit->kategori }}</span>
                                    <span class="text-sm text-gray-500">Beroperasi sejak {{ $unit->tahun_berdiri }}</span>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-span-full text-center py-8">
                            <p class="text-gray-500">Belum ada data unit usaha</p>
                        </div>
                        @endforelse
                    </div>
                </div>

                <!-- Pencapaian -->
                <div class="bg-gray-200 p-8 rounded-lg">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Pencapaian BUMDes</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="text-center bg-white p-6 rounded-lg shadow-sm">
                            <div class="text-3xl font-bold text-yellow-600 mb-2">
                                {{ $bumdes->omset_tahunan ? 'Rp '.number_format($bumdes->omset_tahunan,0,',','.') : '-' }}
                            </div>
                            <div class="text-gray-700">Omset Tahunan</div>
                        </div>
                        <div class="text-center bg-white p-6 rounded-lg shadow-sm">
                            <div class="text-3xl font-bold text-yellow-600 mb-2">
                                {{ $bumdes->tenaga_kerja ?? '-' }}
                            </div>
                            <div class="text-gray-700">Tenaga Kerja</div>
                        </div>
                        <div class="text-center bg-white p-6 rounded-lg shadow-sm">
                            <div class="text-3xl font-bold text-yellow-600 mb-2">
                                {{ $bumdes->shu_desa ? 'Rp '.number_format($bumdes->shu_desa,0,',','.') : '-' }}
                            </div>
                            <div class="text-gray-700">SHU untuk Desa</div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-layout>