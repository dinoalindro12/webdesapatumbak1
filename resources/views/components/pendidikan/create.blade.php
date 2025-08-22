<x-app-layout title="Tambah Perangkat Desa">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-2xl font-serif font-light text-gray-800">Tambah Data Institusi Pendidikan</h2>
            </div>
            
            <form action="{{ route('pendidikan.store') }}" method="POST" enctype="multipart/form-data" class="p-6">
                @csrf
                
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <!-- Nama -->
                    <div>
                        <label for="nama_institusi" class="block text-sm font-medium text-gray-700">Nama Institusi</label>
                        <input type="text" name="nama_institusi" id="nama_institusi" value="{{ old('nama_institusi') }}" 
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                        @error('nama_institusi')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Jabatan -->
                    <div>
                        <label for="tingkat_pendidikan" class="block text-sm font-medium text-gray-700">Tingkat Pendidikan</label>
                        <select name="tingkat_pendidikan" id="tingkat_pendidikan" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                            <option value="">Pilih Tingkat Pendidikan</option>
                            <option value="TK/PAUD" {{ old('tingkat_pendidikan') == 'TK/PAUD' ? 'selected' : '' }}>TK/PAUD</option>
                            <option value="Sekolah Dasar" {{ old('tingkat_pendidikan') == 'Sekolah Dasar' ? 'selected' : '' }}>Sekolah Dasar</option>
                            <option value="SMP" {{ old('tingkat_pendidikan') == 'SMP' ? 'selected' : '' }}>SMP</option>
                            <option value="SMA" {{ old('tingkat_pendidikan') == 'SMA' ? 'selected' : '' }}>SMA</option>
                            <option value="SMK" {{ old('tingkat_pendidikan') == 'SMK' ? 'selected' : '' }}>SMK</option>
                            <option value="Perguruan Tinggi" {{ old('tingkat_pendidikan') == 'Perguruan Tinggi' ? 'selected' : '' }}>Perguruan Tinggi</option>
                        </select>
                        @error('tingkat_pendidikan')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Alamat -->
                    <div>
                        <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat </label>
                        <input type="text" name="alamat" id="alamat" value="{{ old('alamat') }}" 
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                        @error('alamat')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Masa Jabatan -->
                    <div>
                        <label for="tahun_berdiri" class="block text-sm font-medium text-gray-700">Tahun Berdiri</label>
                        <input type="text" name="tahun_berdiri" id="tahun_berdiri" value="{{ old('tahun_berdiri') }}" 
                               placeholder="Contoh: 2025"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                        @error('tahun_berdiri')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- akreditasi -->
                    <div>
                        <label for="akreditasi" class="block text-sm font-medium text-gray-700">Akreditasi</label>
                        <input type="text" name="akreditasi" id="akreditasi" value="{{ old('akreditasi') }}" 
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                        @error('akreditasi')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
                
                <div class="mt-8 flex justify-end space-x-3">
                    <a href="{{ route('pendidikan.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Batal
                    </a>
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Preview image before upload
        document.getElementById('foto').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.querySelector('.inline-block.h-12.w-12.rounded-full');
                    preview.innerHTML = `<img src="${e.target.result}" class="h-full w-full object-cover">`;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</x-app-layout>