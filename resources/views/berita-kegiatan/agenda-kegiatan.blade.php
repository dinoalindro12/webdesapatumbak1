<x-layout title="Agenda Kegiatan">
    <div class="bg-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="text-center mb-12">
                <h1 class="text-3xl font-bold text-gray-900">Agenda Kegiatan Desa Sukamaju</h1>
                <div class="w-20 h-1 bg-green-600 mx-auto mt-4"></div>
                <p class="text-gray-600 mt-4">Jadwal kegiatan dan event terdekat di desa kami</p>
            </div>

            <!-- Calendar Navigation -->
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800">Juni 2023</h2>
                </div>
                <div class="flex space-x-2">
                    <button class="p-2 rounded-full bg-gray-100 hover:bg-gray-200">
                        <svg class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button class="p-2 rounded-full bg-gray-100 hover:bg-gray-200">
                        <svg class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                    <button class="px-4 py-2 rounded-md bg-green-600 text-white text-sm font-medium hover:bg-green-700">
                        Hari Ini
                    </button>
                </div>
            </div>

            <!-- Calendar View -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <!-- Day Names -->
                <div class="grid grid-cols-7 gap-px bg-gray-200 text-center text-xs font-semibold leading-6 text-gray-700">
                    <div class="bg-white py-2">Minggu</div>
                    <div class="bg-white py-2">Senin</div>
                    <div class="bg-white py-2">Selasa</div>
                    <div class="bg-white py-2">Rabu</div>
                    <div class="bg-white py-2">Kamis</div>
                    <div class="bg-white py-2">Jumat</div>
                    <div class="bg-white py-2">Sabtu</div>
                </div>

                <!-- Calendar Grid -->
                <div class="grid grid-cols-7 gap-px bg-gray-200">
                    <!-- Empty days before the first of the month -->
                    <div class="bg-gray-50 h-24"></div>
                    <div class="bg-gray-50 h-24"></div>
                    <div class="bg-gray-50 h-24"></div>

                    <!-- Calendar Days -->
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">1</span>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">2</span>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">3</span>
                        </div>
                        <div class="mt-1">
                            <div class="text-xs truncate bg-green-100 text-green-800 p-1 rounded mb-1">Gotong Royong 08.00</div>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">4</span>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">5</span>
                        </div>
                        <div class="mt-1">
                            <div class="text-xs truncate bg-blue-100 text-blue-800 p-1 rounded mb-1">Posyandu 09.00</div>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">6</span>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">7</span>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">8</span>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">9</span>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">10</span>
                        </div>
                        <div class="mt-1">
                            <div class="text-xs truncate bg-purple-100 text-purple-800 p-1 rounded mb-1">Pelatihan UMKM 13.00</div>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">11</span>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">12</span>
                        </div>
                        <div class="mt-1">
                            <div class="text-xs truncate bg-red-100 text-red-800 p-1 rounded mb-1">Rapat RT 19.00</div>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm bg-green-600 text-white">13</span>
                        </div>
                        <div class="mt-1">
                            <div class="text-xs truncate bg-yellow-100 text-yellow-800 p-1 rounded mb-1">Pengajian 20.00</div>
                            <div class="text-xs truncate bg-indigo-100 text-indigo-800 p-1 rounded">Lomba Desa 09.00</div>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">14</span>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">15</span>
                        </div>
                        <div class="mt-1">
                            <div class="text-xs truncate bg-pink-100 text-pink-800 p-1 rounded mb-1">Senam Sehat 06.00</div>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">16</span>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">17</span>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">18</span>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">19</span>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">20</span>
                        </div>
                        <div class="mt-1">
                            <div class="text-xs truncate bg-green-100 text-green-800 p-1 rounded mb-1">Karang Taruna 15.00</div>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">21</span>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">22</span>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">23</span>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">24</span>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">25</span>
                        </div>
                        <div class="mt-1">
                            <div class="text-xs truncate bg-blue-100 text-blue-800 p-1 rounded mb-1">Pemeriksaan Lansia 08.00</div>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">26</span>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">27</span>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">28</span>
                        </div>
                        <div class="mt-1">
                            <div class="text-xs truncate bg-purple-100 text-purple-800 p-1 rounded mb-1">Pertemuan PKK 13.00</div>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">29</span>
                        </div>
                    </div>
                    <div class="bg-white h-24 p-1 relative">
                        <div class="flex justify-end">
                            <span class="flex items-center justify-center h-6 w-6 rounded-full text-sm">30</span>
                        </div>
                        <div class="mt-1">
                            <div class="text-xs truncate bg-red-100 text-red-800 p-1 rounded mb-1">Rapat RW 19.00</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Events -->
            <div class="mt-12">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Kegiatan Mendatang</h2>
                <div class="space-y-4">
                    <div class="bg-white border-l-4 border-green-600 rounded-lg shadow-sm p-4 hover:shadow-md transition-shadow">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-green-100 rounded-md p-2 mr-4">
                                <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-medium text-gray-800">Gotong Royong Bersih Desa</h3>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">3 Juni 2023</span>
                                </div>
                                <p class="mt-1 text-gray-600">Kegiatan gotong royong membersihkan lingkungan desa menyambut musim kemarau</p>
                                <div class="mt-2 flex items-center text-sm text-gray-500">
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Lapangan Desa Sukamaju
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white border-l-4 border-blue-600 rounded-lg shadow-sm p-4 hover:shadow-md transition-shadow">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-blue-100 rounded-md p-2 mr-4">
                                <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-medium text-gray-800">Posyandu Balita dan Lansia</h3>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">5 Juni 2023</span>
                                </div>
                                <p class="mt-1 text-gray-600">Pemeriksaan kesehatan rutin untuk balita dan lansia warga desa</p>
                                <div class="mt-2 flex items-center text-sm text-gray-500">
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Posyandu Melati, RT 03/RW 02
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white border-l-4 border-purple-600 rounded-lg shadow-sm p-4 hover:shadow-md transition-shadow">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-purple-100 rounded-md p-2 mr-4">
                                <svg class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-medium text-gray-800">Pelatihan Digital Marketing UMKM</h3>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">10 Juni 2023</span>
                                </div>
                                <p class="mt-1 text-gray-600">Pelatihan pemasaran digital untuk pengembangan usaha mikro kecil menengah desa</p>
                                <div class="mt-2 flex items-center text-sm text-gray-500">
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Aula Kantor Desa Sukamaju
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>