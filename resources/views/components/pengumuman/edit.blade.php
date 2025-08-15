<x-app-layout title="Edit Pengumuman">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-8">
            <h1 class="text-2xl font-serif font-light text-gray-800">Edit Pengumuman</h1>
            <p class="text-sm text-gray-500 mt-1">Perbarui data pengumuman desa Sukamaju</p>
        </div>

        @if ($errors->any())
            <div class="mb-6 rounded-md bg-red-50 p-4">
                <ul class="list-disc pl-5 text-sm text-red-700">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('pengumuman.update', $pengumuman->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                <input type="text" name="judul" id="judul" value="{{ old('judul', $pengumuman->judul) }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring focus:ring-gray-200 focus:ring-opacity-50">
            </div>
            <div class="mb-4">
                <label for="isi" class="block text-sm font-medium text-gray-700">Isi</label>
                <textarea name="isi" id="isi" rows="6" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring focus:ring-gray-200 focus:ring-opacity-50">{{ old('isi', $pengumuman->isi) }}</textarea>
            </div>
            <div class="mb-6">
                <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal', $pengumuman->tanggal) }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring focus:ring-gray-200 focus:ring-opacity-50">
            </div>
            <div class="flex items-center justify-between">
                <a href="{{ route('pengumuman.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md text-sm text-gray-700 bg-white hover:bg-gray-50">
                    Batal
                </a>
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</x-app-layout>