<x-app-layout title="Tambah Perangkat Desa">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white dark:bg-gray-800 shadow rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                <h2 class="text-2xl font-serif font-light text-gray-800 dark:text-white">Tambah Perangkat Desa</h2>
            </div>
            
            <form action="{{ route('perangkat.store') }}" method="POST" enctype="multipart/form-data" class="p-6">
                @csrf
                
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <!-- Nama -->
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" value="{{ old('nama') }}" 
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        @error('nama')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Jabatan -->
                    <div>
                        <label for="jabatan" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Jabatan</label>
                        <select name="jabatan" id="jabatan" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <option value="">Pilih Jabatan</option>
                            <option value="Kepala Desa" {{ old('jabatan') == 'Kepala Desa' ? 'selected' : '' }}>Kepala Desa</option>
                            <option value="Sekretaris Desa" {{ old('jabatan') == 'Sekretaris Desa' ? 'selected' : '' }}>Sekretaris Desa</option>
                            <option value="Kaur Pemerintahan" {{ old('jabatan') == 'Kaur Pemerintahan' ? 'selected' : '' }}>Kaur Pemerintahan</option>
                            <option value="Kaur Umum" {{ old('jabatan') == 'Kaur Umum' ? 'selected' : '' }}>Kaur Umum</option>
                            <option value="Kaur Keuangan" {{ old('jabatan') == 'Kaur Keuangan' ? 'selected' : '' }}>Kaur Keuangan</option>
                            <option value="Kaur Pembangunan" {{ old('jabatan') == 'Kaur Pembangunan' ? 'selected' : '' }}>Kaur Pembangunan</option>
                            <option value="BPD" {{ old('jabatan') == 'BPD' ? 'selected' : '' }}>BPD</option>
                        </select>
                        @error('jabatan')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- NIP -->
                    <div>
                        <label for="nip" class="block text-sm font-medium text-gray-700 dark:text-gray-300">NIP (Opsional)</label>
                        <input type="text" name="nip" id="nip" value="{{ old('nip') }}" 
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        @error('nip')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Masa Jabatan -->
                    <div>
                        <label for="masa_jabatan" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Masa Jabatan</label>
                        <input type="text" name="masa_jabatan" id="masa_jabatan" value="{{ old('masa_jabatan') }}" 
                               placeholder="Contoh: 2019-2025"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        @error('masa_jabatan')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Kontak -->
                    <div>
                        <label for="kontak" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nomor Telepon</label>
                        <input type="text" name="kontak" id="kontak" value="{{ old('kontak') }}" 
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        @error('kontak')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email (Opsional)</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" 
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        @error('email')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Foto -->
                    <div class="sm:col-span-2">
                        <label for="foto" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Foto Profil (Opsional)</label>
                        <div class="mt-1 flex items-center">
                            <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100 dark:bg-gray-700">
                                <svg class="h-full w-full text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </span>
                            <input type="file" name="foto" id="foto" 
                                   class="ml-5 py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        </div>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Format: JPG, PNG (Maksimal 2MB)</p>
                        @error('foto')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="mt-8 flex justify-end space-x-3">
                    <a href="{{ route('perangkat.show') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        Batal
                    </a>
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 dark:bg-gray-600 dark:hover:bg-gray-500">
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