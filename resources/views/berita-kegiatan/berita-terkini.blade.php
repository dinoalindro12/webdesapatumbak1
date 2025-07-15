<x-layout title="berita-terkini">
    <div class="bg-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            
            <div class="text-center mb-12">
                <h1 class="text-3xl font-bold text-gray-900">Berita Terkini Desa Sukamaju</h1>
                <div class="w-20 h-1 bg-blue-600 mx-auto mt-4"></div>
                <p class="text-gray-600 mt-4">Informasi terbaru seputar kegiatan dan perkembangan desa</p>
            </div>

            <!-- Filter dan Pencarian -->
            <form method="GET" action="{{ route('berita-kegiatan.berita-terkini') }}" class="mb-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="w-full md:w-auto">
                    <label for="category" class="sr-only">Kategori</label>
                    <select id="category" name="category" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                        <option value="">Semua Kategori</option>
                        <option value="Pemerintahan" {{ (request('category') == 'Pemerintahan') ? 'selected' : '' }}>Pemerintahan</option>
                        <option value="Kesehatan" {{ (request('category') == 'Kesehatan') ? 'selected' : '' }}>Kesehatan</option>
                        <option value="Pendidikan" {{ (request('category') == 'Pendidikan') ? 'selected' : '' }}>Pendidikan</option>
                        <option value="Ekonomi" {{ (request('category') == 'Ekonomi') ? 'selected' : '' }}>Ekonomi</option>
                    </select>
                </div>
                <div class="relative w-full md:w-64">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <input type="text" name="q" value="{{ request('q') }}" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Cari berita...">
                </div>
                <button type="submit" class="ml-2 px-4 py-2 bg-blue-600 text-white rounded-md">Cari</button>
            </form>

            <!-- Daftar Berita -->
             {{-- {{ $posts->links() }} --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @foreach ($posts as $post)
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                    
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('storage/berita-images/' . $post->image) }}" 
                            alt="Kegiatan gotong royong" 
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2 space-x-2.5">
                            <span>{{ $post->date }}</span>
                            <span class="mx-2"> | </span>
                            <span class="space-x-2.5 font-extrabold">{{ $post->author->name }}</span>
                            <span class="text-blue-600">Berita Desa</span>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800 mb-3">
                            <a href="/berita-kegiatan/berita-full/{{ $post->slug }}" class="hover:underline">{{ $post->title }}</a>
                        </h2>
                        <p class="text-gray-600 mb-4">{{ Str::limit($post->body, 100) }}</p>
                        <a href="/berita-kegiatan/berita-full/{{ $post->slug }}" 
                        class="inline-flex items-center text-blue-600 hover:underline">
                            Baca selengkapnya &raquo;
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Pagination -->
            <div class="flex items-center justify-between border-t border-gray-200 pt-6">
                
                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                   
                </div>
            </div>
        </div>
    </div>
</x-layout>