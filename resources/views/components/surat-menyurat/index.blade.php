<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Surat Menyurat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
                <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                        <!-- Search Section (optional, can be added if needed) -->
                        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                            <div class="w-full md:w-1/2">
                                <form method="GET" action="{{ url()->current() }}" class="flex items-center">
                                    <label for="search" class="sr-only">Cari</label>
                                    <div class="relative w-full">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <input type="text" name="search" id="search" value="{{ request('search') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Cari surat...">
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Table Section -->
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-4 py-3">No.</th>
                                        <th scope="col" class="px-4 py-3">Dokumen</th>
                                        <th scope="col" class="px-4 py-3">NIK</th>
                                        <th scope="col" class="px-4 py-3">Nama</th>
                                        <th scope="col" class="px-4 py-3">Tanggal Lahir</th>
                                        <th scope="col" class="px-4 py-3">Nomor HP</th>
                                        <th scope="col" class="px-4 py-3">Jenis Surat</th>
                                        <th scope="col" class="px-4 py-3 text-right">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($surats as $s)
                                        <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 transition transform hover:scale-105 duration-200">
                                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ ($surats->currentPage() - 1) * $surats->perPage() + $loop->iteration }}</th>
                                            <td class="px-4 py-3">
                                                @if($s->dokumen)
                                                    <a href="{{ asset('storage/dokumen_surat/' . $s->dokumen) }}" target="_blank" class="text-blue-600 hover:underline">Lihat Dokumen</a>
                                                @else
                                                    <span class="text-gray-400">-</span>
                                                @endif
                                            </td>
                                            <td class="px-4 py-3 font-mono">{{ $s->nik }}</td>
                                            <td class="px-4 py-3 font-semibold">{{ $s->nama }}</td>
                                            <td class="px-4 py-3">{{ $s->tanggal_lahir }}</td>
                                            <td class="px-4 py-3">{{ $s->no_hp }}</td>
                                            <td class="px-4 py-3">{{ $s->jenis_surat }}</td>
                                            <td class="px-4 py-3 flex items-center justify-end space-x-2">
                                            <a href="{{ route('surat-menyurat.show', $s->id) }}" class="bg-slate-600 hover:bg-slate-700 focus:ring-4 focus:outline-none focus:ring-slate-300 rounded-md px-3 py-2 transition duration-200 text-white">Lihat</a>
                                                <form action="{{ route('surat-menyurat.destroy', $s->id) }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Yakin nih mau dihapus?')" class="bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-md px-3 py-2 transition duration-200 text-white">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="px-4 py-3 text-center">Surat Masuk belum ada yang tersedia.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="p-4 bg-white dark:bg-gray-800 sm:rounded-b-lg">
                            {{ $surats->appends(request()->query())->links() }}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
   