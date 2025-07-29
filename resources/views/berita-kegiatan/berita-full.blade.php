<x-layout title="{{ $post->title }} | Desa Sukamaju">
    <!-- Hero Section with Parallax Effect -->
    <div class="relative h-96 overflow-hidden bg-gray-900">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img 
                src="{{ asset('storage/berita-images/' . $post->image) }}" 
                alt="{{ $post->title }}"
                class="w-full h-full object-cover opacity-70 transform scale-100 hover:scale-105 transition-transform duration-1000"
            >
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/30 to-transparent"></div>
        </div>
        
        <!-- Floating Article Header -->
        <div class="relative z-10 h-full flex flex-col justify-end pb-16 px-4 sm:px-6 lg:px-8 max-w-5xl mx-auto">
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 p-8 rounded-xl shadow-2xl">
                <div class="flex items-center text-sm text-white/80 mb-3">
                    <span class="font-mono tracking-wider">{{ $post->date }}</span>
                    <span class="mx-3 text-white/30">|</span>
                    <span class="font-medium text-white">{{ $post->author->name }}</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-serif font-light text-white leading-tight tracking-tight mb-4">
                    {{ $post->title }}
                </h1>
                <div class="w-24 h-0.5 bg-white/30 mb-6"></div>
                <a 
                    href="{{ route('berita-kegiatan.berita-terkini') }}" 
                    class="inline-flex items-center text-white/80 hover:text-white transition-colors group"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Kembali ke Berita Lainnya
                </a>
            </div>
        </div>
    </div>

    <!-- Article Content (Elegant Typography) -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <article class="prose prose-lg md:prose-xl prose-gray max-w-none">
            <!-- Drop Cap First Paragraph -->
            <p class="text-2xl leading-relaxed text-gray-700 first-letter:float-left first-letter:text-6xl first-letter:font-serif first-letter:mr-3 first-letter:mt-1 first-letter:text-gray-900">
                {{ Str::of($post->body)->before('.') }}.
            </p>
            
            <!-- Rest of Content -->
            <div class="mt-8 space-y-6 text-gray-600 leading-relaxed">
                {{ Str::of($post->body)->after('.') }}
            </div>

            <!-- Elegant Divider -->
            <div class="my-16 flex items-center">
                <div class="flex-grow border-t border-gray-200"></div>
                <span class="mx-4 text-gray-400 font-serif italic">•••</span>
                <div class="flex-grow border-t border-gray-200"></div>
            </div>

            <!-- Author Box -->
            <div class="bg-gray-50 p-8 rounded-xl border border-gray-100">
                <div class="flex items-center">
                    <div class="mr-6">
                        <div class="w-16 h-16 rounded-full bg-gray-200 overflow-hidden">
                            <!-- Placeholder for author image -->
                            <svg class="w-full h-full text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112 15c3.183 0 6.078 1.182 8.25 3.127A14.954 14.954 0 0124 20.993zM12 13a6 6 0 100-12 6 6 0 000 12z" />
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h4 class="font-serif text-xl text-gray-900 mb-1">{{ $post->author->name }}</h4>
                        <p class="text-gray-500">Penulis Berita Desa Sukamaju</p>
                        <div class="mt-3 flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-gray-600 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.323-.593 1.323-1.325V1.325C24 .593 23.407 0 22.675 0z" />
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-gray-600 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>

    <!-- Related Articles -->
    <div class="bg-gray-50 py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto">
            <h3 class="font-serif text-2xl text-gray-900 mb-8">Berita Terkait</h3>
            <div class="grid md:grid-cols-2 gap-8">
                @forelse ($related as $item)
                <div class="group">
                    <a href="{{ route('berita-kegiatan.show', $item->slug) }}" class="block overflow-hidden rounded-lg">
                        <div class="aspect-w-16 aspect-h-9 overflow-hidden rounded-lg">
                            <img 
                                src="{{ asset('storage/berita-images/' . $item->image) }}" 
                                alt="{{ $item->title }}"
                                class="w-full h-48 object-cover transform transition duration-700 group-hover:scale-110"
                            >
                        </div>
                        <div class="mt-4">
                            <span class="text-xs font-medium text-blue-600 uppercase tracking-wider">{{ $item->kategori }}</span>
                            <h4 class="mt-1 text-lg font-medium text-gray-900 group-hover:text-blue-600 transition-colors">{{ $item->title }}</h4>
                            <p class="mt-2 text-gray-500 line-clamp-2">{{$item->body }}</p>
                        </div>
                    </a>
                </div>
                @empty
                <div class="text-gray-500">Tidak ada berita terkait.</div>
                @endforelse
            </div>
        </div>
    </div>
</x-layout>