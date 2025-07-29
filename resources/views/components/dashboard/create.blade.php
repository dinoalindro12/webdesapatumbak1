<x-app-layout title="Admin - Tambah Data Beranda">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header Section -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8">
            <div>
                <h1 class="text-2xl font-serif font-light text-gray-800">Tambah Data Beranda Desa</h1>
                <p class="text-sm text-gray-500 mt-1">Manajemen Web desa Patumbak 1</p>
            </div>
            <a href="{{ route('dashboard.index') }}" class="mt-4 sm:mt-0 inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                Kembali ke Daftar
            </a>
        </div>

        <!-- Error Messages -->
        @if ($errors->any())
        <div class="mb-6 rounded-md bg-red-50 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-red-800">
                        Terdapat {{ $errors->count() }} kesalahan pada input Anda:
                    </h3>
                    <div class="mt-2 text-sm text-red-700">
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Form Section -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('dashboard.store') }}">
                @csrf
                <div class="px-6 py-5 space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Left Column -->
                        <div class="space-y-4">
                            <div>
                                <label for="total_penduduk" class="block text-sm font-medium text-gray-700">Total Penduduk *</label>
                                <input type="number" name="total_penduduk" id="total_penduduk" 
                                       value="{{ old('total_penduduk') }}" 
                                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm"
                                       required
                                       min="0">
                            </div>

                            <div>
                                <label for="anggaran_desa" class="block text-sm font-medium text-gray-700">Anggaran Desa (Rp) *</label>
                                <input type="number" name="anggaran_desa" id="anggaran_desa" 
                                       value="{{ old('anggaran_desa') }}" 
                                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm"
                                       required
                                       min="0"
                                       step="1000">
                            </div>

                            <div>
                                <label for="jumlah_program" class="block text-sm font-medium text-gray-700">Jumlah Program *</label>
                                <input type="number" name="jumlah_program" id="jumlah_program" 
                                       value="{{ old('jumlah_program') }}" 
                                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm"
                                       required
                                       min="0">
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="space-y-4">
                            <div>
                                <label for="jumlah_umkm" class="block text-sm font-medium text-gray-700">Jumlah UMKM *</label>
                                <input type="number" name="jumlah_umkm" id="jumlah_umkm" 
                                       value="{{ old('jumlah_umkm') }}" 
                                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm"
                                       required
                                       min="0">
                            </div>

                            <div>
                                <label for="prestasi" class="block text-sm font-medium text-gray-700">Prestasi Desa</label>
                                <input type="text" name="prestasi" id="prestasi" 
                                       value="{{ old('prestasi') }}" 
                                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm"
                                       maxlength="255">
                            </div>

                            <div>
                                <label for="anggaran_terpakai" class="block text-sm font-medium text-gray-700">Anggaran Terpakai (Rp) *</label>
                                <input type="number" name="anggaran_terpakai" id="anggaran_terpakai" 
                                       value="{{ old('anggaran_terpakai') }}" 
                                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm"
                                       required
                                       min="0"
                                       step="1000">
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="aktivitas_terkini" class="block text-sm font-medium text-gray-700">Aktivitas Terkini *</label>
                        <textarea id="aktivitas_terkini" name="aktivitas_terkini" rows="3" 
                                  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm"
                                  required>{{ old('aktivitas_terkini') }}</textarea>
                    </div>

                    <div class="flex justify-end pt-6 border-t border-gray-200">
                        <button type="reset" class="mr-3 inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            Reset Form
                        </button>
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Simpan Data
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>