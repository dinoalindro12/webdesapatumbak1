<x-app-layout title="Tambah Berita">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-2xl font-serif font-light text-gray-800">Tambah Berita Baru</h2>
            </div>
            
            <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data" class="p-6">
                @csrf
                
                <div class="grid grid-cols-1 gap-6">
                    <!-- Judul Berita -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Judul Berita</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}" required
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                        @error('title')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Tanggal Berita (Auto-fill) -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Tanggal Berita</label>
                        <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 bg-gray-100 sm:text-sm" 
                               type="text" 
                               value="{{ now()->format('d F Y') }}" 
                               readonly>
                        <input type="hidden" name="date" value="{{ now()->toDateString() }}">
                    </div>
                    
                    <!-- Penulis Berita (Auto-fill) -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Penulis Berita</label>
                        <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 bg-gray-100 sm:text-sm" 
                               type="text" 
                               value="{{ Auth::user()->name }}" 
                               readonly>
                    </div>
                    
                    <!-- Konten Berita -->
                    <div>
                        <label for="body" class="block text-sm font-medium text-gray-700">Isi Berita</label>
                        <textarea id="body" name="body" rows="10" required
                                  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">{{ old('body') }}</textarea>
                        @error('body')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Gambar Berita -->
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700">Gambar Berita (Opsional)</label>
                        <input type="file" name="image" id="image" accept="image/*"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                        @error('image')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Kategori Berita -->
                    <div>
                        <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                        <select name="kategori" id="kategori" 
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                            <option value="umum" {{ old('kategori') == 'umum' ? 'selected' : '' }}>Umum</option>
                            <option value="pendidikan" {{ old('kategori') == 'pendidikan' ? 'selected' : '' }}>Pendidikan</option>
                            <option value="kesehatan" {{ old('kategori') == 'kesehatan' ? 'selected' : '' }}>Kesehatan</option>
                            <option value="olahraga" {{ old('kategori') == 'olahraga' ? 'selected' : '' }}>Olahraga</option>
                            <option value="teknologi" {{ old('kategori') == 'teknologi' ? 'selected' : '' }}>Teknologi</option>
                        </select>
                        @error('kategori')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="mt-8 flex justify-end space-x-3">
                    <a href="{{ url()->previous() }}" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Batal
                    </a>
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Publikasikan Berita
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>