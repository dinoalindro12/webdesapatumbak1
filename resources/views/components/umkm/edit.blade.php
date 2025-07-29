<x-app-layout title="Edit Perangkat Desa">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-2xl font-serif font-light text-gray-800">Edit Data Perangkat Desa</h2>
                <p class="text-sm text-gray-500 mt-1">Edit data {{ $perangkat->nama }} - {{ $perangkat->jabatan }}</p>
            </div>
            
            <form action="{{ route('perangkat.update', $perangkat->id) }}" method="POST" enctype="multipart/form-data" class="p-6">
                @csrf
                @method('PUT')
                
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <!-- Nama -->
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" value="{{ old('nama', $perangkat->nama) }}" 
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                        @error('nama')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Jabatan -->
                    <div>
                        <label for="jabatan" class="block text-sm font-medium text-gray-700">Jabatan</label>
                        <select name="jabatan" id="jabatan" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                            <option value="">Pilih Jabatan</option>
                            <option value="Kepala Desa" {{ old('jabatan', $perangkat->jabatan) == 'Kepala Desa' ? 'selected' : '' }}>Kepala Desa</option>
                            <option value="Sekretaris Desa" {{ old('jabatan', $perangkat->jabatan) == 'Sekretaris Desa' ? 'selected' : '' }}>Sekretaris Desa</option>
                            <option value="Kaur Pemerintahan" {{ old('jabatan', $perangkat->jabatan) == 'Kaur Pemerintahan' ? 'selected' : '' }}>Kaur Pemerintahan</option>
                            <option value="Kaur Umum" {{ old('jabatan', $perangkat->jabatan) == 'Kaur Umum' ? 'selected' : '' }}>Kaur Umum</option>
                            <option value="Kaur Keuangan" {{ old('jabatan', $perangkat->jabatan) == 'Kaur Keuangan' ? 'selected' : '' }}>Kaur Keuangan</option>
                            <option value="Kaur Pembangunan" {{ old('jabatan', $perangkat->jabatan) == 'Kaur Pembangunan' ? 'selected' : '' }}>Kaur Pembangunan</option>
                            <option value="BPD" {{ old('jabatan', $perangkat->jabatan) == 'BPD' ? 'selected' : '' }}>BPD</option>
                        </select>
                        @error('jabatan')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- NIP -->
                    <div>
                        <label for="nip" class="block text-sm font-medium text-gray-700">NIP (Opsional)</label>
                        <input type="text" name="nip" id="nip" value="{{ old('nip', $perangkat->nip) }}" 
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                        @error('nip')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Masa Jabatan -->
                    <div>
                        <label for="masa_jabatan" class="block text-sm font-medium text-gray-700">Masa Jabatan</label>
                        <input type="text" name="masa_jabatan" id="masa_jabatan" value="{{ old('masa_jabatan', $perangkat->masa_jabatan) }}" 
                               placeholder="Contoh: 2019-2025"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                        @error('masa_jabatan')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Kontak -->
                    <div>
                        <label for="kontak" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                        <input type="text" name="kontak" id="kontak" value="{{ old('kontak', $perangkat->kontak) }}" 
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                        @error('kontak')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email (Opsional)</label>
                        <input type="email" name="email" id="email" value="{{ old('email', $perangkat->email) }}" 
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Foto -->
                    <div class="sm:col-span-2">
                        <label for="foto" class="block text-sm font-medium text-gray-700">Foto Profil (Opsional)</label>
                        <div class="mt-1 flex items-center">
                            <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                @if($perangkat->foto)
                                    <img src="{{ asset('storage/'.$perangkat->foto) }}" class="h-full w-full object-cover" id="current-photo">
                                @else
                                    <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                @endif
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
                    <a href="{{ route('perangkat.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Batal
                    </a>
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Simpan Perubahan
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
                    const currentPhoto = document.getElementById('current-photo');
                    
                    if (currentPhoto) {
                        currentPhoto.src = e.target.result;
                    } else {
                        preview.innerHTML = `<img src="${e.target.result}" class="h-full w-full object-cover">`;
                    }
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</x-app-layout>