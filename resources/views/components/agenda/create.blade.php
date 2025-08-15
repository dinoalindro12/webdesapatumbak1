<x-app-layout title="Tambah Proyek Desa">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-2xl font-serif font-light text-gray-800">Tambah Proyek Desa</h2>
            </div>
            <form action="{{ route('agenda.store') }}" method="POST" class="p-6">
                @csrf
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <!-- Nama Proyek -->
                    <div>
                        <label for="nama_proyek" class="block text-sm font-medium text-gray-700">Nama Proyek</label>
                        <input type="text" name="nama_proyek" id="nama_proyek" value="{{ old('nama_proyek') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                        @error('nama_proyek')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Waktu Mulai -->
                    <div>
                        <label for="waktu_mulai" class="block text-sm font-medium text-gray-700">Waktu Mulai (Tahun)</label>
                        <input type="number" name="waktu_mulai" id="waktu_mulai" value="{{ old('waktu_mulai') }}"
                            min="1900" max="{{ date('Y') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                        @error('waktu_mulai')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Besar Anggaran -->
                    <div>
                        <label for="besar_anggaran" class="block text-sm font-medium text-gray-700">Besar Anggaran (Rp)</label>
                        <input type="number" name="besar_anggaran" id="besar_anggaran" value="{{ old('besar_anggaran') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                        @error('besar_anggaran')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Ukuran Proyek -->
                    <div>
                        <label for="ukuran_proyek" class="block text-sm font-medium text-gray-700">Ukuran Proyek (Opsional)</label>
                        <input type="text" name="ukuran_proyek" id="ukuran_proyek" value="{{ old('ukuran_proyek') }}"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                        @error('ukuran_proyek')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Status -->
                    <div class="sm:col-span-2">
                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                        <select name="status" id="status"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                            <option value="">Pilih Status</option>
                            <option value="Selesai" {{ old('status') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                            <option value="Berjalan" {{ old('status') == 'Berjalan' ? 'selected' : '' }}>Berjalan</option>
                            <option value="Tertunda" {{ old('status') == 'Tertunda' ? 'selected' : '' }}>Tertunda</option>
                        </select>
                        @error('status')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-8 flex justify-end space-x-3">
                    <a href="{{ route('agenda.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Batal
                    </a>
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>