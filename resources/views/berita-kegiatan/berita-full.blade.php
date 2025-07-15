<x-layout title='berita-full'>
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-8"> <!-- Container untuk membatasi lebar -->
        <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
            <div class="h-48 overflow-hidden">
                <img src="{{ asset('images/jagung.png') }}" 
                    alt="Kegiatan gotong royong" 
                    class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
            </div>
            <div class="p-6">
                <div class="flex items-center text-sm text-gray-500 mb-2">
                    <span>{{ $post->date }}</span>
                    <span class="mx-2"> • </span>
                    <span class="space-x-2.5 font-bold text-gray-900">{{ $post->author->name }} </span>
                </div>
                <h2 class="text-xl font-semibold text-gray-800 mb-3">
                    {{ $post->title }}
                </h2>
                <div class="prose max-w-none text-gray-600 mb-4"> <!-- Prose untuk teks yang lebih rapi -->
                    <p>{{ $post->body }}</p>
                </div>
                <a href="{{route('berita-kegiatan.berita-terkini')}}" class="inline-flex items-center text-blue-600 hover:underline">
                    &laquo; Kembali ke daftar artikel
                </a>
            </div>
        </div>
    </div>
</x-layout>