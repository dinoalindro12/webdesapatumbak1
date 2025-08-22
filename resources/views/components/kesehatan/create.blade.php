<x-app-layout title="Tambah Perangkat Desa">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-2xl font-serif font-light text-gray-800">Tambah Data Halama Kesehatan</h2>
            </div>
            
            <form action="{{ route('kesehatan.store') }}" method="POST" enctype="multipart/form-data" class="p-6">
                @csrf
                
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <!-- Program -->
                    <div>
                        <label for="nama_program" class="block text-sm font-medium text-gray-700">Nama Program</label>
                        <select name="nama_program" id="nama_program" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                            <option value="">Pilih Program</option>
                            <option value="Pengobatan Lansia Gratis" {{ old('nama_program') == 'Pengobatan Lansia Gratis' ? 'selected' : '' }}>Pengobatan Lansia Gratis</option>
                            <option value="Posyandu" {{ old('nama_program') == 'Posyandu' ? 'selected' : '' }}>Posyandu</option>
                            <option value="Ambulance Gratis" {{ old('nama_program') == 'Ambulance Gratis' ? 'selected' : '' }}>Ambulance Gratis</option>
                        </select>
                        @error('nama_program')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Nama -->
                    <div>
                        <label for="aktivitas_program" class="block text-sm font-medium text-gray-700">Aktivitas Program</label>
                        <input type="text" name="aktivitas_program" id="aktivitas_program" value="{{ old('aktivitas_program') }}" 
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                        @error('aktivitas_program')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    
                    
                    <!-- Jam Pelayanan -->
                    <div>
                        <label for="jam_pelayanan" class="block text-sm font-medium text-gray-700">Jam Pelayanan</label>
                        <input type="text" name="jam_pelayanan" id="jam_pelayanan" value="{{ old('jam_pelayanan') }}" 
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm"
                               placeholder="Contoh: Pukul 08.00 - 12.00">
                               @error('jam_pelayanan')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Tanggal Pelayanan -->
                    <div>
                        <label for="tanggal_pelayanan" class="block text-sm font-medium text-gray-700">Tanggal Pelayanan</label>
                        <input type="text" name="tanggal_pelayanan" id="tanggal_pelayanan" value="{{ old('tanggal_pelayanan') }}" 
                               placeholder="Contoh: Kamis, 20 Juli 2023"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                        @error('tanggal_pelayanan')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="lokasi_pelayanan" class="block text-sm font-medium text-gray-700">Lokasi Pelayanan</label>
                        <input type="text" name="lokasi_pelayanan" id="lokasi_pelayanan" value="{{ old('lokasi_pelayanan') }}" 
                               placeholder="Contoh: Balai Desa Patumbak 1"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                        @error('lokasi_pelayanan')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    
                </div>
                
                <div class="mt-8 flex justify-end space-x-3">
                    <a href="{{ route('kesehatan.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
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