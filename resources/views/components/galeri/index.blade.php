<x-app-layout title="Kelola Galeri">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8">
            <div>
                <h1 class="text-2xl font-serif font-light text-gray-800">Kelola Galeri Desa</h1>
                <p class="text-sm text-gray-500 mt-1">Manajemen Galeri Web Desa Patumbak 1</p>
            </div>
            <a href="{{ route('galeri.create') }}" class="mt-4 sm:mt-0 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-pink-600 hover:bg-pink-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Tambah Data
            </a>
        </div>

        <!-- Filter untuk Admin -->
        <div class="mb-6 flex flex-wrap gap-3">
            <a href="{{ route('galeri.index', ['type' => 'semua']) }}" class="px-4 py-2 rounded-md {{ $type == 'semua' ? 'bg-pink-600 text-white' : 'bg-white text-pink-500 border border-gray-300' }} text-sm font-medium transition-colors duration-200">
                Semua
            </a>
            <a href="{{ route('galeri.index', ['type' => 'foto']) }}" class="px-4 py-2 rounded-md {{ $type == 'foto' ? 'bg-pink-600 text-white' : 'bg-white text-pink-500 border border-gray-300' }} text-sm font-medium transition-colors duration-200">
                Foto
            </a>
            <a href="{{ route('galeri.index', ['type' => 'video']) }}" class="px-4 py-2 rounded-md {{ $type == 'video' ? 'bg-pink-600 text-white' : 'bg-white text-pink-500 border border-gray-300' }} text-sm font-medium transition-colors duration-200">
                Video
            </a>
        </div>

        @if(session('success'))
        <div class="mb-6 rounded-md bg-green-50 p-4 border border-green-200">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-green-800">
                        {{ session('success') }}
                    </p>
                </div>
            </div>
        </div>
        @endif

        <div class="bg-white shadow overflow-hidden sm:rounded-lg border border-gray-200">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tipe</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Konten</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keterangan</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($galeri as $item)
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $loop->iteration + ($galeri->currentPage() - 1) * $galeri->perPage() }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $item->type == 'foto' ? 'bg-blue-100 text-blue-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $item->type == 'foto' ? 'Foto' : 'Video' }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->kategori }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                @if($item->type == 'foto' && $item->gambar)
                                    <div class="relative group">
                                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="Foto Galeri" class="h-12 w-12 object-cover rounded shadow-sm">
                                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-200 rounded">
                                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                @elseif($item->type == 'video' && $item->link_video)
                                    <a href="{{ $item->link_video }}" target="_blank" class="text-blue-600 hover:text-blue-800 hover:underline truncate max-w-xs inline-flex items-center transition-colors duration-200">
                                        <svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
                                        </svg>
                                        {{ Str::limit($item->link_video, 25) }}
                                    </a>
                                @else
                                    <span class="text-gray-400">-</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 max-w-xs">
                                <div class="truncate" title="{{ $item->type == 'foto' ? $item->keterangan_gambar : $item->keterangan_video }}">
                                    {{ $item->type == 'foto' ? $item->keterangan_gambar : $item->keterangan_video }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->tanggal->format('d M Y') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex justify-end space-x-2">
                                    <!-- View Button -->
                                    @if($item->type == 'foto' && $item->gambar)
                                        <a href="{{ asset('storage/' . $item->gambar) }}" target="_blank" 
                                           class="text-blue-600 hover:text-blue-900 p-1.5 rounded-md hover:bg-blue-100 transition duration-200"
                                           title="Lihat Gambar">
                                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                    @elseif($item->type == 'video' && $item->link_video)
                                        <a href="{{ $item->link_video }}" target="_blank" 
                                           class="text-blue-600 hover:text-blue-900 p-1.5 rounded-md hover:bg-blue-100 transition duration-200"
                                           title="Tonton Video">
                                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </a>
                                    @endif
                                    
                                    <!-- Edit Button -->
                                    <a href="{{ route('galeri.edit', $item->id) }}" 
                                       class="text-yellow-600 hover:text-yellow-900 p-1.5 rounded-md hover:bg-yellow-100 transition duration-200"
                                       title="Edit">
                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>
                                    
                                    <!-- Delete Button -->
                                    <form action="{{ route('galeri.destroy', $item->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="text-red-600 hover:text-red-900 p-1.5 rounded-md hover:bg-red-100 transition duration-200"
                                                title="Hapus" 
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            @if($galeri->hasPages())
            <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                {{ $galeri->appends(['type' => $type])->links() }}
            </div>
            @endif
        </div>
    </div>

    <style>
        .pagination {
            display: flex;
            justify-content: center;
            list-style-type: none;
            padding: 0;
        }
        
        .pagination li {
            margin: 0 4px;
        }
        
        .pagination li a,
        .pagination li span {
            display: inline-block;
            padding: 8px 12px;
            border-radius: 6px;
            border: 1px solid #e5e7eb;
            color: #4b5563;
            font-size: 14px;
            transition: all 0.2s;
        }
        
        .pagination li a:hover {
            background-color: #f9fafb;
            border-color: #d1d5db;
        }
        
        .pagination li.active span {
            background-color: #ec4899;
            border-color: #ec4899;
            color: white;
        }
        
        .pagination li.disabled span {
            color: #9ca3af;
            background-color: #f3f4f6;
        }
    </style>
</x-app-layout>