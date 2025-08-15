<x-layout title="berita-terkini">
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Elegant Header Section -->
            <div class="text-center mb-16">
                <h1 class="text-4xl font-light tracking-wide text-gray-800 mb-4">Berita Terkini Desa Patumbak 1</h1>
                <div class="w-24 h-0.5 bg-gray-300 mx-auto mb-4"></div>
                <p class="text-gray-500 font-light text-lg">Informasi seputar kegiatan dan perkembangan desa</p>
            </div>

            <!-- Sophisticated Filter and Search -->
            <form method="GET" action="{{ route('berita-kegiatan.berita-terkini') }}" class="mb-12 flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="w-full md:w-48">
                    <label for="category" class="sr-only">Kategori</label>
                    <select id="category" name="category" class="block w-full rounded-sm border-gray-200 shadow-sm focus:border-gray-400 focus:ring-gray-400 text-sm bg-gray-100 text-gray-700 h-10 px-3">
                        <option value="">Semua Kategori</option>
                        <option value="Pemerintahan" {{ (request('category') == 'pemerintahan') ? 'selected' : '' }}>Pemerintahan</option>
                        <option value="Kesehatan" {{ (request('category') == 'kesehatan') ? 'selected' : '' }}>Kesehatan</option>
                        <option value="Pendidikan" {{ (request('category') == 'pendidikan') ? 'selected' : '' }}>Pendidikan</option>
                        <option value="Ekonomi" {{ (request('category') == 'ekonomi') ? 'selected' : '' }}>Ekonomi</option>
                    </select>
                </div>
                <div class="relative w-full md:w-72">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <input type="text" name="q" value="{{ request('q') }}" class="block w-full pl-10 pr-3 py-2 border border-gray-200 rounded-sm leading-5 bg-gray-100 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-gray-400 sm:text-sm h-10" placeholder="Cari berita...">
                </div>
                <button type="submit" class="ml-2 px-5 py-2 bg-gray-700 text-gray-100 rounded-sm hover:bg-gray-600 transition-colors duration-300 h-10 flex items-center justify-center">
                    <span>Cari</span>
                </button>
            </form>

            <!-- News Grid with Elegant Cards -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10 mb-16">
                @foreach ($posts as $post)
                <div class="bg-white rounded-none shadow-md hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                    <!-- Image with elegant overlay -->
                    <div class="h-60 overflow-hidden relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/30 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" 
                                alt="{{ $post->title }}" 
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        @else
                            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80"
                                alt="Default Image"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        @endif
                        <!-- Category badge -->
                        <span class="absolute top-4 right-4 bg-gray-800/90 text-gray-100 text-xs px-3 py-1 uppercase tracking-wider z-20">{{ $post->kategori }}</span>
                    </div>
                    
                    <!-- Content -->
                    <div class="p-6">
                        <div class="flex items-center text-xs text-gray-400 mb-3 space-x-3 tracking-wide">
                            <span>{{ \Carbon\Carbon::parse($post->date)->format('d M Y') }}</span>
                            <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                            <span class="font-medium text-gray-500">{{ $post->author->name }}</span>
                        </div>
                        <h2 class="text-xl font-normal text-gray-800 mb-3 leading-snug">
                            <a href="{{ route('berita-kegiatan.show', $post->slug) }}" class="hover:text-gray-600 transition-colors duration-200">{{ $post->title }}</a>
                        </h2>
                        <p class="text-gray-500 mb-5 font-light text-sm leading-relaxed">{{ Str::limit(strip_tags($post->body), 100) }}</p>
                        <a href="{{ route('berita-kegiatan.show', $post->slug) }}" 
                        class="inline-flex items-center text-gray-700 hover:text-gray-900 font-medium text-sm group-hover:underline transition-colors duration-200">
                            Baca selengkapnya
                            <svg class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Minimalist Pagination -->
            <div class="flex items-center justify-center space-x-2 pt-8 border-t border-gray-100">
                {{-- Previous Page Link --}}
                <a 
                    href="{{ $posts->previousPageUrl() }}" 
                    class="px-3 py-1 rounded-md {{ $posts->onFirstPage() ? 'text-gray-400 cursor-not-allowed' : 'text-gray-600 hover:bg-gray-100' }}"
                >
                    &larr;
                </a>

                {{-- Pagination Elements --}}
                @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                    @if ($page == $posts->currentPage())
                        <span class="px-3 py-1 rounded-md bg-blue-600 text-white font-medium">
                            {{ $page }}
                        </span>
                    @else
                        <a 
                            href="{{ $url }}" 
                            class="px-3 py-1 rounded-md text-gray-600 hover:bg-gray-100"
                        >
                            {{ $page }}
                        </a>
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                <a 
                    href="{{ $posts->nextPageUrl() }}" 
                    class="px-3 py-1 rounded-md {{ !$posts->hasMorePages() ? 'text-gray-400 cursor-not-allowed' : 'text-gray-600 hover:bg-gray-100' }}"
                >
                    &rarr;
                </a>
            </div>
        </div>
    </div>
</x-layout>