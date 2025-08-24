<x-app-layout title="Admin - Surat Menyurat">
    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg border border-gray-200">
                <!-- Filter Section -->
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-6">
                    <div class="w-full">
                        <form method="GET" action="{{ url()->current() }}"
                            class="flex flex-col md:flex-row items-end gap-3">
                            <!-- Filter Jenis Surat (hanya ikon) -->
                            <div class="relative w-full md:w-[65px]">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-2 z-20 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                    </svg>
                                </div>
                                <select name="jenis_surat"
                                    class="block w-full pl-2 pr-2 py-2 text-sm border border-gray-300 rounded-lg focus:ring-purple-500 focus:border-purple-500 appearance-none">
                                    <option value="">Semua Jenis Surat</option>
                                    <option value="Surat Keterangan Domisili" {{ request('jenis_surat') == 'Surat Keterangan Domisili' ? 'selected' : '' }}>Domisili</option>
                                    <option value="Surat Keterangan Catatan Kriminal" {{ request('jenis_surat') == 'Surat Keterangan Catatan Kriminal' ? 'selected' : '' }}>Catatan Kriminal</option>
                                    <option value="Surat Keterangan Kematian" {{ request('jenis_surat') == 'Surat Keterangan Kematian' ? 'selected' : '' }}>Kematian</option>
                                    <option value="Surat Keterangan Usaha" {{ request('jenis_surat') == 'Surat Keterangan Usaha' ? 'selected' : '' }}>Usaha</option>
                                    <option value="Surat Keterangan Wali" {{ request('jenis_surat') == 'Surat Keterangan Wali' ? 'selected' : '' }}>Wali</option>
                                </select>
                            </div>

                            <!-- Filter Tanggal (kecil) -->
                            <div class="relative flex-1">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <input type="date" name="tanggal" value="{{ request('tanggal') }}"
                                    class="block w-full pl-9 pr-2 py-2 text-sm border border-gray-300 rounded-lg focus:ring-purple-500 focus:border-purple-500">
                            </div>

                            <!-- Filter Status (hanya ikon) -->
                            <div class="relative flex-1">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <select name="status_filter"
                                    class="block w-full pl-9 pr-2 py-2 text-sm border border-gray-300 rounded-lg focus:ring-purple-500 focus:border-purple-500 appearance-none">
                                    <option value="">Semua</option>
                                    <option value="diajukan" {{ request('status_filter') == 'diajukan' ? 'selected' : '' }}>Diajukan</option>
                                    <option value="dicetak" {{ request('status_filter') == 'dicetak' ? 'selected' : '' }}>
                                        Dicetak</option>
                                </select>
                            </div>

                            <!-- Tombol Aksi -->
                            <div class="flex space-x-2">
                                <button type="submit"
                                    class="px-3 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition duration-200 flex items-center text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                                    </svg>
                                    Filter
                                </button>
                                <a href="{{ url()->current() }}"
                                    class="px-3 py-2 bg-gray-400 text-white rounded-lg hover:bg-gray-600 transition duration-200 flex items-center text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                    </svg>
                                    Reset
                                </a>
                            </div>
                        </form>
                    </div>
                    <div>
                        <a href="{{ route('surat-menyurat.create') }}"
                            class="mt-4 sm:mt-0 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-purple-600 hover:bg-purple-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                            <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            Buat Surat Baru
                        </a>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    No.</th>
                                <th scope="col"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Tanggal Dibuat</th>
                                <th scope="col"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    NIK</th>
                                <th scope="col"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nama</th>
                                <th scope="col"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Jenis Surat</th>
                                <th scope="col"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status</th>
                                <th scope="col"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($surats as $s)
                                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                            {{ ($surats->currentPage() - 1) * $surats->perPage() + $loop->iteration }}
                                                        </td>
                                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">
                                                            {{ $s->created_at ? \Carbon\Carbon::parse($s->created_at)->format('d-m-Y H:i') : '-' }}
                                                        </td>
                                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">{{ $s->nik }}</td>
                                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">{{ $s->nama }}</td>
                                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">
                                                            {{ $s->jenis_surat }}
                                                        </td>
                                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">
                                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                                                    {{ $s->status === 'selesai' ? 'bg-green-100 text-green-800' :
                                ($s->status === 'ditolak' ? 'bg-red-100 text-red-800' :
                                    ($s->status === 'dicetak' ? 'bg-green-100 text-green-800' :
                                        'bg-yellow-100 text-yellow-800')) }}">
                                                                {{ $s->status ?? 'diajukan' }}
                                                            </span>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                            <div class="flex justify-end space-x-3">
                                                                <a href="{{ route('surat-menyurat.show', ['source' => $s->source, 'id' => $s->id]) }}"
                                                                    class="text-white bg-blue-600 hover:bg-blue-700 px-3 py-1.5 rounded-md text-sm font-medium transition duration-200">
                                                                    Lihat
                                                                </a>
                                                                <form
                                                                    action="{{ route('surat-menyurat.destroy', ['source' => $s->source, 'id' => $s->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="text-white bg-red-600 hover:bg-red-700 px-3 py-1.5 rounded-md text-sm font-medium transition duration-200"
                                                                        onclick="return confirm('Yakin menghapus?')">
                                                                        Hapus
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-6 py-4 text-center text-sm text-gray-500">
                                        Tidak ada data surat
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                    {{ $surats->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>