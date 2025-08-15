<x-layout title="Papan Pengumuman Desa Sukamaju">
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-serif font-light text-gray-900">Papan Pengumuman Desa Sukamaju</h1>
                <div class="w-24 h-1 bg-green-600 mx-auto mt-4"></div>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Informasi resmi dan pengumuman terbaru dari Pemerintah Desa Sukamaju</p>
            </div>

            <!-- Main Content -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Recent Announcements Sidebar -->
                <div class="lg:col-span-1 order-2 lg:order-1">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden sticky top-6">
                        <div class="bg-gray-800 text-white px-6 py-4">
                            <h2 class="text-xl font-medium">
                                <span class="font-serif">Pengumuman Terkini</span>
                            </h2>
                        </div>
                        <div class="p-4 space-y-4">
                            @foreach($pengumuman->take(5) as $event)
                            <div class="border-l-4 border-green-600 rounded-lg shadow-sm p-4 hover:shadow-md transition-shadow bg-white">
                                <div class="flex-1">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-lg font-medium text-gray-800 line-clamp-1">{{ $event->judul }}</h3>
                                        <span class="text-sm text-gray-500 whitespace-nowrap ml-2">
                                            {{ \Carbon\Carbon::parse($event->tanggal)->format('d M') }}
                                        </span>
                                    </div>
                                    <p class="mt-2 text-gray-600 line-clamp-2">{{ strip_tags($event->isi) }}</p>
                                    <a href="#pengumuman-{{ $event->id }}" class="mt-2 inline-block text-sm text-green-600 hover:text-green-500">
                                        Baca selengkapnya →
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- All Announcements -->
                <div class="lg:col-span-2 order-1 lg:order-2">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <div class="bg-gray-800 text-white px-6 py-4">
                            <h2 class="text-xl font-medium">
                                <span class="font-serif">Seluruh Pengumuman</span>
                            </h2>
                        </div>
                        
                        <div class="p-6 space-y-8">
                            @foreach($pengumuman as $event)
                            <div id="pengumuman-{{ $event->id }}" class="group">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 bg-green-100 rounded-lg p-3 mr-4">
                                        <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-xl font-medium text-gray-900 group-hover:text-green-600 transition-colors">
                                                {{ $event->judul }}
                                            </h3>
                                            <span class="text-sm text-gray-500 bg-gray-100 px-3 py-1 rounded-full">
                                                {{ \Carbon\Carbon::parse($event->tanggal)->format('d F Y') }}
                                            </span>
                                        </div>
                                        <div class="mt-4 prose max-w-none text-gray-600">
                                            {!! $event->isi !!}
                                        </div>
                                        <div class="mt-4 pt-4 border-t border-gray-100 flex items-center text-sm text-gray-500">
                                            <svg class="flex-shrink-0 mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            Dipublikasikan pada {{ \Carbon\Carbon::parse($event->tanggal)->format('l, d F Y') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        @if($pengumuman->hasPages())
                        <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                            {{ $pengumuman->links() }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>