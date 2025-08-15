<x-layout title="Agenda Proyek Desa">
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-serif font-light text-gray-900">Agenda Proyek Desa Sukamaju</h1>
                <div class="w-24 h-1 bg-green-600 mx-auto mt-4"></div>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Informasi perkembangan proyek pembangunan di Desa Sukamaju</p>
            </div>

            <!-- Filter Section -->
            <div class="mb-8 bg-white rounded-lg shadow p-4">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div class="w-full md:w-auto">
                        <label for="status-filter" class="block text-sm font-medium text-gray-700 mb-1">Filter Status</label>
                        <select id="status-filter" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md">
                            <option value="all">Semua Status</option>
                            <option value="Berjalan">Berjalan</option>
                            <option value="Selesai">Selesai</option>
                            <option value="Tertunda">Tertunda</option>
                        </select>
                    </div>
                    <div class="w-full md:w-auto">
                        <label for="search" class="block text-sm font-medium text-gray-700 mb-1">Cari Proyek</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <input type="text" id="search" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="Nama proyek...">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($agenda as $item)
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                    @if($item->status == 'Selesai') bg-green-100 text-green-800
                                    @elseif($item->status == 'Berjalan') bg-blue-100 text-blue-800
                                    @elseif($item->status == 'Tertunda') bg-yellow-100 text-yellow-800
                                    @else bg-gray-100 text-gray-800
                                    @endif">
                                    {{ $item->status ?? '-' }}
                                </span>
                                <h3 class="mt-2 text-xl font-medium text-gray-900">{{ $item->nama_proyek }}</h3>
                            </div>
                            <div class="text-right">
                                <span class="text-sm text-gray-500">Mulai</span>
                                <p class="text-sm font-medium text-gray-900">{{ $item->waktu_mulai }}</p>
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-sm text-gray-500">Anggaran</span>
                                    <p class="text-lg font-semibold text-gray-900">Rp{{ number_format($item->besar_anggaran, 0, ',', '.') }}</p>
                                </div>
                                @if($item->ukuran_proyek)
                                <div class="text-right">
                                    <span class="text-sm text-gray-500">Ukuran</span>
                                    <p class="text-sm font-medium text-gray-900">{{ $item->ukuran_proyek }}</p>
                                </div>
                                @endif
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <div class="mt-6">
                            <div class="flex justify-between text-sm text-gray-500 mb-1">
                                <span>Status Proyek</span>
                                <span>{{ $item->status ?? '-' }}</span>
                            </div>
                            @php
                                $progress = 0;
                                if ($item->status == 'Selesai') {
                                    $progress = 100;
                                } elseif ($item->status == 'Berjalan') {
                                    $progress = 75;
                                } elseif ($item->status == 'Tertunda') {
                                    $progress = 50;
                                }
                            @endphp
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-green-600 h-2.5 rounded-full" style="width: {{ $progress }}%"></div>
                            </div>
                        </div>

                        <div class="mt-6 flex justify-between items-center">
                            {{-- <a href="#" class="text-sm font-medium text-green-600 hover:text-green-500">
                                Detail Proyek →
                            </a> --}}
                            <span class="text-xs text-gray-500">
                                Terakhir update: {{ \Carbon\Carbon::parse($item->updated_at)->format('d M Y') }}
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @if($agenda->hasPages())
            <div class="mt-8">
                {{ $agenda->links() }}
            </div>
            @endif

            <!-- Empty State -->
            @if($agenda->isEmpty())
            <div class="text-center py-12">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h3 class="mt-2 text-lg font-medium text-gray-900">Tidak ada proyek</h3>
                <p class="mt-1 text-sm text-gray-500">Belum ada proyek yang tercatat saat ini.</p>
            </div>
            @endif
        </div>
    </div>

    <script>
        // Simple filtering functionality
        document.getElementById('status-filter').addEventListener('change', function() {
            const status = this.value;
            const projects = document.querySelectorAll('.bg-white.rounded-xl.shadow-md');
            
            projects.forEach(project => {
                const projectStatus = project.querySelector('span').textContent.trim();
                if (status === 'all' || projectStatus === status) {
                    project.style.display = 'block';
                } else {
                    project.style.display = 'none';
                }
            });
        });

        // Simple search functionality
        document.getElementById('search').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const projects = document.querySelectorAll('.bg-white.rounded-xl.shadow-md');
            
            projects.forEach(project => {
                const projectName = project.querySelector('h3').textContent.toLowerCase();
                if (projectName.includes(searchTerm)) {
                    project.style.display = 'block';
                } else {
                    project.style.display = 'none';
                }
            });
        });
    </script>
</x-layout>