<x-app-layout title="Tambah Perangkat Desa">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-2xl font-serif font-light text-gray-800">Tambah Perangkat Desa</h2>
            </div>
            
            <form action="{{ route('umkm.store') }}" method="POST" enctype="multipart/form-data" class="p-6">
                @csrf
                
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <!-- nama_usaha -->
                    <div>
                        <label for="nama_usaha" class="block text-sm font-medium text-gray-700">Nama Usaha</label>
                        <input type="text" name="nama_usaha" id="nama_usaha" value="{{ old('nama_usaha') }}" 
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                        @error('nama_usaha')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Jabatan -->
                    <div>
                        <label for="jenis_usaha" class="block text-sm font-medium text-gray-700">Jenis Usaha</label>
                        <select name="jenis_usaha" id="jenis_usaha" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                            <option value="">Pilih Jenis Usaha</option>
                            <option value="Peternakan" {{ old('jenis_usaha') == 'Peternakan' ? 'selected' : '' }}>Peternakan</option>
                            <option value="Pertanian" {{ old('jenis_usaha') == 'Pertanian' ? 'selected' : '' }}>Pertanian</option>
                            <option value="UMKM" {{ old('jenis_usaha') == 'UMKM' ? 'selected' : '' }}>UMKM</option>
                        </select>
                        @error('jenis_usaha')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- NIP -->
                    <div>
                        <label for="kontak" class="block text-sm font-medium text-gray-700">Kontak </label>
                        <input type="text" name="kontak" id="kontak" value="{{ old('kontak') }}" 
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                        @error('kontak')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Masa jenis_usaha -->
                    <div>
                        <label for="lokasi_usaha" class="block text-sm font-medium text-gray-700">Lokasi Usaha</label>
                        <input type="text" name="lokasi_usaha" id="lokasi_usaha" value="{{ old('lokasi_usaha') }}" 
                               placeholder="Contoh: Jl. Jamin Ginting"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                        @error('lokasi_usaha')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Foto -->
                    <div class="sm:col-span-2">
                        <label for="foto" class="block text-sm font-medium text-gray-700">Foto Unit Usaha</label>
                        <div class="mt-1 flex items-center">
                            <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </span>
                            <input type="file" name="foto" id="foto" 
                                   class="ml-5 py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        </div>
                        <p class="mt-1 text-sm text-gray-500">Format: JPG, PNG (Maksimal 2MB)</p>
                        @error('foto')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="mt-8 flex justify-end space-x-3">
                    <a href="{{ route('umkm.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
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