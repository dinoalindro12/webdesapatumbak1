<x-layout title="Galeri Desa">
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Elegant Header -->
            <div class="text-center mb-16">
                <h1 class="text-4xl font-light tracking-tight text-gray-900">Galeri Desa Sukamaju</h1>
                <div class="w-24 h-0.5 bg-gray-300 mx-auto my-6"></div>
                <p class="text-gray-500 font-light text-lg">Dokumentasi visual kegiatan dan keindahan desa kami</p>
            </div>

            <!-- Minimalist Category Filter -->
            <div class="flex flex-wrap justify-center gap-3 mb-12">
                <button class="px-5 py-2 rounded-full bg-gray-800 text-white text-sm font-medium shadow-sm">Semua</button>
                <button class="px-5 py-2 rounded-full bg-white text-gray-700 hover:bg-gray-100 text-sm font-medium border border-gray-200 transition-colors">Kegiatan</button>
                <button class="px-5 py-2 rounded-full bg-white text-gray-700 hover:bg-gray-100 text-sm font-medium border border-gray-200 transition-colors">Fasilitas</button>
                <button class="px-5 py-2 rounded-full bg-white text-gray-700 hover:bg-gray-100 text-sm font-medium border border-gray-200 transition-colors">Wisata</button>
                <button class="px-5 py-2 rounded-full bg-white text-gray-700 hover:bg-gray-100 text-sm font-medium border border-gray-200 transition-colors">Budaya</button>
                <button class="px-5 py-2 rounded-full bg-white text-gray-700 hover:bg-gray-100 text-sm font-medium border border-gray-200 transition-colors">Alam</button>
            </div>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-16">
                <!-- Gallery Item -->
                @foreach ($galeri as $g)
                <div class="group relative overflow-hidden rounded-lg shadow-sm hover:shadow-md transition-all duration-300 bg-white">
                    <div class="aspect-w-4 aspect-h-3">
                        <img src="{{ asset('storage/' . $g->gambar) }}" 
                             alt="Gotong Royong Desa" 
                             class="w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                        <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h3 class="text-white font-medium text-lg">{{$g->keterangan_gambar}}</h3>
                            <p class="text-gray-300 text-sm mt-1">15 Juni 2023</p>
                        </div>
                    </div>
                    <span class="absolute top-3 right-3 bg-gray-800/90 text-white text-xs px-3 py-1 rounded-full uppercase tracking-wider">{{$g->keterangan_gambar}}</span>
                </div>
                

                <!-- Additional gallery items would go here -->
            </div>

            <!-- Video Section -->
            <div class="mb-16">
                
                <h2 class="text-2xl font-light text-gray-800 mb-8 text-center tracking-wide">Video Dokumentasi</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-100">
                        <div class="aspect-w-16 aspect-h-9 bg-gray-200">
                            <iframe class="w-full h-64"
                                    src="https://www.youtube.com/embed/{{ $g->link_video }}"
                                    title="{{ $g->keterangan_video }}"
                                    frameborder="0"
                                    allowfullscreen></iframe>
                        </div>
                        <div class="p-5">
                            <h3 class="font-medium text-gray-800 mb-1">{{ $g->title }}</h3>
                            <div class="flex items-center text-sm text-gray-500">
                                <span>{{ $g->views }} ditonton</span>
                                <span class="mx-2">•</span>
                                <span>{{ $g->published_at }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                </h2>
                    @endforeach
                </div>
            </div>

            <!-- Elegant Pagination -->
            <div class="flex items-center justify-center border-t border-gray-200 pt-8">
                <nav class="flex items-center space-x-2">
                    <button class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 text-gray-500 hover:bg-gray-100 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    
                    <button class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 text-white font-medium">1</button>
                    <button class="w-10 h-10 flex items-center justify-center rounded-full text-gray-700 hover:bg-gray-100 transition-colors">2</button>
                    <button class="w-10 h-10 flex items-center justify-center rounded-full text-gray-700 hover:bg-gray-100 transition-colors">3</button>
                    
                    <button class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 text-gray-500 hover:bg-gray-100 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7 7 7"/>
                        </svg>
                    </button>
                </nav>
            </div>
        </div>
    </div>
</x-layout>