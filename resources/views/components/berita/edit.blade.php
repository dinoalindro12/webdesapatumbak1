<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Berita') }}
        </h2>
    </x-slot>

    <div class="px-6 py-4 border-b border-gray-200">
        <h2 class="text-2xl font-serif font-light text-gray-800">Ubah Berita</h2>
    </div>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('berita.update', $berita->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-4">
                            <label for="title" class="block">Judul</label>
                            <input type="text" name="title" id="title" class="w-full border rounded p-2" 
                                value="{{ old('title', $berita->title) }}" required>
                            @error('title')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="date" class="block">Tanggal</label>
                            <input type="date" name="date" id="date" 
                                value="{{ old('date', $berita->date) }}" required
                                class="w-full border rounded p-2">
                            @error('date')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="body" class="block">Isi</label>
                            <textarea name="body" id="body" class="w-full border rounded p-2" rows="6" required>{{ old('body', $berita->body) }}</textarea>
                            @error('body')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="image" class="block">Ganti Gambar (opsional)</label>
                            <input type="file" name="image" id="image" class="w-full border rounded p-2">
                            @if($berita->image)
                                <img src="{{ asset('storage/'.$berita->image) }}" alt="Gambar" class="mt-2 w-32">
                                <p class="text-sm text-gray-500 mt-1">Gambar saat ini</p>
                            @endif
                            @error('image')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="kategori" class="block">Kategori</label>
                            <select name="kategori" id="kategori" class="w-full border rounded p-2" required>
                                <option value="Pemerintahan" {{ old('kategori', $berita->kategori) == 'Pemerintahan' ? 'selected' : '' }}>Pemerintahan</option>
                                <option value="Kesehatan" {{ old('kategori', $berita->kategori) == 'Kesehatan' ? 'selected' : '' }}>Kesehatan</option>
                                <option value="Pendidikan" {{ old('kategori', $berita->kategori) == 'Pendidikan' ? 'selected' : '' }}>Pendidikan</option>
                                <option value="Ekonomi" {{ old('kategori', $berita->kategori) == 'Ekonomi' ? 'selected' : '' }}>Ekonomi</option>
                            </select>
                            @error('kategori')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="is_active" class="flex items-center">
                                <input type="checkbox" name="is_active" id="is_active" value="1" 
                                    {{ old('is_active', $berita->is_active) ? 'checked' : '' }}
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <span class="ml-2">Berita Aktif</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('berita.index') }}" class="mr-4 text-gray-600 hover:text-gray-800">Batal</a>
                            <x-primary-button>
                                {{ __('Update Berita') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>