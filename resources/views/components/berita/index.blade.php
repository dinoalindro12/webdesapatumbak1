<x-app-layout title="Admin - Berita">
    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg border border-gray-200">
                <!-- Header & Actions -->
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 md:space-x-4 p-6">
                    <!-- Search -->
                    <div class="w-full md:w-1/2">
                        <form method="GET" action="{{ url()->current() }}">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" name="search" value="{{ request('search') }}"
                                    class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500"
                                    placeholder="Cari berita...">
                            </div>
                        </form>
                    </div>

                    <!-- Buttons -->
                    <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto">
                        <a href="{{ route('berita.create') }}"
                            class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition duration-200">
                            <svg class="-ml-1 mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            Berita Baru
                        </a>

                        <!-- Filter -->
                        <div class="relative">
                            <button id="filterDropdownButton"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition duration-200">
                                <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                        clip-rule="evenodd" />
                                </svg>
                                Filter
                            </button>

                            <!-- Dropdown Filter -->
                            <div id="filterDropdown"
                                class="hidden absolute right-0 mt-2 w-56 bg-white rounded-md shadow-lg z-10 border border-gray-200">
                                <div class="p-4">
                                    <h6 class="mb-2 text-sm font-medium text-gray-900">Filter Kategori</h6>
                                    <form method="GET" action="{{ url()->current() }}">
                                        <ul class="space-y-2">
                                            <li class="flex items-center">
                                                <input id="all" type="radio" name="kategori" value="" {{
    !request('kategori') ? 'checked' : '' }}
                                                    class="w-4 h-4 text-green-600 focus:ring-green-500">
                                                <label for="all" class="ml-2 text-sm text-gray-700">Semua
                                                    Kategori</label>
                                            </li>
                                            @foreach($kategories as $kategori)
                                                                                    <li class="flex items-center">
                                                                                        <input id="kategori-{{ $loop->index }}" type="radio" name="kategori"
                                                                                            value="{{ $kategori }}" {{ request('kategori') == $kategori
                                                ? 'checked' : '' }}
                                                                                            class="w-4 h-4 text-green-600 focus:ring-green-500">
                                                                                        <label for="kategori-{{ $loop->index }}"
                                                                                            class="ml-2 text-sm text-gray-700">{{ $kategori }}</label>
                                                                                    </li>
                                            @endforeach
                                        </ul>
                                        <input type="hidden" name="search" value="{{ request('search') }}">
                                        <button type="submit"
                                            class="mt-3 w-full px-3 py-1.5 bg-green-600 text-white text-sm rounded-md hover:bg-green-700 transition duration-200">Terapkan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Id</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Judul</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Isi</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Tanggal</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Penulis</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Kategori</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($posts as $post)
                                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $post->id
                                                            }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                            {{ $post->title }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 max-w-xs truncate"
                                                            title="{{ $post->body }}">{{
                                Str::limit($post->body, 10) }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                            {{ $post->date }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                            {{ $post->author->name }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                            <span
                                                                class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{
                                $post->kategori }}</span>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                            <div class="flex justify-end">
                                                                <div x-data="{ open{{ $post->id }}: false }" class="relative">
                                                                    <button @click="open{{ $post->id }} = !open{{ $post->id }}"
                                                                        class="text-gray-400 hover:text-gray-600 p-1 rounded-md hover:bg-gray-100 transition duration-150">
                                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                                            <path
                                                                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                                        </svg>
                                                                    </button>

                                                                    <!-- Dropdown Menu -->
                                                                    <div x-show="open{{ $post->id }}" @click.away="open{{ $post->id }} = false"
                                                                        class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 border border-gray-200">
                                                                        <ul class="py-1">
                                                                            <li>
                                                                                <a href="#"
                                                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Lihat</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"
                                                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                                                                            </li>
                                                                            <li>
                                                                                <form action="#" method="POST">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button type="submit"
                                                                                        class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">Hapus</button>
                                                                                </form>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-6 py-4 text-center text-sm text-gray-500">
                                        Tidak ada data berita
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                    {{ $posts->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>