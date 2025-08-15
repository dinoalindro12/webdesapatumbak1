<x-layout title="Galeri Desa">
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-16">
                <h1 class="text-4xl font-light tracking-tight text-gray-900">Galeri Desa Patumbak 1</h1>
                <div class="w-24 h-0.5 bg-gray-300 mx-auto my-6"></div>
                <p class="text-gray-500 font-light text-lg">Dokumentasi kegiatan desa kami</p>
            </div>

            <!-- Filter -->
            <div class="flex flex-wrap justify-center gap-3 mb-12">
                <!-- Filter Type -->
                <a href="{{ route('galeri.user', ['type' => 'semua']) }}"
                    class="px-5 py-2 rounded-full {{ $type == 'semua' ? 'bg-gray-800 text-white' : 'bg-white text-gray-700 hover:bg-gray-100' }} text-sm font-medium border border-gray-200 transition-colors">
                    Semua
                </a>
                <a href="{{ route('galeri.user', ['type' => 'foto']) }}"
                    class="px-5 py-2 rounded-full {{ $type == 'foto' ? 'bg-gray-800 text-white' : 'bg-white text-gray-700 hover:bg-gray-100' }} text-sm font-medium border border-gray-200 transition-colors">
                    Foto
                </a>
                <a href="{{ route('galeri.user', ['type' => 'video']) }}"
                    class="px-5 py-2 rounded-full {{ $type == 'video' ? 'bg-gray-800 text-white' : 'bg-white text-gray-700 hover:bg-gray-100' }} text-sm font-medium border border-gray-200 transition-colors">
                    Video
                </a>
            </div>
        </div>

        <!-- Galeri Foto -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-16">
            @forelse ($galeri as $g)
                <div
                    class="group relative overflow-hidden rounded-lg shadow-sm hover:shadow-md transition-all duration-300 bg-white">
                    <div class="aspect-w-4 aspect-h-3">
                        @if($g->type == 'foto' && $g->gambar)
                            <img src="{{ asset('storage/' . $g->gambar) }}" alt="{{ $g->keterangan_gambar ?? 'Galeri' }}"
                                class="w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-500">
                        @elseif($g->type == 'video' && $g->youtube_thumbnail)
                            <img src="{{ $g->youtube_thumbnail }}" alt="{{ $g->keterangan_video ?? 'Video YouTube' }}"
                                class="w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="bg-red-600 rounded-full p-4 bg-opacity-80">
                                    <svg class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                        @else
                            <div class="w-full h-64 flex items-center justify-center bg-gray-200 text-gray-400">Tidak ada konten
                            </div>
                        @endif
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-gray-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                        <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h3 class="text-white font-medium text-lg">
                                @if($g->type == 'foto')
                                    {{ $g->keterangan_gambar }}
                                @else
                                    {{ $g->keterangan_video ?? 'Video YouTube' }}
                                @endif
                            </h3>
                            <p class="text-gray-300 text-sm mt-1">{{ $g->tanggal->format('d M Y') }}</p>
                        </div>
                    </div>
                    <span
                        class="absolute top-3 right-3 bg-gray-800/90 text-white text-xs px-3 py-1 rounded-full uppercase tracking-wider">
                        {{ $g->type == 'foto' ? 'FOTO' : 'VIDEO' }}
                    </span>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <p class="text-gray-500 text-lg">Tidak ada konten galeri</p>
                </div>
            @endforelse
        </div>

        <!-- Bagian Video -->
        @if($type != 'foto')
            <div class="mb-16">
                <h2 class="text-2xl font-light text-gray-800 mb-8 text-center tracking-wide">Video Dokumentasi</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @php
                        $hasVideos = false;
                    @endphp

                    @foreach ($galeri as $g)
                        @if ($g->type == 'video' && $g->link_video && $g->youtube_id)
                            @php
                                $hasVideos = true;
                            @endphp

                            <div class="bg-white rounded-lg overflow-hidden shadow-md border border-gray-200">
                                <div class="relative pb-[56.25%] h-0">
                                    <iframe class="absolute top-0 left-0 w-full h-full"
                                        src="https://www.youtube.com/embed/{{ $g->youtube_id }}?rel=0" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="p-4">
                                    <h3 class="font-medium text-gray-800 mb-1">
                                        {{ $g->keterangan_video ?? 'Video Dokumentasi Desa' }}</h3>
                                    <div class="flex items-center text-sm text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <span>{{ $g->tanggal->format('d M Y') }}</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                    @if (!$hasVideos && $type != 'foto')
                        <div class="col-span-full text-center py-12 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <p class="text-lg">Belum ada video dokumentasi</p>
                        </div>
                    @endif
                </div>
            </div>
        @endif

        <!-- Pagination -->
        <div class="flex items-center justify-center border-t border-gray-200 pt-8">
            {{ $galeri->appends(['type' => $type])->links() }}
        </div>
    </div>
    </div>
</x-layout>