<x-layout title="Galeri Desa">
    <div class="bg-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="text-center mb-12">
                <h1 class="text-3xl font-bold text-gray-900">Galeri Desa Sukamaju</h1>
                <div class="w-20 h-1 bg-gray-600 mx-auto mt-4"></div>
                <p class="text-gray-600 mt-4">Dokumentasi kegiatan dan keindahan desa kami</p>
            </div>

            <!-- Filter Kategori -->
            <div class="flex flex-wrap justify-center gap-2 mb-8">
                <button class="px-4 py-2 rounded-full bg-gray-100 text-white text-sm font-medium">Semua</button>
                <button class="px-4 py-2 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium">Kegiatan Desa</button>
                <button class="px-4 py-2 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium">Fasilitas Umum</button>
                <button class="px-4 py-2 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium">Wisata Desa</button>
                <button class="px-4 py-2 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium">Budaya</button>
                <button class="px-4 py-2 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium">Alam</button>
            </div>

            <!-- Galeri Foto -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-12">
                <!-- Item 1 -->
                <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <img src="https://images.unsplash.com/photo-1586771107445-d3ca888129ce?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" 
                         alt="Gotong Royong Desa" 
                         class="w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                        <div>
                            <h3 class="text-white font-medium">Gotong Royong Bersih Desa</h3>
                            <p class="text-purple-200 text-sm">15 Juni 2023</p>
                        </div>
                    </div>
                    <span class="absolute top-2 right-2 bg-purple-600 text-white text-xs px-2 py-1 rounded">Kegiatan</span>
                </div>

                

            <!-- Video Desa -->
            <div class="mb-12">
                
                <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Video Desa</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-gray-100 rounded-lg overflow-hidden shadow-md">
                        <div class="aspect-w-16 aspect-h-9">
                            <iframe class="w-full h-64" src="https://www.youtube.com/embed/VIDEO_ID_1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="p-4">
                            <h3 class="font-medium text-gray-800">Profil Desa Sukamaju 2023</h3>
                            <p class="text-gray-600 text-sm mt-1">Ditonton 1.245 kali • 2 minggu lalu</p>
                        </div>
                    </div>
                    <div class="bg-gray-100 rounded-lg overflow-hidden shadow-md">
                        <div class="aspect-w-16 aspect-h-9">
                            <iframe class="w-full h-64" src="https://www.youtube.com/embed/VIDEO_ID_2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="p-4">
                            <h3 class="font-medium text-gray-800">Festival Budaya Desa Sukamaju</h3>
                            <p class="text-gray-600 text-sm mt-1">Ditonton 892 kali • 1 bulan lalu</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex items-center justify-between border-t border-gray-200 pt-6">
                <div class="flex-1 flex justify-between sm:hidden">
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Sebelumnya </a>
                    <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Selanjutnya </a>
                </div>
                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-gray-700">
                            Menampilkan
                            <span class="font-medium">1</span>
                            sampai
                            <span class="font-medium">8</span>
                            dari
                            <span class="font-medium">24</span>
                            konten
                        </p>
                    </div>
                    <div>
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Sebelumnya</span>
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                </svg>
                            </a>
                            <a href="#" aria-current="page" class="z-10 bg-purple-50 border-purple-500 text-purple-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 1 </a>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 2 </a>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 3 </a>
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Selanjutnya</span>
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7 7 7" />
                                </svg>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>