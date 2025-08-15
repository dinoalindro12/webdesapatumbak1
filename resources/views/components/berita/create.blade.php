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
                        <label for="date" class="block text-sm font-medium text-gray-700">Tanggal Berita</label>
                        <input type="date" name="date" id="date" value="{{ old('date', now()->toDateString()) }}"
                            required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                        @error('date')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Penulis Berita (Auto-fill) -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Penulis Berita</label>
                        <input
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 bg-gray-100 sm:text-sm"
                            type="text" value="{{ Auth::user()->name }}" readonly>
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
                        <label for="image" class="block text-sm font-medium text-gray-700">Gambar Berita
                            (Opsional)</label>
                        <div class="mt-1 flex items-center">
                            <input type="file" name="image" id="image" accept="image/*" class="block w-full text-sm text-gray-500
                                          file:mr-4 file:py-2 file:px-4
                                          file:rounded-md file:border-0
                                          file:text-sm file:font-semibold
                                          file:bg-gray-50 file:text-gray-700
                                          hover:file:bg-gray-100">
                        </div>
                        <p class="mt-2 text-sm text-gray-500">Format: JPEG, PNG, JPG, GIF (Maksimal 2MB)</p>
                        @error('image')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Kategori Berita -->
                    <div>
                        <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                        <select name="kategori" id="kategori" required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                            <option value="">Pilih Kategori</option>
                            <option value="Pemerintahan" {{ (request('category') == 'pemerintahan') ? 'selected' : '' }}>
                                Pemerintahan</option>
                            <option value="Kesehatan" {{ (request('category') == 'kesehatan') ? 'selected' : '' }}>
                                Kesehatan</option>
                            <option value="Pendidikan" {{ (request('category') == 'pendidikan') ? 'selected' : '' }}>
                                Pendidikan</option>
                            <option value="Ekonomi" {{ (request('category') == 'ekonomi') ? 'selected' : '' }}>Ekonomi
                            </option>
                        </select>
                        @error('kategori')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-8 flex justify-end space-x-3">
                    <a href="{{ route('berita.index') }}"
                        class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Batal
                    </a>
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Publikasikan Berita
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>