<x-app-layout title="Tambah Galeri">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h1 class="text-2xl font-serif font-light text-gray-800 mb-6">Tambah Data Galeri</h1>
        <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data" class="bg-white shadow rounded-lg p-6 space-y-6">
            @csrf

            <div>
                <label for="link_video" class="block text-sm font-medium text-gray-700">Link Video</label>
                <input type="url" name="link_video" id="link_video" value="{{ old('link_video') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500">
                @error('link_video')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="keterangan_video" class="block text-sm font-medium text-gray-700">Keterangan Video</label>
                <input type="text" name="keterangan_video" id="keterangan_video" value="{{ old('keterangan_video') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500">
                @error('keterangan_video')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="gambar" class="block text-sm font-medium text-gray-700">Foto</label>
                <input type="file" name="gambar" id="gambar" accept="image/*" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100">
                @error('gambar')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="keterangan_gambar" class="block text-sm font-medium text-gray-700">Keterangan Foto</label>
                <input type="text" name="keterangan_gambar" id="keterangan_gambar" value="{{ old('keterangan_gambar') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500">
                @error('keterangan_gambar')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-gray-500 focus:border-gray-500" required>
                @error('tanggal')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <a href="{{ route('galeri.index') }}" class="mr-3 inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">Batal</a>
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-app-layout>